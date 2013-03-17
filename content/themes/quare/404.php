<?php

get_header();

?>

<!-- Page Head -->
    <div class="header_border_top"></div>
    <div class="header_page">
        
            <h2><?php _e("404 - Not Found", 'themeple') ?></h2>
            <ul class="page_parents">
                <li><a href="<?php echo home_url() ?>"><?php _e("Home", 'themeple') ?></a></li>
            </ul>
            <span class="top_shadow"></span> 
       
    </div>  
    <div class="header_border_bottom"></div>

    <section id="not-found">
	    <section id="content">
	    	<div class="container" >
	                
	            	
	      	           
	            	<div class="row-fluid row-dynamic-el">
	            			
	            			<h1 style="font-weight:normal;"><?php _e("Ooops! Page not found...", 'themeple') ?></h1>
	            			<h3 style="font-weight:normal;"><?php echo themeple_get_option('404_error_message') ?></h3>
	            			
	            	</div>
	        </div>
	    </section>
	</section>
<?php
get_footer();


?>