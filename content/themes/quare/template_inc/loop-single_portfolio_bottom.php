<?php
global $themeple_config;
do_action('themeple_excecute_query_var_action','loop-index');
//$metas = themeple_portfolio_custom_field(get_the_ID());
$metas = themeple_post_meta(get_the_ID());
$output = '';
?>


<div class="row-fluid single_content">
    <div class="span12">
        <div class="row-fluid slider_full">
            <div class="span12">
        	<?php $slider = new themeple_slideshow(get_the_ID(), 'flexslider');
                       
                                      if($slider && $slider->slide_number > 0){
                                            $sliderHtml = $slider->render_slideshow();
                                            echo $sliderHtml;
                                      }
                       

             ?>
            </div>
        </div>


        <div class="row-fluid bottom_content">
            <div class="span8">
                <h5><?php _e("About Project", "themeple") ?></h5>
                <?php the_content() ?>
            </div>
            <div class="span4">
                 

                <?php 
                    if(!empty($metas['skills']) && !empty($metas['skills'][0]['title'])){
                    ?>
                         <h5><?php _e("Skills", "themeple") ?></h5>
                    <?php
                        foreach($metas['skills'] as $skill): ?>
                        
                        <?php  if(!empty($skill['title']) && !empty($skill['percentage'])) { ?>  
                        <div class="skill">
                            <span class="title"><?php echo $skill['title'] ?> <?php echo $skill['percentage'].'%' ?></span>
                            <div class="progress progress-striped active">
                                <div class="bar" style="width: <?php echo $skill['percentage'].'%;' ?>"></div>
                            </div>
                        </div>


                        <?php } ?>

                    <?php endforeach;
                    }



                 ?>

                 <?php if(isset($metas['button_title']) && !empty($metas['button_title'])): ?>
                 <a href="<?php echo $metas['button_link'] ?>" class="btn default-btn"><span><?php echo $metas['button_title'] ?></span> <span class="icon"></span></a>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>





