<?php
global $themeple_config;

get_header();

$themeple_config['current_sidebar'] = themeple_get_option('single_portfolio_sidebar_pos');
$title = get_the_title();

$metas = themeple_portfolio_custom_field(get_the_ID());
    $cats = wp_get_object_terms(get_the_ID(), 'portfolio_entries');

    $used_template = themeple_get_option_array('portfolio', 'portfolio_cats', $cats[0]->term_id, true);
    
    $title = get_the_title($used_template['portfolio_page']);
    
    $page_parents = page_parents();
            
        ?>

    <?php if($used_template['portfolio_head'] == 'yes'): ?>
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

<!-- Main Content -->
    <section id="content">
    	<div class="container">
        <?php if(have_posts()){ while (have_posts()) : the_post(); ?>
        
                <div class="row">
                    <div class="span12 portfolio_single">
                        

                        <div class="project_title">
                            
                            <h4><?php the_title() ?></h4>

                        
                            <div class="pull-right">

                                <div id="port-nav-above" class="navigation">
                                    <ul>
                                    <?php if(is_object(get_previous_post())): ?>
                                      <li class="prev"><a href="<?php echo get_permalink(get_previous_post()->ID); ?>" rel="tooltip" title="Previous"></a></li>
                                    <?php endif; ?>
                                      <li class="all"><a href="<?php echo get_permalink($used_template['portfolio_page']) ?>" rel="tooltip" title="All"></a></li>
                                    <?php if(is_object(get_next_post())): ?>
                                      <li class="next"><a href="<?php echo get_permalink(get_next_post()->ID); ?>" rel="tooltip" title="Next"></a></li>
                                    <?php endif; ?>
                                    </ul>
                                </div>


                            </div>
                         
                        </div>
                            
                        <?php
                            if($used_template['portfolio_single_style'] == 'bottom')
                                get_template_part('template_inc/loop', 'single_portfolio_bottom');
                            else if($used_template['portfolio_single_style'] == 'left')
                                get_template_part('template_inc/loop', 'single_portfolio_left');
                            else   
                                get_template_part('template_inc/loop', 'single_portfolio_right');
                         ?> 
                        
                         <?php
                        $used = themeple_post_meta($used_template['portfolio_dynamic_page']);
                        if(isset($used['layout'])){
                            $genDynamic = new GenerateDynamicTemplate($used['layout']);

                            $themeple_config['current_view'] = 'page';
                            $genDynamic->createView(); 
                            ?>
                            <section id="portfolio-single-widget-area">
                                
                                    <?php
                                    $genDynamic->display();
                                    ?>
                                
                            </section>   
                        <?php } ?>

                    </div>
                </div>


                
        <?php endwhile; } ?>
            
        </div>
    </section><!-- #content -->    
<?php get_footer() ?>