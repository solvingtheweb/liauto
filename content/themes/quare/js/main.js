


jQuery(function($) {
		
		$('[rel=tooltip]').tooltip();

		if($('#testimonials').length)
			$('#testimonials').cycle();
		

		if($('#dynamic_testimonial').length > 0){
			$('#dynamic_testimonial').cycle();
		}
		


		
		var width = $('.page_parents').width();
		var half = width/2;
		$('.page_parents').css('margin-left', -half+'px');
		$('.page_parents').css('left', '50%');

		$(".accordion-group .accordion-toggle").live('click', function(){
	        var $self = $(this).parent().parent();
	        $body = $self.find('.accordion-body');
	        if($self.find('.accordion-heading').hasClass('in_head')){
	          $self.parent().find('.accordion-heading').removeClass('in_head');
	        }else{  
	          $self.parent().find('.accordion-heading').removeClass('in_head');
	          $self.find('.accordion-heading').addClass('in_head');
                 
	        }
	          
	    });
		
		if($('.recent_sc_portfolio').length){
			$('.recent_sc_portfolio').imagesLoaded(function(){
	       			$(this).carouFredSel( 
					{
					
						items:6,
						responsive:true,
						scroll : { items : 6 },
						pagination	: $(this).parent().find('.pagination-portfolio')

					});
					
			});
		}


	

    $("audio,video").mediaelementplayer();               


	$(".lightbox-gallery").fancybox();
	$('.lightbox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
	
	

    
	
	$("#tweet_footer").each(function(){
        $self = $(this);
       			
       			$self.carouFredSel( 
				{
					
					circular: true,
					infinite: true,
					auto 	: true,
					
					scroll  : {

        				items           : 1,
        				fx 				: "fade"
        			},
					pagination	: $self.parent().find('.pagination')

					

					
				});
       
          
		});

	$(".carousel_blog").each(function(){
	        $self = $(this);
	       
	        
	       	
	       			$self.carouFredSel( 
					{
						
						circular: true,
						infinite: true,
						auto 	: false,

						scroll  : {

	        				items           : 1
	        			},

						prev : {

					        button : $self.parent().parent().parent().find('.prev')

					    },

					    next : {

					        button : $self.parent().parent().parent().find('.next')

					    }

						
					});
			
	       	
	          
		});
   
    $('.clients').imagesLoaded(function(){
       			$(this).carouFredSel( 
				{
					items:5,
					
					scroll : { items : 1 }

				});
	});
	
	function carousel_port_init(){
	    $(".carousel_portfolio").each(function(){
	        $self = $(this);
	        var cl = 3;
	        var nr = $self.find('.portfolio-item').length; 
	        if($self.parent().hasClass('three-cols'))
	        	cl = 3;
	        if($self.parent().hasClass('four-cols'))
	        	cl = 4;
	        if($self.parent().hasClass('two-cols'))
	        	cl = 2;
	        if($self.parent().hasClass('one-cols'))
	        	cl = 1;
	        
	       	$self.imagesLoaded(function(){
	       			$self.carouFredSel( 
					{
						
						circular: false,
						infinite: false,
						auto 	: false,

						scroll  : {

	        				items           : 1
	        			},

						prev : {

					        button : $self.parent().parent().find('.prev')

					    },

					    next : {

					        button : $self.parent().parent().find('.next')

					    }

						
					});
			});
	       	
	          
		});
	}
    carousel_port_init();
    
    

    $('.testimonials .content li:first-child').addClass('active');   
	$('.testimonials .list li:first-child').addClass('active');
	$('.testimonials .list li').live('click', function(){
		var id = $(this).data('id');
		$(this).parent().find('li').removeClass('active');
		$(this).parent().parent().find('.content').find('li').removeClass('active');
		$(this).parent().parent().find('.content').find('li[data-id="'+id+'"]').addClass('active');
		$(this).addClass('active')
	});
   
	
	
	
	

	
	
	
	if($().mobileMenu) {
		$('#navigation nav').each(function(){
			$(this).mobileMenu();
			$('.select-menu').customSelect();
		});
		
	}



	$('.flexslider').flexslider({
			animationSpeed: 400,
			animation: "fade",
			controlNav: true,
			pauseOnAction: true,
			pauseOnHover: false
		});
	$("#attention button.close_button").click(function(){
		$("#attention").height(4);
		$(this).parent().parent().parent().find('.open_button').css('top', 3);
	});
	$("#attention span.open_button").mouseenter(function(){
		$("#attention").height(60);
		$(this).css('top', 59);
	});
	$(".menu a").live('click', function(e){
		var button = $(this);
		if($(button).attr('title').length > 0){
			e.preventDefault();
			var title = button.attr('title').split("-");
			var blog  = title[0].split("_");
			var sidebar = title[1].split("_");
			var sidebar_pos = '';
			var blog_type = '';
			if(blog[0] == 'blog'){
				sidebar_pos = sidebar[1];
				blog_type = blog[1];
				document.cookie = 'themeple_blog='+blog_type ;
				document.cookie = 'themeple_sidebar='+sidebar_pos;
				setTimeout(function(){
								    window.location.hash = "#wpwrap";
						 		    window.location.href = $(button).attr("href");
								
             			}, 1000);

			}
		}else
			window.location.href = $(button).attr("href");
		
	});

	var $container = $('.filterable');
    
    
    if( $('.tpl2 img', $container).size() ) {
          $('.tpl2 img', $container).one("load", function(){
			    $container.isotope({
			      filter: '*',
			      
			      resizeble: true,
			      animationOptions: {
			         duration: 750,
			         easing: 'linear',
			         queue: false,
			       }
			    });
			});

          setTimeout(function(){
		        $container.isotope({
		          filter: '*',
		          resizeble: true,
		          animationOptions: {
		             duration: 750,
		             easing: 'linear',
		             queue: false,
		           }
		        });
		    }, 100);
   
}
  

 $('nav#portfolio-filter ul li').click(function(){
    var selector = $(this).find('a').attr('data-filter');
    $(this).parent().find('.active').removeClass('active');
    $(this).addClass('active');
    $container.isotope({ 
    filter: selector,
    
	resizeble: true,
    animationOptions: {
       duration: 750,
       easing: 'linear',
       queue: false,
     
     }
    });
    return false;
  });

	$('.img_effect img').hoverZoom({zoom:20, overlay:false});
	


	
	$('nav#faq-filter li a').click(function(e){
		e.preventDefault();

		var selector = $(this).attr('data-filter');

		$('.faq .accordion-group').fadeOut();
		$('.faq .accordion-group'+selector).fadeIn();

		$(this).parents('ul').find('li').removeClass('active');
		$(this).parent().addClass('active');
	});

	$("#switcher-head").toggle(function(){
		$("#style-switcher").animate({
			left: 0
		}, 500);
	}, function(){
		$("#style-switcher").animate({
			left: -212
		}, 500);
	});
	
});




(function($){

    $.fn.extend({ 

        hoverZoom: function(settings) {
 
            var defaults = {
                overlay: true,
                overlayColor: '#2e9dbd',
                overlayOpacity: 0.7,
                zoom: 25,
                speed: 300
            };
             
            var settings = $.extend(defaults, settings);
         
            return this.each(function() {
            
                var s = settings;

                var image = $(this);
		  var hz = $(image).parent();

                image.load(function() {
                    
                    if(s.overlay === true) {
                        $(this).parent().append('<div class="zoomOverlay" />');
                        $(this).parent().find('.zoomOverlay').css({
                            opacity:0, 
                            display: 'block', 
                            backgroundColor: s.overlayColor
                        }); 
                    }
                
                    var width = $(image).width();
                    var height = $(image).height();
                
                    $(this).fadeIn(1000, function() {
                        $(this).parent().css('background-image', 'none');
                        hz.hover(function() {
                            
                            
                            $('img', this).stop().animate({
                                height: height + s.zoom,
                                marginLeft: -(s.zoom),
                                marginTop: -(s.zoom)
                            }, s.speed);
                            image.css('width', 'auto');
                            if(s.overlay === true) {
                                $(this).parent().find('.zoomOverlay').stop().animate({
                                    opacity: s.overlayOpacity
                                }, s.speed);
                            }
                        }, function() {
                            $('img', this).stop().animate({
                                height: height,
                                marginLeft: 0,
                                marginTop: 0
                            }, s.speed);
                            if(s.overlay === true) {
                                $(this).parent().find('.zoomOverlay').stop().animate({
                                    opacity: 0
                                }, s.speed);
                            }
                        });
                    });
                });    
            });
        }
    });


	
})(jQuery);

