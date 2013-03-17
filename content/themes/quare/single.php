<?php

global $themeple_config;
$themeple_config['multi_entry_page'] = false;
$themeple_config['current_sidebar'] = themeple_get_option('single_post_sidebar_pos');
$spancontent = 12;
    if($themeple_config['current_sidebar'] == 'fullsize')
        $spancontent = 12;
    else
        $spancontent = 9;
get_header();
$themeple_config['current_view'] = 'blog';

    $highlight = themeple_post_meta(themeple_get_option('blogpage'), 'page_highlight');
    $title = get_the_title(themeple_get_option('blogpage'));
    $page_parents = page_parents();
    $blog_style = themeple_get_option('blog_style');
?>

    
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
    
    
<section id="content">
        <div class="container" id="blog">
            <div class="row">
    <?php if($themeple_config['current_sidebar'] == 'sidebar_left') get_sidebar() ?>   
        <div class="span<?php echo $spancontent ?>">
    <?php
        get_template_part( 'template_inc/loop', 'index' );
    ?>
       
        <?php comments_template( '/template_inc/comments.php');  ?>
        </div>

<?php

    wp_reset_query();    
    $themeple_config['current_view'] = 'blog';
    if($themeple_config['current_sidebar'] == 'sidebar_right') get_sidebar();
?>

            </div>
        </div>
</section>
<?php
    get_footer();


?>