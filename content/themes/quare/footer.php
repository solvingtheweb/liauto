<?php
global $themeple_config;
wp_reset_query();
$social_icons = themeple_get_option('social_icons');


?>

 <!-- Social Profiles -->
    

<!-- Footer -->
    </div>
    <div class="footer_wrapper">
    <?php $t = themeple_get_option('twitter_account'); if(!empty($t)): ?>
    <div class="footer_border_top"></div>
    <div class="top_footer"><div class="container"><?php echo get_twitter_top_footer(3, themeple_get_option('twitter_account')) ?><div class="pagination pull-right"> </div><span class="shadow_top_footer"></span></div>
    </div>
    <?php endif; ?>
    <footer id="footer">
        

    	<div class="inner">
	    	<div class="container">
	        	<div class="row-fluid ff">
                
                	<!-- widget -->
		        	<?php
                    
                    $columns = themeple_get_option('footer_number_columns');
                    for($i = 1; $i <= $columns; $i++){
                        ?>
                        <div class="span<?php echo 12/$columns ?>">
                        
                            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer - column'.$i) ) : else : echo "<div class='widget'>Add Widget Column $i</div>"; endif; ?>
                            
                        </div>
                        
                        
                        
                        
                        <?php
                    }
                
                
                
                ?>
                    
	            </div>
	        </div>
        </div>
        
        <div id="copyright">
	    	<div class="container">
	        	<div class="row">
		        	<div class="span12">Quare &copy; 2012
                        <div class="pull-right">
                            <?php $contact = themeple_get_option('footer_contact_info'); if(!empty($contact)) foreach($contact as $c): ?>
                            <span><?php echo $c['info'] ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!-- #copyright -->

    </footer><!-- #footer -->
</div>

<?php $layout = themeple_get_option('overall_layout'); if($layout == 'boxed'): ?>
</div>
<?php endif; ?>
<?php
wp_footer();
?>
</body>
</html>