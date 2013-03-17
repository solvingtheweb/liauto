<?php

global $controller;

$options = $controller->options;

$styles = $options['themeple'];

if(isset($_COOKIE['themeple_skin'])){

	include(THEMEPLE_BASE.'/template_inc/admin/register_skins.php');

	if(is_array($predefined[$_COOKIE['themeple_skin']]) && count($predefined[$_COOKIE['themeple_skin']]) > 0 ){

		foreach($predefined[$_COOKIE['themeple_skin']] as $el_id => $value){

			$styles[$el_id] = $value;

		}

	}

}

extract($styles);

?>



<style type="text/css">

	body{background: <?php if(isset($_COOKIE['themeple_layout']) && $_COOKIE['themeple_layout'] == 'boxed' ) echo "d2d1d0"; else  echo $bg_color ?> 

	<?php if($bg_img != 'none' && $bg_your_img == '' && ((themeple_get_option('overall_layout') == 'boxed' && !isset($_COOKIE['themeple_layout'])) || (isset($_COOKIE['themeple_layout']) && $_COOKIE['themeple_layout'] == 'boxed' ))){ ?>

		url('<?php echo get_template_directory_uri(); ?>/img/patterns/<?php echo $bg_img ?>.png') repeat;

	<?php } ?>


	}

	/** Custom CSS BOX **/
	<?php $css_box = themeple_get_option('css_box'); 

	echo $css_box;	

	?>

	/** End Custom CSS BOX **/

	input,button,select,textarea,body,span, aside .widget_twitter li, nav .menu li ul li a {font-family: <?php if($font_page == 'standart') echo '"Helvetica Neue", Helvetica, Arial, sans-serif'; else echo $font_page ?>; font-size: <?php echo $font_size_page ?>px; color:<?php echo $body_font_color ?> }

	h1,h2,h3,h4,h5,h6, nav .menu li a, #portfolio-filter ul li, #portfolio-preview-items.three-cols .portfolio-item .project h5 a, .skill .title, .nav-tabs li a, .services_small .desc, #faq-filter ul li, .contact_form span.label{font-family: <?php if($font_headings == 'standart') echo '"MuseoSlab500"'; else echo $font_headings ?>}

	<?php echo create_icons_style() ?>

	h1{font-size: <?php echo $font_size_1 ?>px}

	h2{font-size: <?php echo $font_size_2 ?>px}

	h3{font-size: <?php echo $font_size_3 ?>px}

	h4{font-size: <?php echo $font_size_4 ?>px}
	nav .menu li{font-size:15px}
	h5{font-size: <?php echo $font_size_5 ?>px}

	h6{font-size: <?php echo $font_size_6 ?>px}

	.social_icons li:hover{background:<?php echo $base_color ?>}
    nav .menu li a{color:<?php echo $nav_font_color ?>}
    
    .top_footer .pagination a.selected, pagination-portfolio a.selected,  .flexslider .flex-control-paging li a.flex-active, #portfolio-preview-items .portfolio-item .project:hover, .tpl2 .center-bar a.link, .tpl2 .center-bar a.lightbox, .single_content .flexslider .flex-control-paging li a.flex-active, .services_list dt, .step .title-round, .textshortcode .pagination a.selected, .pagination-portfolio a.selected , .dropcast {background:<?php echo $second_color ?>}
    .blog-article dt:hover, .blog-article.large_2 .post_type:hover, .default-btn:hover, #respond input[type="submit"]:hover, .accordion-heading, .more-large:hover {background-color:<?php echo $second_color ?>}
    .red-btn:hover, .blue-btn:hover,.green-btn:hover{background-color:<?php echo $second_color ?> !important}
    .row-dynamic-el h3 {color:<?php echo $dynamic_el_title_color ?> }
	nav .menu li.current-menu-item, nav .menu li.current-menu-parent{border-bottom:3px solid <?php echo $base_color ?>}
	.header_page h2{font-family:<?php echo $font_page ?>}
	.page_parents li a:hover, .blog-article h2 a:hover, .comment dl dd ul li a:hover, #respond .logged-in-as a:hover, #portfolio-filter ul li a:hover, .services_small a:hover, .blog-article h5 a:hover, .services_medium h4 a:hover, #faq-filter ul li a:hover, .side-nav li.current_page_item a, .tp-caption.big_black, aside #wp-calendar a, .woocommerce ul.products li.product h3:hover, .woocommerce-page ul.products li.product h3:hover, .product .summary a, .cart_table_item .product-name a, .shipping-calculator-button, .woocommerce.widget a{color:<?php echo $base_color ?>}
	.woocommerce .button{background:<?php echo $base_color ?> !important;}
	.page-numbers{color:<?php echo $base_color ?>;}
	.portfolio_sc_item:hover{border:2px solid <?php echo $base_color ?> ;} 
	.top_footer, .blog-article dl dt, .blog-article.large_2 .post_type, .tp-caption.big_white{background-color:<?php echo $base_color ?>}
	footer#footer{background-color:<?php echo $footer_bg_color ?>;}
	#copyright{background:<?php echo $footer_copyright_bg ?>}
	footer .widget_flickr .flickr_badge_image:hover{border:2px solid <?php echo $base_color ?>}
	
	.default-btn, #respond input[type="submit"], .services_list dt:hover{background:<?php echo $base_color ?>}
	 .flexslider .flex-control-paging li a, nav .menu li li.current-menu-item{background:<?php echo $base_color ?>}
	 nav .menu li.current-menu-item li.current-menu-item:hover {background:<?php echo $base_color ?> !important}
	 .flexslider .flex-control-paging li a , nav .menu li ul li:hover{background:<?php echo $base_color ?>}
	#portfolio-filter ul li.active, .nav-tabs li.active, #faq-filter ul li.active{border-color:<?php echo $base_color ?>}
	
	<?php $rgb = HexToRGB($base_color); ?>
	.tpl2 .bg {background-color:rgba(<?php echo $rgb['r'] ?>,<?php echo $rgb['g'] ?>,<?php echo $rgb['b'] ?>,.8);}
	

	<?php if(isset($link_port_h) && !empty($link_port_h)): ?>
	.tpl2 a.link:hover span{background:url('<?php echo $link_port_h ?>') center no-repeat}
	<?php endif; ?>
	<?php if(isset($lightbox_port_h) && !empty($lightbox_port_h)): ?>
	.tpl2 a.lightbox:hover span{background:url('<?php echo $lightbox_port_h ?>') center no-repeat}
	<?php endif; ?>

	<?php if(isset($next_arrow) && !empty($next_arrow)): ?>
	.row-dynamic-el .pagination a.next:hover, .pagination-portfolio a.next:hover, .project_title #port-nav-above li.next:hover a {background: url('<?php echo $next_arrow ?>') center no-repeat;}
	<?php endif; ?>

	<?php if(isset($prev_arrow) && !empty($prev_arrow)): ?>
	.row-dynamic-el .pagination a.prev:hover, .pagination-portfolio a.prev:hover, .project_title #port-nav-above li.prev:hover a {background: url('<?php echo $prev_arrow ?>') center no-repeat;}
	<?php endif; ?>

	<?php if(isset($portfolio_all_hover) && !empty($portfolio_all_hover)): ?>
	.project_title #port-nav-above li.all:hover a{background: url('<?php echo $portfolio_all_hover ?>') center no-repeat;}
	<?php endif; ?>

	


	.progress .bar{background-color:<?php echo $base_color ?>}
	.textbar{border-top-color:<?php echo $base_color ?>}
	aside .widget_archive select , .widget_categories select:focus, .widget_text select:focus{border-color:<?php echo $base_color; ?>}
	aside #wp-calendar a{color:<?php echo $base_color; ?>;}
	aside .widget_recent_comments a, .rsswidget{color:<?php echo $base_color; ?> !important;}
	aside .widget_archive a:hover, .widget_categories a:hover, .widget_pages a:hover, .widget_meta a:hover, .widget_recent_entries a:hover, .widget_nav_menu a:hover, .widget_tag_cloud a:hover, .widget_rss a:hover{color:<?php echo $base_color; ?>;}
	.in_head{background-color:<?php echo $base_color; ?>;}
	.pagination-portfolio a, .step.result .title-round, .step .number-round{background:<?php echo $base_color; ?>;}
	
	.price_1_col.level-max {
	-webkit-box-shadow: 0 0 0 2px <?php echo $base_color; ?>;
	-moz-box-shadow: 0 0 0 2px <?php echo $base_color; ?>;
	box-shadow: 0 0 0 2px <?php echo $base_color; ?>;}

	.price_1_col .footer a{
		background-color: <?php echo $base_color; ?>;
    }

    .more-large{background-color:<?php echo $base_color ?>;}
    .base_font_color{color:<?php echo $base_color ?> !important}
    .base_background_color{background:<?php echo $base_color ?> !important}
    .base_color_slider{background-color:<?php echo $base_color ?> !important;}
    .themeple_sc .themeple_blockquote{border-left: 4px solid <?php echo $base_color ?>;}
    .tp-bullets.tp-thumbs .bullet:hover{border:5px solid <?php echo $base_color ?>}
    .tp-bullets.tp-thumbs .bullet.selected{border:5px solid <?php echo $base_color ?>}
    <?php if(isset($header_arrow) && !empty($header_arrow)): ?>
    .page_parents li{background:url('<?php echo $header_arrow ?>') left center no-repeat}
    <?php endif; ?>
	</style>
	<?php  $font_head = themeple_get_option('font_headings'); 
    	if($font_head != 'standart'){ ?>

        <link href='http://fonts.googleapis.com/css?family=<?php echo str_replace(" ", "+", $font_head) ?>:400,300,600,300italic' rel='stylesheet' type='text/css' />

        <?php }else{ ?>
        <style type="text/css">
        /*@font-face {
            font-family: 'MS5';
            src: url('../fonts/museo_slab_500-webfont.eot');
            src: local('☺'), url('../fonts/museo_slab_500-webfont.woff') format('woff'), url('../fonts/museo_slab_500-webfont.ttf') format('truetype'), url('../fonts/museo_slab_500-webfont.svg#webfont6ROMXS1F') format('svg');
            font-weight: normal;
            font-style: normal;
        }*/
        @font-face {
            font-family: 'MuseoSlab500';
            src: url('<?php echo get_stylesheet_directory_uri() ?>/css/museo_slab_500-webfont.eot');
            src: url('<?php echo get_stylesheet_directory_uri() ?>/css/museo_slab_500-webfont.eot?iefix') format('eot'),
                 url('<?php echo get_stylesheet_directory_uri() ?>/css/museo_slab_500-webfont.woff') format('woff'),
                 url('<?php echo get_stylesheet_directory_uri() ?>/css/museo_slab_500-webfont.ttf') format('truetype'),
                 url('<?php echo get_stylesheet_directory_uri() ?>/css/museo_slab_500-webfont.svg#webfontyumMOUTD') format('svg');
            font-weight: normal;
            font-style: normal;

        }

        @font-face {    
            font-family: 'MuseoSlab500';
            src: url('<?php echo get_stylesheet_directory_uri() ?>/css/MuseoSlab-300.ttf');
            font-weight: 300;
        }

        </style>


        <?php } ?> 
	