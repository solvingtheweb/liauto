<?php

global $themeple_config;
$themeple_config['multi_entry_page'] = true;
$themeple_config['current_sidebar'] = themeple_get_option('blog_sidebar_position');
$spancontent = 12;
    if($themeple_config['current_sidebar'] == 'fullsize')
        $spancontent = 12;
    else
        $spancontent = 9;
$themeple_config['current_view'] = 'blog';
get_header();
?>
<!-- Page Head -->
    <div class="header_border_top"></div>
    <div class="header_page">
        
            <h2><?php _e("Search Results", "themeple") ?></h2>
            <ul class="page_parents">
                <li><a href="<?php echo home_url() ?>"><?php _e("Home", 'themeple') ?></a></li>
            </ul>
            <span class="top_shadow"></span> 
       
    </div>  
    <div class="header_border_bottom"></div>
<section id="content">
        <div class="container" id="blog">
            <div class="row">
    <?php if($themeple_config['current_sidebar'] == 'sidebar_left') get_sidebar() ?>   
        <div class="span<?php echo $spancontent ?>">
    
    <?php
        if(have_posts()){
            
            if(( $themeple_config['current_sidebar'] == 'fullsize' && !isset($_COOKIE['themeple_blog'])) || (isset($_COOKIE['themeple_blog']) && $_COOKIE['themeple_blog'] == 'fullwidth' )){
                get_template_part( 'template_inc/loop', 'blog-fullwidth' );
            }else
                get_template_part( 'template_inc/loop', 'index' );
    
        }else{

    ?>
        <h3 style="font-weight:normal;"><?php _e('Your search did not match any entries', 'themeple') ?></h3>
        <p></p>
        <p><?php _e('Suggestions', 'themeple') ?>:</p>
        <ul style="margin-left:40px">
            <li><?php _e('Make sure all words are spelled correctly', 'themeple') ?>.</li>
            <li><?php _e('Try different keywords', 'themeple') ?>.</li>
            <li><?php _e('Try more general keywords', 'themeple') ?>.</li>
        </ul>
    <?php } ?>

        </div>
<?php
    wp_reset_query();    
    
    if($themeple_config['current_sidebar'] == 'sidebar_right') get_sidebar();
?>

            </div>
        </div>
</section>
<?php
    get_footer();


?>