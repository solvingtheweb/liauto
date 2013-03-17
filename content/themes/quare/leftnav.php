<?php
/*
Template Name: Left Navigation
*/
global $themeple_config;
$themeple_config['multi_entry_page'] = true;

$themeple_config['current_view'] = 'page';
get_header();
?>
<?php
            
            $title = get_the_title();
            $page_parents = page_parents();
            
        ?>

    <?php if(themeple_post_meta(themeple_get_post_id(), 'page_header_bool') == 'yes'): ?>
    <!-- Page Head -->
    <div class="header_border_top"></div>
    <div class="header_page">
        
            <h2><?php echo $title ?></h2>
            <ul class="page_parents">
                
                <li><a href="<?php echo home_url() ?>"><?php _e("Home", 'themeple') ?></a></li>
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
        <div class="container" id="page">
            <div class="row">
                    <div class="span3">
                            <ul class="side-nav">
                                <?php if(is_page('$post->post_parent')): ?><?php endif; ?>
                                <li <?php if(is_page($post->post_parent)): ?>class="current_page_item"<?php endif; ?>><div class="icon"><span class="iconset-16-<?php echo themeple_post_meta($post->post_parent, 'icon') ?>"></span></div><a href="<?php echo get_permalink($post->post_parent); ?>" title="Back to Parent Page"><?php echo get_the_title($post->post_parent); ?></a></li>
                                <?php
                                if($post->post_parent)
                                $children = get_pages(array("child_of" => $post->post_parent));
                                else
                                $children = get_pages(array("child_of" => $post->ID));
                                if ($children) {
                                ?>
                                <?php 

                                    foreach($children as $c):
                                        ?>
                                        <li class="page_item page-item-<?php echo $c->ID ?> <?php if($c->ID == get_the_ID()): ?>current_page_item<?php endif; ?>"><a href="<?php echo get_permalink($c->ID) ?>"><div class="icon"><span class="iconset-16-<?php echo themeple_post_meta($c->ID, 'icon') ?>"></span></div><?php echo get_the_title($c->ID) ?></a></li>
                                        <?php
                                    endforeach;

                                 ?>
                                <?php } ?>
                            </ul>
                    </div>

                    <div class="span9">
                        <?php the_content() ?>
                    </div>

            </div>
        </div>
</section>
<?php
    get_footer();


?>