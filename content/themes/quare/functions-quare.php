<?php

function generate_video($link){
	$video = "";
	if(themeple_backend_is_file($link, 'html5video'))
					
					{
						$video = themeple_html5_video_embed($link);
					}
					else if(strpos($link,'<iframe') !== false)
					{
						$video = $link;
					}
					else
					{
						global $wp_embed;
						$video = $wp_embed->run_shortcode("[embed]".trim($link)."[/embed]");
					}
					
					if(strpos($video, '<a') === 0)
					{
						$video = '<iframe src="'.$link.'"></iframe>';
	}
	return $video;
}

/**
 * themeple_pagination_ajax()
 * 
 * @param string $pages
 * @return
 */
function themeple_pagination($pages = '', $range = 2){
    
      $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'><ul>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&raquo;</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&laquo;</a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class='active'><a href='".get_pagenum_link($i)."'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' >".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&raquo;</a></li>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&laquo;</a></li>";
         echo "</ul></div>\n";
     }
}

/**
 * themeple_post_pagination_link()
 * 
 * @param mixed $link
 * @return
 */
function themeple_post_pagination_link($link)
{
		$url =  preg_replace('!">$!','',_wp_link_page($link));
		$url =  preg_replace('!^<a href="!','',$url);
		return $url;
}
/**
 * themeple_box_title()
 * 
 * @param mixed $text
 * @param mixed $width
 * @return
 */
function themeple_box_title($text, $width){
    if($width == 2){
        return themeple_text_limit($text, 2);
    }
    if($width == 3){
        return themeple_text_limit($text, 3);
    }else
    if($width == 4){
        return themeple_text_limit($text, 5);
    }else
    if($width == 6){
        return themeple_text_limit($text, 7);
    }
    if($width == 8 || $width ==  9){
        return themeple_text_limit($text, 10);
    }
}
/**
 * themeple_excerpt()
 * 
 * @param mixed $limit
 * @return
 */
function themeple_excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      if(strlen($excerpt) > 120 && $limit <= 30)
        return substr($excerpt, 0, 120);
      return $excerpt;
}
/**
 * themeple_text_limit()
 * 
 * @param mixed $text
 * @param mixed $limit
 * @return
 */
function themeple_text_limit($text, $limit) {
      $excerpt = explode(' ', $text, $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      if(strlen($excerpt) > 170 && $limit <= 40)
        return substr($excerpt, 0, 170);
      return $excerpt;
}
/**
 * themeple_content()
 * 
 * @param mixed $limit
 * @return
 */
function themeple_content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      
      if(strlen($content) > 170 && $limit < 40)
        return substr($content, 0, 170);
      return $content;
}

/**
 * new_excerpt_more()
 * 
 * @param mixed $more
 * @return
 */
function new_excerpt_more($more) {
return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
add_post_type_support('page', 'excerpt');
if(!function_exists('themeple_frontend_js'))
{
	if(!is_admin()){
		add_action('init', 'themeple_frontend_js');
	}
	
	/**
	 * themeple_frontend_js()
	 * 
	 * @return
	 */
	function themeple_frontend_js()
	{	wp_register_script( 'jquery-easing-1-1', THEMEPLE_BASE_URL.'js/jquery.easing.1.1.js', array('jquery'), 1, false );
        wp_register_script( 'jquery-easing-1-3', THEMEPLE_BASE_URL.'js/jquery.easing.1.3.js', array('jquery'), 1, false );
		wp_register_script( 'bootstrap.min', THEMEPLE_BASE_URL.'js/bootstrap.min.js', array('jquery'), 1, false );
		//wp_register_script( 'jquery.cslider', THEMEPLE_BASE_URL.'js/jquery.cslider.js', array('jquery'), 1, false );
        wp_register_script( 'jquery.flexslider-min', THEMEPLE_BASE_URL.'js/jquery.flexslider-min.js', array('jquery'), 1, false );
        //wp_register_script( 'jquery.liquidcarousel', THEMEPLE_BASE_URL.'js/jquery.liquidcarousel.js', array('jquery'), 1, false );
        wp_register_script( 'jquery.mobilemenu', THEMEPLE_BASE_URL.'js/jquery.mobilemenu.js', array('jquery'), 1, false );
        wp_register_script( 'jquery.carouFredSel-6.1.0-packed' , THEMEPLE_BASE_URL.'js/jquery.carouFredSel-6.1.0-packed.js', array('jquery'), 1, false );
        wp_register_script( 'main', THEMEPLE_BASE_URL.'js/main.js', array('jquery'), 1, false );
        wp_register_script( 'modernizr.custom.28468', THEMEPLE_BASE_URL.'js/modernizr.custom.28468.js', array('jquery'), 1, false );
        wp_register_script( 'superfish', THEMEPLE_BASE_URL.'js/superfish.js', array('jquery'), 1, false );
        wp_register_script( 'mediaelementplayer',THEMEPLE_BASE_URL.'js/mediaelement-and-player.min.js', array('jquery'), 1, false  ); 
        wp_register_script( 'isotope',THEMEPLE_BASE_URL.'js/isotope.js', array('jquery'), 1, false  ); 
        //wp_register_script( 'jquery.contentcarousel',THEMEPLE_BASE_URL.'js/jquery.contentcarousel.js', array('jquery'), 1, false  ); 
        wp_register_script( 'jquery.fancybox',THEMEPLE_BASE_URL.'fancybox/source/jquery.fancybox.js', array('jquery'), 1, false  ); 
        wp_register_script( 'jquery.fancybox-media',THEMEPLE_BASE_URL.'fancybox/source/helpers/jquery.fancybox-media.js', array('jquery'), 1, false  ); 
        wp_register_script( 'jquery.touchSwipe.min',THEMEPLE_BASE_URL.'js/jquery.touchSwipe.min.js', array('jquery'), 1, false  ); 
        wp_register_script( 'jquery.mousewheel.min',THEMEPLE_BASE_URL.'js/jquery.mousewheel.min.js', array('jquery'), 1, false  ); 
        wp_register_script( 'jquery.imagesloaded.min',THEMEPLE_BASE_URL.'js/jquery.imagesloaded.min.js', array('jquery'), 1, false  ); 
        wp_register_script( 'jquery.debouncedresize',THEMEPLE_BASE_URL.'js/jquery.debouncedresize.js', array('jquery'), 1, false  );
        wp_register_script( 'jquery.throttledresize',THEMEPLE_BASE_URL.'js/jquery.throttledresize.js', array('jquery'), 1, false  );
        wp_register_script( 'customSelect',THEMEPLE_BASE_URL.'js/customSelect.jquery.min.js', array('jquery'), 1, false  );
        wp_register_script( 'jquery.cycle',THEMEPLE_BASE_URL.'js/jquery.cycle.all.js', array('jquery'), 1, false  );
        wp_register_script( 'tooltip',THEMEPLE_BASE_URL.'js/tooltip.js', array('jquery'), 1, false  );
        wp_register_script( 'menu',THEMEPLE_BASE_URL.'js/menu.js', array('jquery'), 1, false  );
        wp_register_script( 'jquery.hoverex',THEMEPLE_BASE_URL.'js/jquery.hoverex.js', array('jquery'), 1, false  );
        wp_register_script( 'switcher',THEMEPLE_BASE_URL.'js/switcher.js', array('jquery'), 1, false  );
        wp_register_style( 'mediaelementplayer',THEMEPLE_BASE_URL.'css/mediaelementplayer.css' );
        wp_register_style( 'jquery.fancybox',THEMEPLE_BASE_URL.'fancybox/source/jquery.fancybox.css?v=2.1.2' );
        wp_register_style( 'hoverex',THEMEPLE_BASE_URL.'css/hoverex-all.css' );

    }
}

if(!function_exists('themeple_portfolio_custom_field'))
{
	/**
	 * themeple_portfolio_custom_field()
	 * 
	 * @param bool $id
	 * @param bool $portfolio_keys
	 * @return
	 */
	function themeple_portfolio_custom_field($id = false, $portfolio_keys = false)
	{
		if(!$id) $id = get_the_ID();
		if(!$id) return false;
		
		$output = "";
		$metas = themeple_post_meta($id);
		if(!$portfolio_keys) $portfolio_keys = themeple_get_option('portfolio-meta', array(array('meta'=>'Skills Needed'), array('meta'=>'Client'), array('meta'=>'Project URL')));
		if(empty($metas)) return;
		
		$p_metas = array();
		foreach($metas as $key =>$meta)
		{
			if(strpos($key,'portfolio-meta-') !== false)
			{
				$newkey = str_replace("portfolio-meta-","",$key);
				$p_metas[$newkey-1] = $meta;
			}
		}
		$data = array();
		$counter = 0;
		foreach($portfolio_keys as $key)
		{
			if(!empty($p_metas[$counter]))
			{
				if(themeple_portfolio_url($p_metas[$counter]))
				{
					$linktext = $p_metas[$counter];
					if(strlen($linktext) > 50) $linktext = "Link";
					$p_metas[$counter] = "<a href='".$p_metas[$counter]."'>".$linktext."</a>";
                    $data[$counter] =  array('meta' => "Link", 'value' => $p_metas[$counter]); 
				}
				$data[$counter] = array('meta' => $key['meta'], 'value' => $p_metas[$counter]);
				
			}
			$counter++;
		}
		
		return $data;
	}
}
if(!function_exists('themeple_portfolio_url'))
{
	/**
	 * themeple_portfolio_url()
	 * 
	 * @param mixed $url
	 * @return
	 */
	function themeple_portfolio_url($url)
	{
		return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
	}
}


/**
 * get_common_color()
 * 
 * @param mixed $filename
 * @return
 */
function get_common_color($filename){
      
      $image = imagecreatefromjpeg($filename);
      $width = imagesx($image);
      $height = imagesy($image);
      $pixel = imagecreatetruecolor(1, 1);
      imagecopyresampled($pixel, $image, 0, 0, 0, 0, 1, 1, $width, $height);
      $rgb = imagecolorat($pixel, 0, 0);
      $color = imagecolorsforindex($pixel, $rgb);
      return $color;
}



if(!function_exists('themeple_fallback_menu')){
  
    
    function themeple_fallback_menu($args){
        
                $current = "";
    if (is_front_page()){$current = "class='current-menu-item'";} 
    
    
    echo "<ul class='menu'>";
    echo "<li $current><a href='".home_url()."'>Home</a></li>";
    wp_list_pages('title_li=&sort_column=menu_order&number=4&depth=0');
    echo "</ul>";
  
    }


}

function HexToRGB($hex) {
    $hex = ereg_replace("#", "", $hex);
    $color = array();
 
    if(strlen($hex) == 3) {
      $color['r'] = hexdec(substr($hex, 0, 1) . $r);
      $color['g'] = hexdec(substr($hex, 1, 1) . $g);
      $color['b'] = hexdec(substr($hex, 2, 1) . $b);
    }
    else if(strlen($hex) == 6) {
      $color['r'] = hexdec(substr($hex, 0, 2));
      $color['g'] = hexdec(substr($hex, 2, 2));
      $color['b'] = hexdec(substr($hex, 4, 2));
    }
 
    return $color;
  }


  
  add_action('publish_post', 'setup_likes');

  function setup_likes($post_id){
    if(!is_numeric($post_id)) return;
  
    add_post_meta($post_id, '_hits', 0, true);
  }

  function get_hits($post_id){
    
    $hits = get_post_meta($post_id, '_hits', true);
    return ($hits)?$hits: 0;
  }

  function update_hits($count, $post_id){
      
      $count = $count ? $count : 0;

      $hits = update_post_meta($post_id, '_hits', $count++);
      
      return $hits;
  }

  
  
  function like_portfolio(){
    if ( !wp_verify_nonce( $_REQUEST['nonce'], "like_nonce")) {
      exit("No naughty business please");
    }  
    $hits = get_hits($_REQUEST['post_id']);
  
    $new_hits = $hits+1;
    $hit = update_post_meta($_REQUEST['post_id'], '_hits', $new_hits);
    if($hit === false){
        $result['type'] = 'error';
        $result['hits'] = $hits;
    }else{
        $result['type'] = 'success';
        $result['hits'] = $new_hits;
    }

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $result = json_encode($result);
        echo $result;
     }
     else {
        header("Location: ".$_SERVER["HTTP_REFERER"]);
     }

     die();

  }
  add_action("wp_ajax_nopriv_likes_portfolio", "like_portfolio");
  add_action("wp_ajax_likes_portfolio", "like_portfolio");



  /**************************/
  /* Include LayerSlider WP */
  /**************************/
   
  // Path for LayerSlider WP main PHP file
  $layerslider = get_stylesheet_directory() . '/plugins/LayerSlider/layerslider.php';
   
  // Check if the file is available to prevent warnings
  if(file_exists($layerslider)) {
   
      // Include the file
      include $layerslider;
   
      // Activate the plugin if necessary
      if(get_option('Trusted_layerslider_activated', '0') == '0') {
   
          // Run activation script
          layerslider_activation_scripts();
   
          // Save a flag that it is activated, so this won't run again
          update_option('Trusted_layerslider_activated', '1');
      }
  }


/** Include Wp REtina 2x **/


$wp_retina = get_stylesheet_directory() . '/plugins/wp-retina-2x/wp-retina-2x.php' ;

 if(file_exists($wp_retina)) {

    include $wp_retina;

    wr2x_activate();

  }

  // Include retina




function page_parents() {
    global $post, $wp_query, $wpdb;
    $post = $wp_query->post;

    $parent_array = array();
    $current_page = $post->ID;
    $parent = 1;

    while($parent) {
    $page_query = $wpdb->get_row("SELECT ID, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
    $parent = $current_page = $page_query->post_parent;
    if($parent)
        $parent_array[] = $page_query->post_parent;
    }

    return $parent_array;
}


function get_icon($name, $size){
    return THEMEPLE_IMAGE_URL.'icons/'.$size.'x'.$size.'/'.$name.'.png';
}

function create_icons_style(){
    $directory = THEMEPLE_FRAMEWORK."images/icons/32x32/";
 
            //get all image files with a .png extension.
    $icons = glob($directory . "*.png");
    $sizes = array("64", "32", "16");
    $output = '';
    foreach($sizes as $size):        
            
      if(isset($icons) && count($icons) > 0){
          
            foreach($icons as $icon):
                $icon = str_replace(THEMEPLE_FRAMEWORK."images/icons/32x32/", "", $icon);
                $output .= '.iconset-'.$size.'-'.str_replace(".png", "", $icon);
                $output .= '{ ';
                  $output .= "background:url('".THEMEPLE_IMAGE_URL."/icons/".$size."x".$size."/".$icon."') center no-repeat";
                $output .= "; } \n";
            endforeach;
      }

    endforeach;

    return $output;
}


?>