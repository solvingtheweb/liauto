<?php
	/** 
     * @author roshi
     * @copyright roshi[www.themeforest.net/user/roshi]
     * @version 2012
     */
if(!function_exists('themeple_admin_save_data')){
    
    /**
     * themeple_admin_save_data()
     * 
     * @return
     */
    function themeple_admin_save_data(){
        if(function_exists('check_ajax_referer')) { check_ajax_referer('themeple_admin_save_data'); }
		if(!isset($_POST['data']) || !isset($_POST['prefix']) || !isset($_POST['slug'])) { die(); }
		
		$optionkey = $_POST['prefix'];
			
		$data_sets = explode("&",$_POST['data']);
		
		$store_me = themeple_ajax_save_options_create_array($data_sets);
		
		$current_options = get_option($optionkey);
        
		$current_options[$_POST['slug']] = $store_me;
        if(isset($_POST['dynamicOrder']) && $_POST['dynamicOrder'] != "")
		{
			global $controller;
			$current_elments = array();
			$options = get_option($optionkey.'_dynamic_elements');	

			foreach($options as $key => $element)
			{
				if(in_array($element['slug'], $controller->subs[$_POST['slug']]))
				{
					$current_elments[$key] = $element;
					unset($options[$key]);
				} 
			}
		
		
			$sortedOptions = array();
			$neworder = explode('-__-',$_POST['dynamicOrder']);

			foreach($neworder as $key)
			{
				if($key != "" && array_key_exists($key, $current_elments)) 
				{
					$sortedOptions[$key] = $current_elments[$key];
				}
			}

			
			$options = array_merge($options, $sortedOptions);

			update_option($optionkey.'_dynamic_elements', $options);
		}
		update_option($optionkey, $current_options);	
		
		
		die('themeple_save');
    }
    
    add_action('wp_ajax_themeple_admin_save_data', 'themeple_admin_save_data');
    
}

if(!function_exists('themeple_ajax_save_options_create_array'))
{
	/**
	 * themeple_ajax_save_options_create_array()
	 * 
	 * @param mixed $data_sets
	 * @param bool $global_post_array
	 * @return
	 */
	function themeple_ajax_save_options_create_array($data_sets, $global_post_array = false)
	{
		$result = array();
		$charset = get_bloginfo('charset');

		foreach($data_sets as $key => $set)
		{
			$temp_set = array();

			if($global_post_array)
			{
				$temp_set[0] = $key;
				$temp_set[1] = $set;
				$set = $temp_set;
			}
			else
			{

				$set = explode("=", $set);
				
			}

			$set[1] = htmlentities(urldecode($set[1]), ENT_QUOTES, $charset);
			$set[1] = stripslashes($set[1]);

			 
			if($set[0] != "") 
			{
				if(strpos($set[0], '-__-') !== false)
				{
					$set[0] = explode('-__-',$set[0]);
					
					$arrayString = '$result';
					
					foreach($set[0] as $arraykey)
					{
						$arrayString.= "['".$arraykey."']";
					}
					
					$arrayString .= '="'.$set[1].'";' ;
					eval($arrayString);
				}
				else
				{
					$result[$set[0]] = $set[1];
				}
			}
		}
		
	return $result;
	}
}


if(!function_exists('themeple_ajax_create_dynamic_options'))
{
	/**
	 * themeple_ajax_create_dynamic_options()
	 * 
	 * @return
	 */
	function themeple_ajax_create_dynamic_options()
	{

		if(function_exists('check_ajax_referer')) { check_ajax_referer('themeple_admin_save_data'); }
		$options = new themeple_database_options_sets();
		
		if($_POST['method'] == 'add_option_page')
		{
			$result = $options->add_option_page($_POST);

			if(is_array($result))
			{
				$html = new themeple_viewgen();
				$new_slug = $result['slug'];
				$result = "{themeple_ajax_option_page}" .$html->generate_base_container($result) ."{/themeple_ajax_option_page}";
				
				if(isset($_POST['default_elements']))
				{	
					$elements = unserialize( base64_decode( $_POST['default_elements'] ) );
					
					$result .= "{themeple_ajax_element}";
					foreach($elements as &$element)
					{
						$element['id']   = $new_slug . $element['id'];
						$element['slug'] = $new_slug;

						$result .=  $html->generate_element($element);

						$options->add_element_to_db($element, $_POST);
					}
					$result .= "{/themeple_ajax_element}";

				}
			}
		}
		
		

		
		die($result);
	}

	add_action('wp_ajax_themeple_ajax_create_dynamic_options', 'themeple_ajax_create_dynamic_options');
}

/**
 * themeple_ajax_fetch_all()
 * 
 * @param mixed $element
 * @param mixed $sent_data
 * @return
 */
function themeple_ajax_fetch_all($element, $sent_data)
{
	$post_id = $sent_data['apply_all'];
	$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post_id); 
	$attachments = get_posts($args);
	if($attachments && is_array($attachments))
	{
		$counter = 0;
		$element['ajax_request'] = count($attachments);
		foreach($attachments as $attachment)
		{
			$element['std'][$counter]['slideshow_image'] = $attachment->ID;
			$counter++;
		}
	}
	return $element;
}

if(!function_exists("themeple_ajax_modify_table")){
    /**
     * themeple_ajax_modify_table()
     * 
     * @return
     */
    function themeple_ajax_modify_table(){

		if($_POST['method'] == 'add')
		{
            
			$html = new themeple_viewgen();
			$sets = new themeple_database_options_sets();
			
			if(isset($_POST['context']))
			{    
			     $html->used_for = $_POST['context'];

				if($_POST['context'] =='custom_set')
				{
					if(! @include(THEMEPLE_BASE.$_POST['configFile'])) include($_POST['configFile']);
					$sets->elements = $elements;
				}
                
                if($_POST['context'] =='metabox')
				{
					include( THEMEPLE_BASE.'/template_inc/admin/admin_metabox.php' );
					$sets->elements = $elements;
				}
			}

		
			$element = $sets->get($_POST['elementSlug']);
           
			if($element)
			{
				if(isset($_POST['context']) && $_POST['context'] =='custom_set')
				{
					$element['slug'] = $_POST['optionSlug'];
					$element['id']   = $_POST['optionSlug'] . $element['id'];
				
					$sets->add_element_to_db($element, $_POST);
				}
				
				if(isset($_POST['std']))
				{
					$element['std'][0] = $_POST['std'];
				}
				
				if(isset($_POST['apply_all']))
				{
					$element['apply_all'] = $_POST['apply_all'];
				}
				
				
				$element['ajax_request'] = 1;
				
				if(isset($_POST['apply_filter'])){
				    add_filter('themeple_generate_element_filter', $_POST['apply_filter'], 10, 2);
				}
                $element = apply_filters('themeple_generate_element_filter', $element, $_POST);
				echo "{themeple_ajax_element}" .$html->generate_element($element) ."{/themeple_ajax_element}";
				
			}
		}
			

		die();
	}
    
    add_action("wp_ajax_themeple_ajax_modify_table", "themeple_ajax_modify_table");
}

if(!function_exists('themeple_get_image_ajax')){
    /**
     * themeple_get_image_ajax()
     * 
     * @return
     */
    function themeple_get_image_ajax(){

		$attachment_id = (int) $_POST['attachment_id'];
		$attachment = get_post($attachment_id);
		$mime_type = $attachment->post_mime_type;
				
		if (strpos($mime_type, 'flash') !== false || substr($mime_type, 0, 5) == 'video')
		{
			$output = $attachment->guid;
		}
		else
		{
			$output = wp_get_attachment_image($attachment_id, array(100,100));
		}

		die($output);
	}

	add_action('wp_ajax_themeple_get_image_ajax', 'themeple_get_image_ajax');
    
}

if(!function_exists('themeple_ajax_delete_dynamic_element'))
{
	function themeple_ajax_delete_dynamic_element()
	{
		if(function_exists('check_ajax_referer')) { check_ajax_referer('themeple_admin_save_data'); }
		$options = new themeple_database_options_sets();

		$options->remove_element_from_db($_POST);
		
		die('themeple_removed_element');
	}

	add_action('wp_ajax_themeple_ajax_delete_dynamic_element', 'themeple_ajax_delete_dynamic_element');
}

if(!function_exists('themeple_ajax_delete_dynamic_options'))
{
	function themeple_ajax_delete_dynamic_options()
	{
		if(function_exists('check_ajax_referer')) { check_ajax_referer('themeple_admin_save_data'); }
		$options = new themeple_database_options_sets();
		$options->remove_dynamic_page($_POST);
		die("themeple_removed_page");
	}
	add_action('wp_ajax_themeple_ajax_delete_dynamic_options', 'themeple_ajax_delete_dynamic_options');
}

if(!function_exists('themeple_ajax_themeple_ajax_dummy_data')){
    function themeple_ajax_dummy_data(){
        if(function_exists('check_ajax_referer')) { check_ajax_referer('themeple_nonce_import_dummy_data'); }
        require_once THEMEPLE_FW_SYSTEM . 'dummy_data.inc.php';
		die('themeple_dummy');
    }
    add_action('wp_ajax_themeple_ajax_dummy_data', 'themeple_ajax_dummy_data');
}

if(!function_exists('themeple_ajax_change_skin'))
{
	function themeple_ajax_change_skin()
	{
		if(function_exists('check_ajax_referer')) { check_ajax_referer('themeple_admin_save_data'); }
		$options = new themeple_database_options_sets();
		include( THEMEPLE_BASE.'/template_inc/admin/register_skins.php' );

		$options->update_set($predefined[$_POST['color']], $_POST);
		
		die('themeple_changed_skin');
	}

	add_action('wp_ajax_themeple_ajax_change_skin', 'themeple_ajax_change_skin');
}



?>