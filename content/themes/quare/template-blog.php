<?php

global $themeple_config;
$themeple_config['multi_entry_page'] = true;
$themeple_config['current_sidebar'] = themeple_get_option('blog_sidebar_position');
$spancontent = 12;

if(isset($_COOKIE['themeple_blog']) && $_COOKIE['themeple_blog'] == 'sidebar' )
    $themeple_config['current_sidebar'] = 'sidebar_right';
    if($themeple_config['current_sidebar'] == 'fullsize')
        $spancontent = 12;
    else
        $spancontent = 9;
    $blog_page = themeple_get_option('blogpage');
    
$themeple_config['current_view'] = 'blog';
$cookie_blog = 'normal';
$cookie_sidebar = 'fullsize';
if(isset($_COOKIE['themeple_blog']) && $_COOKIE['themeple_blog'] != '')
	$cookie_blog = $_COOKIE['themeple_blog'];
if(isset($_COOKIE['themeple_sidebar']) && $_COOKIE['themeple_sidebar'] != ''){
	
	$cookie_sidebar = $_COOKIE['themeple_sidebar'];
	if($cookie_sidebar == 'none')
		$spancontent = 12;
}


get_header();

?>
 <?php
            
            $title = get_the_title();
            $page_parents = page_parents();
            $blog_style = themeple_get_option('blog_style');
        ?>

    <?php if(themeple_post_meta(themeple_get_post_id(), 'page_header_bool') == 'yes'): ?>
    <!-- Page Head -->
    <div class="header_border_top"></div>
    <div class="header_page">
        
            <h2><?php echo $title ?></h2>
            <ul class="page_parents">
                
                <li><a href="<?php echo home_url() ?>"><?php _e("Home", "themeple") ?></a></li>
                <?php for($i = count($page_parents) - 1; $i >= 0; $i-- ){ ?>

                <li><a href="<?php echo get_permalink($page_parents[$i]) ?>"><?php echo get_the_title($page_parents[$i]) ?></a></li>

                <?php } ?>
                <li><a href="<?php echo get_permalink() ?>"><?php echo $title ?></a></li>

            </ul>
            <span class="top_shadow"></span> 
       
    </div>  
    <div class="header_border_bottom"></div> 
    <?php endif; ?>
<section id="content">
    	<div class="container" id="blog">
        	<div class="row">
    <?php if(($themeple_config['current_sidebar'] == 'sidebar_left' && !isset($_COOKIE['themeple_sidebar'])) || (isset($_COOKIE['themeple_sidebar']) && $_COOKIE['themeple_sidebar'] == 'left' )) get_sidebar() ?>   
        <div class="span<?php echo $spancontent ?>">
    <?php
        if(( $blog_style == 'large' && !isset($_COOKIE['themeple_blog'])) || (isset($_COOKIE['themeple_blog']) && $_COOKIE['themeple_blog'] == 'large' )){
            get_template_part( 'template_inc/loop', 'blog-large' );
        }elseif(( $blog_style == 'large_2' && !isset($_COOKIE['themeple_blog'])) || (isset($_COOKIE['themeple_blog']) && $_COOKIE['themeple_blog'] == 'medium' ))
            get_template_part( 'template_inc/loop', 'blog-large_2' );
        else
            get_template_part( 'template_inc/loop', 'index' );
    ?>

        </div>
<?php
    wp_reset_query();    
    
    if(($themeple_config['current_sidebar'] == 'sidebar_right'  && !isset($_COOKIE['themeple_sidebar'])) || (isset($_COOKIE['themeple_sidebar']) && $_COOKIE['themeple_sidebar'] == 'right' )) get_sidebar();
?>

            </div>
        </div>
</section>
<?php
    get_footer();


?>