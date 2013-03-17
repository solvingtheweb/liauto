<?php global $themeple_config; ?>



<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<?php 



	 if (function_exists('themeple_favicon'))    { echo themeple_favicon(themeple_get_option('favicon')); } 

?>





<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>



<?php if(themeple_get_option('responsive_layout') == 'yes'): ?>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php endif; ?>



        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php $font = themeple_get_option('font_page');  ?>

        <?php $font_head = themeple_get_option('font_headings');  ?>



        <?php if($font != 'standart'): ?>

        <link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(" ", "+", $font) ?>:400,300,600,300italic' rel='stylesheet' type='text/css' />

        <?php endif; ?>

        

        <!-- Base Css -->

        <link rel='stylesheet' id='bootstrap-css'  href='<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.css?ver=3.5' type='text/css' media='all' />

        <link rel='stylesheet' id='stylesheet-css'  href='<?php echo get_stylesheet_uri() ?>' type='text/css' media='all' />

        <link rel='stylesheet' id='bootstrap-responsive-css'  href='<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap-responsive.css?ver=3.5' type='text/css' media='all' />		 

        

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

		<!--[if lt IE 9]>

		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

		<![endif]-->



<?php
    //Generated css from options
    get_template_part('template_inc/admin/register_styles'); 
    
    // Loaded all others styles and scripts.
    wp_head(); 	

?>

</head>

<body  <?php body_class(); ?>>

    <!-- Attention Grabber -->

	

<?php 





$layout = themeple_get_option('overall_layout'); if(( $layout == 'boxed' && !isset($_COOKIE['themeple_layout'])) || (isset($_COOKIE['themeple_layout']) && $_COOKIE['themeple_layout'] == 'boxed' )) { ?>

<div class="boxed_layout">

<?php } ?>

    

    <!-- Header -->
    <div id="page-bg">
        <?php $bg = themeple_get_option('bg_your_img'); if($bg != ''): ?>
            <img src="<?php echo $bg ?>" alt="" />
        <?php endif; ?>
    </div>
    <header id="header">
        <div class="container">
    	   <div class="row-fluid">
                <div class="span12">

                <!-- Logo -->

                    <div id="logo">

                        

                            <?php echo themeple_logo() ?>

                    <?php $menu_pos = (isset($_COOKIE['themeple_position'])?$_COOKIE['themeple_position']:''); ?>    

                    </div><!-- #logo -->
		      <?php if(themeple_get_option('social_bool') == 'yes' && $menu_pos != 'top'): ?>
                    <ul class="social_icons">

                        <?php $social = themeple_get_option('social_icons'); if(!empty($social)): foreach($social as $s): ?>
                        
                        <li class="<?php echo $s['social'] ?>"><a href="<?php echo $s['link'] ?>"  rel="tooltip" title="<?php echo ucfirst($s['social']) ?>"><span></span></a></li>
                        
                        <?php endforeach; endif; ?>

                        

                    </ul>
		      <?php endif; ?>
		      <?php if(themeple_get_option('menu_position') == 'top' ||  $menu_pos == 'top'): ?>
			<div id="navigation" class="nav_top pull-right">

                        	

            	            	<nav>

            	                	<?php 

                                            $args = array("theme_location" => "main", "container" => false, "fallback_cb" => 'themeple_fallback_menu');

                                            wp_nav_menu($args);  

                                    ?>

                                  

            	                </nav>





                            

                     </div><!-- #navigation -->

		      <?php endif; ?>		
            
                </div>
            </div>
        	   
		  <?php if(themeple_get_option('menu_position') != 'top' && $menu_pos != 'top'): ?>	
                <div class="row-fluid header-bar">

                        <!-- Main menu -->

               	    	<div id="navigation">

                        	

            	            	<nav>

            	                	<?php 

                                            $args = array("theme_location" => "main", "container" => false, "fallback_cb" => 'themeple_fallback_menu');

                                            wp_nav_menu($args);  

                                    ?>

                                  

            	                </nav>





                            

                        </div><!-- #navigation -->

                    

                    

                </div>
		  <?php endif; ?>
            

            

            

        

        </div>

    </header>

    <div class="top_wrapper">

    


        
    <?php
                        wp_reset_postdata();
                        
                        if(( is_home() || is_page()) && !is_single() ){

                         $slider = new themeple_slideshow(themeple_get_post_id());

                         if($slider && $slider->slide_number > 0){

                             if($slider->options['slideshow_layout'] == 'fixed'){

                                

                        



                                ?>

                            <span class="slider-img"></span>

                            <section id="slider-fixed" class="slider">



                                

                            <div class="container">

                                <div class="row">

                                    <div class="span12">

                            <?php

                            }elseif($slider->options['slideshow_layout'] == 'fullwidth'){

                                ?>

                                <span class="slider-img"></span>

                                <section id="slider-fullwidth"  class="slider">
                                       
                                <?php

                            }

                             

                             echo $slider->display();

                            ?>



                            <?php

                             

                             if($slider->options['slideshow_layout'] == 'fixed'){

                                ?>

                                            </div>    

                                    </div>

                                    <?php if($slider->slide_type == 'flexslider'): ?>



                                    <div class="top_shadow"></div>



                                    <?php endif; ?>



                                </div>

                               

                            </section>

                            <?php

                            }else{

                                ?>
                                    


                                </section>

                                <?php

                            }

                        



                        }

                    }





                     ?>   





    


    <!-- .header -->        

