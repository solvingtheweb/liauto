<?php
global $themeple_config;
    
    do_action( 'themeple_routing_template' , 'page' );
    $themeple_config['current_view'] = 'page';
    $meta = themeple_post_meta(themeple_get_post_id());
    if(isset($meta['layout']))
        $themeple_config['current_sidebar'] = $meta['layout'];
    $spancontent = 12;
    if(isset($themeple_config['current_sidebar']) && $themeple_config['current_sidebar'] == 'fullsize')
        $spancontent = 12;
    elseif(isset($themeple_config['current_sidebar']) && ($themeple_config['current_sidebar'] == 'sidebar_left' || $themeple_config['current_sidebar'] == 'sidebar_right'))
        $spancontent = 9;
    get_header();
    
    
    ?>
    


    
    <!-- Page Head -->
    <div class="header_border_top"></div>
    <div class="header_page">
        
            <h2><?php woocommerce_page_title(); ?></h2>
            <ul class="page_parents">
                
                <li><a href="<?php echo home_url() ?>"><?php _e("Home", 'themeple') ?></a></li>
                
                <li><a href="<?php echo get_permalink() ?>"><?php woocommerce_page_title(); ?></a></li>

            </ul>
            <span class="top_shadow"></span> 
       
    </div>  
    <div class="header_border_bottom"></div> 
   
        
    
   <section id="content">
        <div class="container" id="blog">
            <div class="row">
    <?php if(isset($themeple_config['current_sidebar']) && $themeple_config['current_sidebar'] == 'sidebar_left') get_sidebar() ?>   
        <div class="span<?php echo $spancontent ?>">
    <?php woocommerce_content(); ?>

        </div>
<?php
    wp_reset_query();    
    
    if(isset($themeple_config['current_sidebar']) && $themeple_config['current_sidebar'] == 'sidebar_right') get_sidebar();
?>

            </div>
        </div>
</section>

    <?php
    get_footer();

?>