<?php
global $themeple_config;
global $portfolio_p;
do_action('themeple_excecute_query_var_action', 'loop-portfolio-grid');
$count_portfolio = 0;
$nr_columns = 3;
if(!isset($portfolio_p) || empty($portfolio_p))
	$portfolio_p = get_the_ID();
if(have_posts()){
    $item_grid_class = '';
    
    if(isset($themeple_config['current_portfolio']['portfolio_columns'])){
        $nr_columns = $themeple_config['current_portfolio']['portfolio_columns'];
    }
    
    switch($nr_columns){
        case "1": $item_grid_class = 12; break;
        case "2": $item_grid_class = 6; break;
        case "3": $item_grid_class = 4; break;
        case "4": $item_grid_class = 3; break;
    }
    if($themeple_config['current_sidebar'] != 'fullsize')
            $item_grid_class = round( ($item_grid_class*3) / 4);
    
    ?>
    
                	<div class="row filterable">
    
    <?php
    $the_id = 0;
    $loop_counter = 0;


    if(isset($portfolio_p) && $portfolio_p != ''){
        $used_template_p = themeple_get_option_array('portfolio', 'portfolio_page', $portfolio_p, true); 
        
        query_posts( array('post_type' => 'portfolio', 'posts_per_page' => 9999, 'tax_query' => array(
                                                                                                    'taxonomy' => 'portfolio_entries',
                                                                                                    'terms' => $used_template_p['portfolio_cats'],
                                                                                                    'field' => 'id')));
   

    }



    while (have_posts()) : the_post();	
	
		$loop_counter++;
    	$the_id 	= get_the_ID();
    	
    	$sort_classes = "";
    	$item_categories = get_the_terms( $the_id, 'portfolio_entries' );
    
    	if(is_object($item_categories) || is_array($item_categories))
    	{
    		foreach ($item_categories as $cat)
    		{
    			$sort_classes .= $cat->slug.' ';
    		}
    	}

        $cats = wp_get_object_terms(get_the_ID(), 'portfolio_entries');

        $used_template = themeple_get_option_array('portfolio', 'portfolio_cats', $cats[0]->term_id, true);	
        $portfolio_style = 'v1';
        if(isset($used_template_p)){
            $used_template = $used_template_p;
            $portfolio_style = $used_template['portfolio_style']; 
	}
       ?>
    <!-- item -->
	                    <div class="portfolio-item <?php echo $sort_classes ?> <?php echo $portfolio_style ?> ">
                                    <div class="he-wrap tpl2">
                                        <?php if($item_grid_class == 3){ ?>
                                            <img src="<?php echo themeple_image_by_id(get_post_thumbnail_id(), 'port4', 'url') ?>" alt="">
                                            <div class="shape4"></div>
                                        <?php } ?>
                                        <?php if($item_grid_class == 4){ ?>
                                            <img src="<?php echo themeple_image_by_id(get_post_thumbnail_id(), 'port3', 'url') ?>" alt="">
                                            <div class="shape3"></div>
                                        <?php } ?>
                                        <?php if($item_grid_class == 6){ ?>
                                            <img src="<?php echo themeple_image_by_id(get_post_thumbnail_id(), 'port2', 'url') ?>" alt="">
                                            <div class="shape2"></div>
                                        <?php } ?>
                                        <?php if($item_grid_class == 12){ ?>
                                            <img src="<?php echo themeple_image_by_id(get_post_thumbnail_id(), 'port1', 'url') ?>" alt="">
                                            <div class="shape1"></div>
                                        <?php } ?>
                                        <div class="overlay he-view">
                                            <?php $metalink = themeple_post_meta(get_the_ID(), 'external_link'); $link = (isset($metalink) && !empty($metalink)?$metalink:get_permalink()) ?>
                                            <div class="bg a0" data-animate="fadeIn">
                                                <div class="center-bar <?php echo $portfolio_style ?>">
                                                    <?php if($portfolio_style == 'v2' or $portfolio_style == 'v2 circle' or $portfolio_style == 'v2 triangle' or $portfolio_style == 'v2 hexagon' ): ?>
                                                    <h5><a href="<?php echo get_permalink( ) ?>"><?php echo get_the_title() ?></a></h5>
                                                    <span class="category"><?php echo $sort_classes ?></span>
                                                    <?php endif; ?>
                                                    <a href="<?php echo $link ?>" class="link a0" data-animate="elasticInDown"><span></span></a>
                                                    <a href="<?php echo themeple_image_by_id(get_post_thumbnail_id(), array('width'=> 1200, 'height' => 1200), 'url') ?>" class="lightbox a1 lightbox-gallery" data-animate="elasticInDown"><span></span></a>
                                                    
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <?php if($portfolio_style == 'v1'): ?>
                                    <div class="project">
                                        <h5><a href="<?php echo get_permalink( ) ?>"><?php echo get_the_title() ?></a></h5>
                                        <span class="category"><?php echo $sort_classes ?></span>
                                    </div>
                                    <?php endif; ?>
                                        
                                           
	                    </div>

<?php

    
    endwhile;
    
    
        echo '</div>';
  
}

?>