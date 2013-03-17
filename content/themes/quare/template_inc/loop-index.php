<?php

global $themeple_config;

do_action('themeple_excecute_query_var_action','loop-index');



if (have_posts()) :



	while (have_posts()) : the_post();



        $post_id    = get_the_ID();

        $title   	= get_the_title();

        $content 	= get_the_content();

        $content    = str_replace(']]>', ']]&gt;', apply_filters('the_content', $content ));

                

        $post_format = get_post_format($post_id);

        if(strlen($post_format) == 0)

            $post_format = 'standart';

        $count = 0;

        $comment_entries = get_comments(array( 'type'=> 'comment', 'post_id' => $post->ID ));

        if(count($comment_entries) > 0){

            foreach($comment_entries as $comment){

                if($comment->comment_approved)

                    $count++;

            }

        }

        ?>

        

        <article class="row-fluid blog-article normal" id="post-<?php echo the_ID(); ?>" <?php echo post_class('entry'); ?>>                    

            <div class="span12">


					<?php if($post_format == 'audio' || $post_format == 'gallery' || $post_format == 'video' || get_post_thumbnail_id()): ?>
                                <div class="row-fluid">

                                    <div class="span12">

                                        <div class="media">

                                            <?php if($post_format == 'audio'){ ?>

                                                



                                                <?php if(get_post_thumbnail_id()){ ?>
                            
                                                    <img src="<?php echo themeple_image_by_id(get_post_thumbnail_id(), array('width' => 1200, 'height' => 1200), 'url') ?>" alt="">
                            
                                                <?php } ?>

                                                <audio controls="controls">

                                                  <source src="<?php echo get_the_excerpt() ?>" type="audio/mpeg" />

                                                  Your browser does not support the audio element.

                                                </audio>





                                            <?php }elseif($post_format == 'gallery'){ ?>

                                                  



                                                  <?php $slider = new themeple_slideshow(get_the_ID(), 'flexslider');

               

                                                  if($slider && $slider->slide_number > 0){

                                                        $sliderHtml = $slider->render_slideshow();

                                                        echo $sliderHtml;

                                                  }?>





                                            <?php }elseif($post_format == 'video'){ ?>



                                               

                                                <?php $video = ""; if(themeple_backend_is_file( get_the_excerpt(), 'html5video'))

                                                {

                                                    $video = themeple_html5_video_embed(get_the_excerpt());

                                                }

                                                else if(strpos(get_the_excerpt(),'<iframe') !== false)

                                                {

                                                    $video = get_the_excerpt();

                                                }

                                                else

                                                {

                                                    global $wp_embed;

                                                    $video = $wp_embed->run_shortcode("[embed]".trim(get_the_excerpt())."[/embed]");

                                                }

                                                

                                                if(strpos($video, '<a') === 0)

                                                {

                                                    $video = '<iframe src="'.get_the_excerpt().'"></iframe>';

                                                } 

                                                echo $video;

                                                ?>





                                            <?php } elseif(get_post_thumbnail_id()){ ?>

                                           


                                               
                                                <img src="<?php echo themeple_image_by_id(get_post_thumbnail_id(), array('width' => 1200, 'height' => 1200), 'url') ?>" alt="">
                                            
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
				    <?php endif; ?>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="content">
                                            <dl  class="dl-horizontal">
                                                <dt><span class="type-<?php echo $post_format ?>-img"></span></dt>
                                                <dd>
                                                    <h2><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h2>
                                                    <ul class="info">
                                                        <li class="date"><?php the_time('F') ?> <?php the_time('Y') ?></li>
                                                        <li class="user">Posted By <?php echo get_the_author() ?></li>
                                                        <li class="comments"><?php echo $count ?> Comments</li>
                                                    </ul>
                                                </dd>
                                            </dl>                                            

                                            <?php if(is_single()){ ?>

                                                        <?php the_content() ?>

                                                     <?php }else{

                                                        if($post_format == 'video' || $post_format == 'audio'){



                                                            echo themeple_content(50);



                                                        }else

                                                        echo get_the_excerpt() ?>
                                                        <div class="row-fluid"><div class="span12"><a href="<?php echo get_permalink() ?>" class="btn default-btn"><span><?php _e("Read More", "themeple") ?></span> <span class="icon"></span></a></div></div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                </div>
        </article>



        <?php if(is_single() && themeple_post_meta(get_the_ID() , 'author_name') != ''): ?>

        <div class="post_author">
            
            <dl class="dl-horizontal">
                <dt><img src="<?php echo themeple_post_meta(get_the_ID() , 'author_photo');  ?>" /></dt>
                <dd>
                    <h5><?php echo themeple_post_meta(get_the_ID() , 'author_name');  ?></h5>
                    <?php echo themeple_post_meta(get_the_ID() , 'author_desc');  ?>
                </dd>
            </dl>

        </div>




        <?php endif; ?>

                            

                    

                

        

        

        <?php



    endwhile;

    themeple_pagination();

endif;

?>