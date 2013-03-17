<?php


$admin_pages = array( 
     
     array( 'slug' => 'themeple',  'parent'=>'themeple', 'icon'=>"option.png" ,      'title' =>  'Theme Option' ),
     array( 'slug' => 'styling',   'parent'=>'themeple', 'icon'=>"styling.png",      'title' =>  'Styling'  ),
     array( 'slug' => 'font_type', 'parent'=>'themeple', 'icon'=>"fontixon.png",      'title' =>   'Font Type',  'sub' => true  ),
     array( 'slug' => 'font_size', 'parent'=>'themeple', 'icon'=>"fontsizeicon.png",      'title' =>   'Font Size',  'sub' => true  ),
     array( 'slug' => 'header', 'parent'=>'themeple', 'icon'=>"headeroptionicon.png",      'title' =>   'Header',  'sub' => true  ),
     array( 'slug' => 'dynamic_elements', 'parent'=>'themeple', 'icon'=>"dyelemetsicon.png",      'title' =>   'Dynamic Elements',  'sub' => true  ),
     array( 'slug' => 'footer', 'parent'=>'themeple', 'icon'=>"footeroptionicon.png",      'title' =>   'Footer',  'sub' => true  ),
     array( 'slug' => 'layout',    'parent'=>'themeple', 'icon'=>"layout.png",       'title' =>  'Layout'  ),
     array( 'slug' => 'portfolio', 'parent'=>'themeple', 'icon'=>"portfolio.png" ,   'title' =>  'Portfolio' ),
     array( 'slug' => 'contact',   'parent'=>'themeple', 'icon'=>"contact.png" ,     'title' =>  'Contact' ),
     array( 'slug' => 'sidebar',   'parent'=>'themeple', 'icon'=>"sidebar1.png",     'title' =>  'Sidebar'  ),
     array( 'slug' => 'builder',   'parent'=>'builder','icon'=>"pagebuilder.png",    'title' =>  'Page Builder'  )
     
                          
);

/* GENERAL */
/*------------------------------------------------*/
/*------------------------------------------------*/
$page_elements[] =  array(
                         "slug"              => "themeple",
                         "name"              => "Import Dummy Data",
                         "desc"              => "Here you can automatically add all needed files to create pages like preview",
                         "id"                => "dummy_dataa",
                         "type"              => "dummy_data"
);
$page_elements[] =  array(
                         "slug"              => "themeple",
                         "name"              => "Select FrontPage",
                         "desc"              => "Select the page you want to show on the home",
                         "id"                => "frontpage",
                         "type"              => "select",
                         "css_class"         => "full_select",
                         "subtype"           => "page"
);
$page_elements[] =  array(
                         "slug"              => "themeple",
                         "name"              => "Select Blog Page",
                         "desc"              => "Select the page you want to use for blog",
                         "id"                => "blogpage",
                         "type"              => "select",
                         "css_class"         => "full_select",
                         "subtype"           => "page"
);
$page_elements[] =  array(    
                         "slug"              => "themeple",
                         "name"              => "Logo",
                         "desc"              => "Select your logo to be uploaded.",
                         "id"                => "logo",
                         "type"              => "upload",
                         'std'               => THEMEPLE_BASE_URL.'img/logo.png',
                         "btn_text"          => "Upload",
                         "label"             => "Use Image as logo"
);

$page_elements[] =  array(    
                         "slug"              => "themeple",
                         "name"              => "Footer Logo",
                         "desc"              => "Select your footer logo to be uploaded.",
                         "id"                => "footer_logo",
                         "type"              => "upload",
                         'std'               => THEMEPLE_BASE_URL.'img/footer_logo.png',
                         "btn_text"          => "Upload",
                         "label"             => "Use Image as logo"
);                
$page_elements[] =  array(    
                         "slug"              => "themeple",
                         "name"              => "Favicon",
                         "desc"              => "Upload the favicon.<br/>Accepted formats: .ico, .png, .gif",
                         "id"                => "favicon",
                         "type"              => "upload",
                         "btn_text"          => "Upload",
                         "label"             => "Use Image as favicon");  

$page_elements[] = array(
                         "slug"              => "themeple",
                         "name"              => "404 Error message",
                         "id"                => "404_error_message",
                         "type"              => "input_text",
                         "std"               => " <strong>Ohh…</strong>You have requested the page that its no longer avaible"
);    
$page_elements[] = array(
                         "slug"              => "themeple",
                         "name"              => "Twitter Account for the footer",
                         "id"                => "twitter_account",
                         "type"              => "input_text",
                         "std"               => "envato"
);  



$page_elements[] =  array(    
                         "name"              => "Add new Clients Images",
                         "desc"              => "Add or edit your clients logo",
                         "std"               => "",
                         "slug"              => "themeple",
                         "type"              => "description_h",
                         "nodescription"     =>true);

$page_elements[] =  array(    
                         "slug"              => "themeple",
                         "type"              => "layout_section", 
                         "id"                => "client-logo", 
                         "linktext"          => "Add another Client Logo",
                         "deletetext"        => "Remove Client Logo",
                         "blank"             => true, 
                         "std"               => array(
                                                       array('logo'=>'', 'logo_hover' => '', 'link' => ''),
                                                       array('logo'=>'', 'logo_hover' => ''),
                                                       array('logo'=>'', 'logo_hover' => ''),
                                                ),
                         'subelements'  => array( 
                              
                                   array(    
                                        "name"         => "Client Logo:",
                                        "slug"         => "themeple",
                                        "desc"         => "",
                                        "id"           => "logo",
                                        "std"          => "",
                                        "btn_text"     => "Upload",
                                        "type"         => "upload"
                                   ),
                                   array(    
                                        "name"         => "Client Logo Hover:",
                                        "slug"         => "themeple",
                                        "desc"         => "",
                                        "id"           => "logo_hover",
                                        "std"          => "",
                                        "btn_text"     => "Upload",
                                        "type"         => "upload"
                                   ),
                                   array(    
                                        "name"         => "Link",
                                        "slug"         => "themeple",
                                        "desc"         => "",
                                        "id"           => "link",
                                        "std"          => "http://",
                                        "type"         => "input_text"
                                   )
 
 
                         )             
                                    
);
$page_elements[] =  array(    
                         "slug"              => "themeple",
                         "type"              => "layout_section", 
                         "id"                => "social_icons", 
                         "linktext"          => "Add another Social Icon",
                         "deletetext"        => "Remove Social Icon",
                         "blank"             => true, 
                         "std"               => array(
                                                       array('social'=>'dribbble', 'link' => '#'),
                                                       array('social'=>'vimeo', 'link' => '#'),
                                                       array('social'=>'twitter', 'link' => '#'),
                                                       array('social'=>'facebook', 'link' => '#'),
                                                       array('social'=>'flickr', 'link' => '#'),
                                                       array('social'=>'paypal', 'link' => '#'),
                                                       array('social'=>'aim', 'link' => '#'),
                                                       array('social'=>'apple', 'link' => '#'),
                                                       array('social'=>'behance', 'link' => '#'),
                                                       array('social'=>'delicious', 'link' => '#'),
                                                       array('social'=>'deviantart', 'link' => '#'),
                                                       array('social'=>'digg', 'link' => '#'),
                                                       array('social'=>'drupal', 'link' => '#'),
                                                       array('social'=>'evernote', 'link' => '#'),
                                                       array('social'=>'flower', 'link' => '#'),
                                                       array('social'=>'forrst', 'link' => '#'),
                                                       array('social'=>'groveshark', 'link' => '#'),
                                                       array('social'=>'kexter', 'link' => '#'),
                                                       array('social'=>'myspace', 'link' => '#'),
                                                       array('social'=>'paypal', 'link' => '#'),
                                                       array('social'=>'photoic', 'link' => '#'),
                                                       array('social'=>'playstation', 'link' => '#'),
                                                       array('social'=>'question', 'link' => '#'),
                                                       array('social'=>'rabbit', 'link' => '#'),
                                                       array('social'=>'robot', 'link' => '#'),
                                                       array('social'=>'rss', 'link' => '#'),
                                                       array('social'=>'skype', 'link' => '#'),
                                                       array('social'=>'sn', 'link' => '#'),
                                                       array('social'=>'windows', 'link' => '#'),
                                                       array('social'=>'wordpress', 'link' => '#'),
                                                       array('social'=>'yahoo', 'link' => '#'),
                                                       array('social'=>'youtube', 'link' => '#'),
                                                       array('social'=>'googleplus', 'link' => '#'),
                                                       array('social' => 'linkedin', 'link' => '#')


                                                ),
                         'subelements'  => array( 
                              
                                   array(    
                                        "name"         => "Social Icon:",
                                        "slug"         => "themeple",
                                        "desc"         => "",
                                        "id"           => "social",
                                        "std"          => "",
                                        
                                        "type"         => "select",
                                        "subtype"      => array("Dribbble" => "dribbble", "Vimeo" => 'vimeo', "Twitter" => 'twitter', "Facebook" => "facebook", "Flickr" => "flickr", "Paypal" => "Paypal", "Aim" => 'aim', "Apple" =>'apple', "Behance" => 'behance', "Delicious" => 'delicious', "Deviantart" => 'deviantart', "Digg" => 'digg', "Drupal" => 'drupal', "Evernote" => 'evernote', "Flower" => 'flower', "Forrst" => 'forrst', "Groveshark" => 'groveshark', "Kexter" => 'kexter', "Myspace" => 'myspace', "Photoic" => 'photoic', "Playstation" => 'playstation', "Question" => 'question', "Rabbit" => 'rabbit', "Robot"=>'robot', "Rss" => 'rss' , "Skype" => 'skype', "Sn" => 'sn', "Windows" => 'windows', "Wordpress" => 'wordpress', "Yahoo" => 'yahoo', "Youtube" => 'youtube', "Google Plus" => 'googleplus', "Linkedin" => 'linkedin')
                                   ),
                                   
                                   array(    
                                        "name"         => "Link",
                                        "slug"         => "themeple",
                                        "desc"         => "",
                                        "id"           => "link",
                                        "std"          => "http://",
                                        "type"         => "input_text"
                                   )
 
 
                         )             
                                    
);

$page_elements[] =  array(    
                         "slug"              => "themeple",
                         "type"              => "layout_section", 
                         "id"                => "footer_contact_info", 
                         "linktext"          => "Add another Contact Info",
                         "deletetext"        => "Remove Contact Info",
                         "blank"             => true, 
                         "std"               => array(
                                                       array('info'=>'012 Some Street. Milano, MI, 123 IT'),
                                                       array('info'=>'(123) 456-7890'),
                                                       array('info'=>'contact@companyname.com')
                                                ),
                         'subelements'  => array( 
                              
                                   array(    
                                        "name"         => "Footer Contact Info Content",
                                        "slug"         => "themeple",
                                        "desc"         => "",
                                        "id"           => "info",
                                        "std"          => "",
                                        "type"         => "input_text"
                                   )
 
 
                         )             
                                    
);



/* End  Themeple */





/*------------------------------------------------*/
/*------------------------------------------------*/
/*------------------------------------------------*/


/* General Styles */
/*------------------------------------------------*/
/*------------------------------------------------*/


$page_elements[] = array(
     
     "slug"                        => "styling",
     "name"                        => "Select Predefined skin",
     "std"                         => "blue",
     "id"                          => "change_skin",
     "type"                        => "change_skin"

);
$page_elements[] = array(
     
     "slug"                        => "styling",
     "name"                        => "Custom CSS BOX",
     "std"                         => "",
     "id"                          => "css_box",
     "type"                        => "textarea"

);

$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Background Color',
     "type"                        => "colorpicker", 
     "id"                          => "bg_color",
     "std"                         => '#ffffff'
);

$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Background Image Pattern',
     "type"                        => "radioimage", 
     "class"			   => 'pattern',
     "id"                          => "bg_img",
     "std"                         => "none",
     "subtype"                     => array( 
					array('name' => 'No Pattern', 'value' =>'none', 'img' => 'pattern/none.png'),
                                        array('name' => 'Pattern 1', 'value' =>'pattern1', 'img' => 'pattern/pattern1.png'),
                                        array('name' => 'Pattern 2', 'value' =>'pattern2', 'img' => 'pattern/pattern2.png'),
                                        array('name' => 'Pattern 3', 'value' =>'pattern3', 'img' => 'pattern/pattern3.png'),
					array('name' => 'Pattern 4', 'value' =>'pattern4', 'img' => 'pattern/pattern4.png'),
                                        array('name' => 'Pattern 5', 'value' =>'pattern5', 'img' => 'pattern/pattern5.png'),
                                        array('name' => 'Pattern 6', 'value' =>'pattern6', 'img' => 'pattern/pattern6.png'),
					array('name' => 'Pattern 7', 'value' =>'pattern7', 'img' => 'pattern/pattern7.png')
                                   )
);

$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Upload your background image',
     "type"                        => "upload", 
     "btn_text"                    => "Upload",
     "id"                          => "bg_your_img"
     
);



$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Base Color',
     "type"                        => "colorpicker", 
     "id"                          => "base_color",
     "std"                         => '#47aede'
);

$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Arrow Image',
     "type"                        => "upload", 
     "btn_text"                    => "Upload",
     "id"                          => "arrow_image",
     'std'                         => THEMEPLE_BASE_URL.'img/arrow.png'
     
);



$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Link Portfolio Image Hover',
     "type"                        => "upload", 
     "btn_text"                    => "Upload",
     "id"                          => "link_port_h",
     'std'                         => ''
     
);
$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Lightbox Portfolio Image Hover',
     "type"                        => "upload", 
     "btn_text"                    => "Upload",
     "id"                          => "lightbox_port_h",
     'std'                         => ''
     
);
$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Portfolio Show all icon hover',
     "type"                        => "upload", 
     "btn_text"                    => "Upload",
     "id"                          => "portfolio_all_hover",
     'std'                         => ''
     
);
$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Next Arrow',
     "type"                        => "upload", 
     "btn_text"                    => "Upload",
     "id"                          => "arrow_next",
     'std'                         => ''
     
);
$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Prev Arrow',
     "type"                        => "upload", 
     "btn_text"                    => "Upload",
     "id"                          => "arrow_prev",
     'std'                         => ''
     
);
$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Header Page Arrow',
     "type"                        => "upload", 
     "btn_text"                    => "Upload",
     "id"                          => "header_arrow",
     'std'                         => ''
     
);
$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'Body Font Color',
     "type"                        => "colorpicker", 
     "id"                          => "body_font_color",
     'std'                         => "#888888"
     
);

/* End General Styles */
/*------------------------------------------------*/
/*------------------------------------------------*/
/* Font Type */
/*------------------------------------------------*/
/*------------------------------------------------*/
$page_elements[] = array(
                         "slug"                   => 'font_type',
                         "name"                   => 'Select Font',
                         "desc"                   => 'Font to be used for your site',
                         'type'                   => 'select',
                         'id'                     => 'font_page',
                         'std'                    => 'Open Sans',
                         'subtype'                => array(           
                                                       'Helvetica Neue (Standart)' => "standart",
                                                       'Alice'=>'Alice',
                                                       'Allerta'=>'Allerta',
                                                       'Arvo'=>'Arvo',
                                                       'Antic'=>'Antic',
                                
                                                       'Bangers'=>'Bangers',
                                                       'Bitter'=>'Bitter',
                                                       
                                                       'Cabin'=>'Cabin',
                                                       'Cardo'=>'Cardo',
                                                       'Carme'=>'Carme',
                                                       'Coda'=>'Coda',
                                                       'Coustard'=>'Coustard',

                                                       'Damion'=>'Damion',
                                                       'Dancing Script'=>'Dancing Script',
                                                       'Droid Sans'=>'Droid Sans',
                                                       'Droid Serif'=>'Droid Serif',
                                                       
                                                       'EB Garamond'=>'EB Garamond',
                                                       
                                                       'Fjord One'=>'Fjord One',
                                                       
                                                       'Inconsolata'=>'Inconsolata',
                                                       
                                                       'Josefin Sans' => 'Josefin Sans',
                                                       'Josefin Slab'=>'Josefin Slab',
                                                       
                                                       'Kameron'=>'Kameron',
                                                       'Kreon'=>'Kreon',
                                                       
                                                       'Lobster'=>'Lobster',
                                                       'League Script'=>'League Script',

                                                       'Mate SC'=>'Mate SC',
                                                       'Mako'=>'Mako',
                                                       'Merriweather'=>'Merriweather',
                                                       'Metrophobic'=>'Metrophobic',
                                                       'Molengo'=>'Molengo',
                                                       'Muli'=>'Muli',

                                                       'Nobile'=>'Nobile',
                                                       'News Cycle'=>'News Cycle',

                                                       'Open Sans'=>'Open Sans',
                                                       'Orbitron'=>'Orbitron',
                                                       'Oswald'=>'Oswald',
                                                       
                                                       'Pacifico'=>'Pacifico',
                                                       'Poly'=>'Poly',
                                                       'Podkova'=>'Podkova',

                                                       'Quattrocento'=>'Quattrocento',
                                                       'Questrial'=>'Questrial',
                                                       'Quicksand'=>'Quicksand',
                                                       
                                                       'Raleway'=>'Raleway',

                                                       'Salsa'=>'Salsa',
                                                       'Sunshiney'=>'Sunshiney',
                                                       'Signika Negative'=>'Signika Negative',


                                                       'Tangerine'=>'Tangerine',
                                                       'Terminal Dosis'=>'Terminal Dosis',
                                                       'Tenor Sans'=>'Tenor Sans',

                                                       'Varela Round'=>'Varela Round',
                                                       
                                                       'Yellowtail'=>'Yellowtail'
                    
                                                  )                
);

$page_elements[] = array(
                         "slug"                   => 'font_type',
                         "name"                   => 'Select Headings',
                         "desc"                   => 'Font to be used for your site',
                         'type'                   => 'select',
                         'id'                     => 'font_headings',
                         'std'                    => 'standart',
                         'subtype'                => array(            
                                                       'Museo Slab' => "standart",
                                                       'Alice'=>'Alice',
                                                       'Allerta'=>'Allerta',
                                                       'Arvo'=>'Arvo',
                                                       'Antic'=>'Antic',
                                
                                                       'Bangers'=>'Bangers',
                                                       'Bitter'=>'Bitter',
                                                       
                                                       'Cabin'=>'Cabin',
                                                       'Cardo'=>'Cardo',
                                                       'Carme'=>'Carme',
                                                       'Coda'=>'Coda',
                                                       'Coustard'=>'Coustard',

                                                       'Damion'=>'Damion',
                                                       'Dancing Script'=>'Dancing Script',
                                                       'Droid Sans'=>'Droid Sans',
                                                       'Droid Serif'=>'Droid Serif',
                                                       
                                                       'EB Garamond'=>'EB Garamond',
                                                       
                                                       'Fjord One'=>'Fjord One',
                                                       
                                                       'Inconsolata'=>'Inconsolata',
                                                       
                                                       'Josefin Sans' => 'Josefin Sans',
                                                       'Josefin Slab'=>'Josefin Slab',
                                                       
                                                       'Kameron'=>'Kameron',
                                                       'Kreon'=>'Kreon',
                                                       
                                                       'Lobster'=>'Lobster',
                                                       'League Script'=>'League Script',

                                                       'Mate SC'=>'Mate SC',
                                                       'Mako'=>'Mako',
                                                       'Merriweather'=>'Merriweather',
                                                       'Metrophobic'=>'Metrophobic',
                                                       'Molengo'=>'Molengo',
                                                       'Muli'=>'Muli',

                                                       'Nobile'=>'Nobile',
                                                       'News Cycle'=>'News Cycle',

                                                       'Open Sans'=>'Open Sans',
                                                       'Orbitron'=>'Orbitron',
                                                       'Oswald'=>'Oswald',
                                                       
                                                       'Pacifico'=>'Pacifico',
                                                       'Poly'=>'Poly',
                                                       'Podkova'=>'Podkova',

                                                       'Quattrocento'=>'Quattrocento',
                                                       'Questrial'=>'Questrial',
                                                       'Quicksand'=>'Quicksand',
                                                       
                                                       'Raleway'=>'Raleway',

                                                       'Salsa'=>'Salsa',
                                                       'Sunshiney'=>'Sunshiney',
                                                       'Signika Negative'=>'Signika Negative',


                                                       'Tangerine'=>'Tangerine',
                                                       'Terminal Dosis'=>'Terminal Dosis',
                                                       'Tenor Sans'=>'Tenor Sans',

                                                       'Varela Round'=>'Varela Round',
                                                       
                                                       'Yellowtail'=>'Yellowtail'
                    
                                                  )                
);

/* End Font Type */









/*------------------------------------------------*/
/*------------------------------------------------*/
/*------------------------------------------------*/









/* Font Sizes */
/*------------------------------------------------*/
/*------------------------------------------------*/
$page_elements[] = array(

     "slug"                        => "font_size",
     "name"                        => 'Body Font Size',
     "type"                        => "select", 
     "id"                          => "font_size_page",
     "std"                         => '13',
     "subtype"                     => array('10' => 10,'11' => 11,'12' => 12,'13' => 13,'14' => 14,'15' => 15,'16' => 16,'17' => 17,'18' => 18,'19' => 19, '20'=>20, '21'=>21, '22'=>22, '23'=>23, '24'=>24, '25'=>25, '26'=>26, '27'=>27, '28'=>28, '29'=>29, '30'=>30, '31'=>31, '32'=>32 )

);
$page_elements[] = array(

     "slug"                        => "font_size",
     "name"                        => 'H1 Font Size',
     "type"                        => "select", 
     "id"                          => "font_size_1",
     "std"                         => '25',
     "subtype"                     => array('10' => 10,'11' => 11,'12' => 12,'13' => 13,'14' => 14,'15' => 15,'16' => 16,'17' => 17,'18' => 18,'19' => 19, '20'=>20, '21'=>21, '22'=>22, '23'=>23, '24'=>24, '25'=>25, '26'=>26, '27'=>27, '28'=>28, '29'=>29, '30'=>30, '31'=>31, '32'=>32 )

);

$page_elements[] = array(

     "slug"                        => "font_size",
     "name"                        => 'H2 Font Size',
     "type"                        => "select", 
     "id"                          => "font_size_2",
     "std"                         => '18',
     "subtype"                     => array('10' => 10,'11' => 11,'12' => 12,'13' => 13,'14' => 14,'15' => 15,'16' => 16,'17' => 17,'18' => 18,'19' => 19, '20'=>20, '21'=>21, '22'=>22, '23'=>23, '24'=>24, '25'=>25, '26'=>26, '27'=>27, '28'=>28, '29'=>29, '30'=>30, '31'=>31, '32'=>32 )

);

$page_elements[] = array(

     "slug"                        => "font_size",
     "name"                        => 'H3 Font Size',
     "type"                        => "select", 
     "id"                          => "font_size_3",
     "std"                         => '17',
     "subtype"                     => array('10' => 10,'11' => 11,'12' => 12,'13' => 13,'14' => 14,'15' => 15,'16' => 16,'17' => 17,'18' => 18,'19' => 19, '20'=>20, '21'=>21, '22'=>22, '23'=>23, '24'=>24, '25'=>25, '26'=>26, '27'=>27, '28'=>28, '29'=>29, '30'=>30, '31'=>31, '32'=>32 )

);

$page_elements[] = array(

     "slug"                        => "font_size",
     "name"                        => 'H4 Font Size',
     "type"                        => "select", 
     "id"                          => "font_size_4",
     "std"                         => '16',
     "subtype"                     => array('10' => 10,'11' => 11,'12' => 12,'13' => 13,'14' => 14,'15' => 15,'16' => 16,'17' => 17,'18' => 18,'19' => 19, '20'=>20, '21'=>21, '22'=>22, '23'=>23, '24'=>24, '25'=>25, '26'=>26, '27'=>27, '28'=>28, '29'=>29, '30'=>30, '31'=>31, '32'=>32 )

);

$page_elements[] = array(

     "slug"                        => "font_size",
     "name"                        => 'H5 Font Size',
     "type"                        => "select", 
     "id"                          => "font_size_5",
     "std"                         => '15',
     "subtype"                     => array('10' => 10,'11' => 11,'12' => 12,'13' => 13,'14' => 14,'15' => 15,'16' => 16,'17' => 17,'18' => 18,'19' => 19, '20'=>20, '21'=>21, '22'=>22, '23'=>23, '24'=>24, '25'=>25, '26'=>26, '27'=>27, '28'=>28, '29'=>29, '30'=>30, '31'=>31, '32'=>32 )

);

$page_elements[] = array(

     "slug"                        => "font_size",
     "name"                        => 'H6 Font Size',
     "type"                        => "select", 
     "id"                          => "font_size_6",
     "std"                         => '14',
     "subtype"                     => array('10' => 10,'11' => 11,'12' => 12,'13' => 13,'14' => 14,'15' => 15,'16' => 16,'17' => 17,'18' => 18,'19' => 19, '20'=>20, '21'=>21, '22'=>22, '23'=>23, '24'=>24, '25'=>25, '26'=>26, '27'=>27, '28'=>28, '29'=>29, '30'=>30, '31'=>31, '32'=>32 )

);
/* Font Sizes */
/*------------------------------------------------*/
/*------------------------------------------------*/
/* Header */
/*------------------------------------------------*/
/*------------------------------------------------*/
$page_elements[] = array(

     "slug"                        => "header",
     "name"                        => 'Menu Position',
     "type"                        => "select", 
     "id"                          => "menu_position",
     "std"                         => 'center',
     "no_first"                    => true,
     "subtype"                     => array('Left' => 'left', 'Center' => 'center', 'Top' => 'top')
     
);


$page_elements[] = array(

     "slug"                        => "header",
     "name"                        => 'Navigation Item Font Color',
     "type"                        => "colorpicker", 
     "id"                          => "nav_font_color",
     "std"                         => '#4f4f4f'
     
);

$page_elements[] = array(

     "slug"                        => "header",
     "name"                        => 'Social Icons on Top?',
     "type"                        => "switchbutton", 
     "id"                          => "social_bool",
     "std"                         => 'yes'

     
);
/* End Header */
/*------------------------------------------------*/
/*------------------------------------------------*/
/* DYNAMIC Elements */
$page_elements[] = array(

     "slug"                        => "dynamic_elements",
     "name"                        => 'Dynamic Elements Title Color',
     "type"                        => "colorpicker", 
     "id"                          => "dynamic_el_title_color",
     "std"                         => '#4f4f4f'
     
);
$page_elements[] = array(

     "slug"                        => "dynamic_elements",
     "name"                        => 'Recent Portfolio GreyScale',
     "type"                        => "switchbutton", 
     "id"                          => "dynamic_greyscale",
     "std"                         => 'no'
     
);
$page_elements[] = array(

     "slug"                        => "styling",
     "name"                        => 'All hovers and services circle color',
     "type"                        => "colorpicker", 
     "id"                          => "second_color",
     "std"                         => '#4f4f4f'
     
);
/* End Dynamic Elements */
/*------------------------------------------------*/
/* Footer */
/*------------------------------------------------*/
/*------------------------------------------------*/
$page_elements[] = array(

     "slug"                        => "footer",
     "name"                        => 'Footer Bg Color',
     "type"                        => "colorpicker", 
     "std"                         => "#3b4044",
     "id"                          => "footer_bg_color"  
);

$page_elements[] = array(

     "slug"                        => "footer",
     "name"                        => 'Footer Copyright Bg Color',
     "type"                        => "colorpicker", 
     "std"                         => "#2e3032",
     "id"                          => "footer_copyright_bg"  
);

$page_elements[] = array(

     "slug"                        => "footer",
     "name"                        => 'Footer Text Color',
     "type"                        => "colorpicker", 
     "id"                          => "footer_font_color",
     "std"                         => "#888888"  
);
$page_elements[] = array(

     "slug"                        => "footer",
     "name"                        => 'Footer Divider Color',
     "type"                        => "colorpicker", 
     "id"                          => "footer_divider_color",
     "std"                         => "#FFAE8B"  
);



/* End Footer */
/*------------------------------------------------*/
/*------------------------------------------------*/





/* Builder */
/*------------------------------------------------*/
/*------------------------------------------------*/
$page_elements[] = array(
                        "slug"                         => "builder",
                        "name"                         => "Create Page Template",
                        "desc"                         => "Insert the name of the template",
                        "id"                           => "page_builder",
                        "type"                         => "pagebuilder",
                        "btn_text"                     => "Create",
                        "parent"                       => "builder",
                        "sortable"                     => "themeple_sortable",
                        "default_elements"             => array(
                                        
                                                            array(    
                                                                 "slug"              => "builder",
                                                                 "name"              => "Dynamic Template Page Layout",
                                                                 "desc"              => "Choose the layout of your template",
                                                                 "id"                => "dynamic_page_layout",
                                                                 "type"              => "radioimage",
                                                                 "std"               => "fullsize",
                                                                 "css_class"         => "full_select",
                                                                 "no_first"          =>true,
                                                                 "subtype"           => array( 
                                                                                          array('name' => 'Left Sidebar', 'value' =>'sidebar_left', 'img' => '90x62/sidebarleft.png'),
                                                                                          array('name' => 'Right Sidebar', 'value' =>'sidebar_right', 'img' => '90x62/sidebarright.png'),
                                                                                          array('name' => 'FullWidth', 'value' =>'fullsize', 'img' => '90x62/fullwidth.png')
                                                                                     )
                                                            ),

                                                            array(
                                                                 "type"              => "add_dynamic_element",
                                                                 "slug"              => 'builder',
                                                                 "name"              => "Add Elements",
                                                                 "class"             => "semi_select",
                                                                 "desc"              => "Select the element to be added in the template that you have created. Use Drag and Drop to sort elements",
                                                                 "std"               => "",
                                                                 "id"                => "add_template_option",
                                                                 "options_file"      => "template_inc/admin/admin_dynamic_options.php"
                                                            )
                                                       )
);
                    

/* End Builder */









/*------------------------------------------------*/
/*------------------------------------------------*/
/*------------------------------------------------*/











/* Portfolio */
/*------------------------------------------------*/
/*------------------------------------------------*/
$page_elements[] =  array(    
                         "name"                   => "Add new portfolio meta fields",
                         "desc"                   => "Add or edit text fields for portfolio single page",
                         "std"                    => "",
                         "slug"                   => "portfolio",
                         "type"                   => "description_h",
                         "nodescription"          =>true
);



$page_elements[] =  array(    
                         "name"                   => "Add new portfolios",
                         "desc"                   => "Here you can add new portfolio pages but before you need to add a new page in the pages section of the wordpress to be used for this portfolio",
                         "std"                    => "",
                         "slug"                   => "portfolio",
                         "type"                   => "description_h",
                         "nodescription"          => true
);


$page_elements[] =  array(    
                         "slug"                   => "portfolio",
                         "type"                   => "layout_section", 
                         "id"                     => "portfolio", 
                         "linktext"               => "Add another Portfolio",
                         "deletetext"             => "Remove Portfolio",
                         "blank"                  => true, 
                         "nodescription"          => true,
                         'subelements'            => array( 
                              
                                                       array(    
                                                            "name"              => "Which categories should be used for the portfolio?",
                                                            "desc"              => "Here you can select multiple or single cateories to be used for this portfolio page.",
                                                            "id"                => "portfolio_cats",
                                                            "type"              => "select",
                                                            "slug"              => "portfolio",
                                                            "multiple"          =>6,
                                                            "taxonomy"          => "portfolio_entries",
                                                            "subtype"           => "cat"
                                                       ),

                                                       array(    
                                                            "name"              => "Single Portfolio Dynamic page on the bottom",
                                                            "desc"              => "",
                                                            "id"                => "portfolio_dynamic_page",
                                                            "type"              => "select",
                                                            "slug"              => "portfolio",
                                                            "subtype"           => 'page' 
                                                       ),
                                                              
                                                                                     
                                                       array(    
                                                            "name"              => "Which page should display the portfolio?",
                                                            "slug"              => "portfolio",
                                                            "desc"              => "Please assign which page you want this portfolio to be on",
                                                            "id"                => "portfolio_page",
                                                            "type"              => "select",
                                                            "subtype"           => "page"
                                                       ),
                                                              
                                                      array(    
                                                            "name"              => "Portfolio Style",
                                                            "slug"              => "portfolio",
                                                            "desc"              => "",
                                                            "id"                => "portfolio_style",
                                                            "type"              => "select",
                                                            "std"               => 'v1',
                                                            "no_first"          => true,
                                                            "subtype"           => array('Simple' => 'v1', 'Without Text and Shadow at the Bottom' => "v2", "Circle Portfolio" => "v2 circle", "Triangle" => "v2 triangle", "Hexagon" => "v2 hexagon")
                                                       ),
                                                   

                                                      array(    
                                                            "name"              => "Portfolio Single Style",
                                                            "slug"              => "portfolio",
                                                            "desc"              => "",
                                                            "id"                => "portfolio_single_style",
                                                            "type"              => "select",
                                                            "std"               => 'bottom',
                                                            "no_first"          => true,
                                                            "subtype"           => array('Left' => 'left', 'Right' => "right", "Bottom" => 'bottom')
                                                       ),
                                                         array(

                                                            "name"              => "Portfolio Head Title",
                                                            "slug"              => "portfolio",
                                                            "desc"              => "",
                                                            "id"                => "portfolio_head",
                                                            "type"              => "switchbutton",
                                                            "std"               => 'yes'

                                                       ),
                                                              
                                                       array(    
                                                            "slug"         => "portfolio",
                                                            "name"         => "Portfolio Columns",
                                                            "desc"         => "How many columns should be displayed?",
                                                            "id"           => "portfolio_columns",
                                                            "type"         => "radioimage",
                                                            "no_first"     =>true,
                                                            "std"          => "3",
                                                            "subtype"      => array( 
                                                                                array('name' => '1 Column', 'value' =>'1', 'img' => '90x62/1column.png'),
                                                                                array('name' => '2 Columns', 'value' =>'2', 'img' => '90x62/2columns/2columns.png'),
                                                                                array('name' => '3 Columns', 'value' =>'3', 'img' => '90x62/3columns/3columns.png'),
                                                                                array('name' => '4 Columns', 'value' =>'4', 'img' => '90x62/4columns.png')
                                                                           )
                                                       ),
       
                                                       array(    
                                                            "slug"         => "portfolio",
                                                            "name"         => "Portfolio Page Layout",
                                                            "desc"         => "Choose the portfolio layout here. This will change the default layout",
                                                            "id"           => "portfolio_layout",
                                                            "type"         => "radioimage",
                                                            "std"          => "fullsize",
                                                            "no_first"     =>true,
                                                            "subtype"           => array( 
                                                                 array('name' => 'Left Sidebar', 'value' =>'sidebar_left', 'img' => '90x62/sidebarleft.png'),
                                                                 array('name' => 'Right Sidebar', 'value' =>'sidebar_right', 'img' => '90x62/sidebarright.png'),
                                                                 array('name' => 'FullWidth', 'value' =>'fullsize', 'img' => '90x62/fullwidth.png')
                                                            )
                                                       )
                                        

     
                    )
               );
            
/* End Portfolio */







/*------------------------------------------------*/
/*------------------------------------------------*/
/*------------------------------------------------*/







// Layout
/*------------------------------------------------*/
/*------------------------------------------------*/
$page_elements[] = array(
                         "slug"              => "layout",
                         "name"              => "Responsive",
                         "desc"              => "If you want the page to be responsive select yes",
                         "id"                => "responsive_layout",
                         "type"              => "switchbutton",
                         "std"               => 'yes'
                         
                         
);  


$page_elements[] = array(
                         "slug"              => "layout",
                         "name"              => "Select the overall pages layout",
                         "desc"              => "",
                         "id"                => "overall_layout",
                         "type"              => "radioimage",
                         "std"               => 'fullwidth',
                         "no_first"          => true,
                         "subtype"           => array( 
                                                  array('name' => 'Fullwidth', 'value' =>'fullwidth', 'img' => '90x62/fullwidth.png'),
                                                  array('name' => 'Boxed', 'value' =>'boxed', 'img' => 'boxed.png')
                                             )
);  

$page_elements[] = array(
                         "slug"              => "layout",
                         "name"              => "Select the sidebar position on the single blog post",
                         "desc"              => "",
                         "id"                => "single_post_sidebar_pos",
                         "type"              => "radioimage",
                         "std"               => "sidebar_right",
                         "subtype"           => array( 
                                                  array('name' => 'Left Sidebar', 'value' =>'sidebar_left', 'img' => '90x62/sidebarleft.png'),
                                                  array('name' => 'Right Sidebar', 'value' =>'sidebar_right', 'img' => '90x62/sidebarright.png')
                                             )
); 



$page_elements[] = array(
                         "slug"              => "layout",
                         "name"              => "Select blog page sidebar position",
                         "desc"              => "",
                         "id"                => "blog_sidebar_position",
                         "type"              => "radioimage",
                         "std"               => "sidebar_right",
                         "subtype"           => array( 
                                                  array('name' => 'Left Sidebar', 'value' =>'sidebar_left', 'img' => '90x62/sidebarleft.png'),
                                                  array('name' => 'Right Sidebar', 'value' =>'sidebar_right', 'img' => '90x62/sidebarright.png'),
                                                  array('name' => 'FullWidth', 'value' =>'fullsize', 'img' => '90x62/fullwidth.png')
                                             )
);

$page_elements[] = array(
                         "slug"              => "layout",
                         "name"              => "Select Blog Style Type",
                         "desc"              => "",
                         "id"                => "blog_style",
                         "type"              => "select",
                         "no_first"          => true,
                         "std"               => "normal",
                         "subtype"           => array( 'Normal (Content At the Bottom of Media)'=>'normal','Large (Content At the Right of Media)' =>'large', 'Large 2 (Content At the Right of Media and Icon inside the media)' =>'large_2' )
);

$page_elements[] = array(
                         "slug"              => "layout",
                         "name"              => "Footer number of columns",
                         "desc"              => "Here you can select how many columns you want to use in the footer. By selecting any number this will automatically add the footer columns in the widgets section, where you can edit your footer",
                         "std"               => 2,
                         "id"                => "footer_number_columns",
                         "type"              => "radioimage",
                         "no_first"          => true,
                         "subtype"           => array( 
                                                  array('name' => '1 Column', 'value' =>1, 'img' => '90x62/1column.png'),
                                                  array('name' => '2 Columns', 'value' =>2, 'img' => '90x62/2columns/2columns.png'),
                                                  array('name' => '3 Columns', 'value' =>3, 'img' => '90x62/3columns/3columns.png'),
                                                  array('name' => '4 Columns', 'value' =>4, 'img' => '90x62/4columns.png')
                                             )
); 


/* End Layout */






/*------------------------------------------------*/
/*------------------------------------------------*/
/*------------------------------------------------*/





/* Sidebars */

$page_elements[] =  array(    
                         "name"              => "Add new widget areas for pages and categories that will show up in sidebar:",
                         "desc"              => "You can create sidebars for any page or category you want. This sidebar can be edit with any widget that you like",
                         "id"                => "widgetdescription",
                         "std"               => "",
                         "slug"              => "sidebar",
                         "type"              => "description_h",
                         "nodescription"     =>true);
               
               
                         
$page_elements[] =  array("slug"    => "sidebar", "type" => "visual_group_start", "id" => "sidebar_left", "nodescription" => true);
$page_elements[] =  array(
                         "type"              => "layout_section", 
                         "id"                => "widget_pages", 
                         "slug"              => "sidebar",
                         "linktext"          => "Add another widget",
                         "deletetext"        => "Remove widget",
                         "blank"             => true, 
                         "nodescription"     => true,
                         'subelements'       => array( 
     
                                                  array(    
                                                       "name"    => "Select a PAGE that you want to have a individual sidebar.",
                                                       "desc"    => "",
                                                       "id"      => "widget_page",
                                                       "type"    => "select",
                                                       "slug"    => "sidebar",
                                                       "subtype" => 'page'),                              
                                                     )   
);
$page_elements[] =  array("slug"    => "sidebar", "type" => "visual_group_end", "nodescription" => true);





$page_elements[] =  array("slug"    => "sidebar", "type" => "visual_group_start", "id" => "sidebar_right", "nodescription" => true);
$page_elements[] =  array(
                         "type"              => "layout_section", 
                         "slug"              => "sidebar",
                         "id"                => "widget_categories", 
                         "linktext"          => "Add another widget",
                         "deletetext"        => "Remove widget",
                         "blank"             => true, 
                         "nodescription"     => true,
                         'subelements'       => array(
                              
                                                  array(    
                                                       "name"    => "Select a CATEGORY that you want to have a individual sidebar.",
                                                       "desc"    => "",
                                                       "id"      => "widget_cat",
                                                       "slug"    => "sidebar",
                                                       "type"    => "select",
                                                       "subtype" => 'cat'),                               
                                                  )   
);
$page_elements[] =  array("slug"    => "sidebar", "type" => "visual_group_end", "nodescription" => true);

/* End Sidebars */










/*------------------------------------------------*/
/*------------------------------------------------*/
/*------------------------------------------------*/







/* Contact */
/*------------------------------------------------*/
/*------------------------------------------------*/
$page_elements[] =  array(    
                         "name"                        => "Description",
                         "desc"                        => "Here you can make your contact form. After you done your contact form will be ready as a shortcode and you can use it anywhere you like.",
                         "id"                          => "contactdesc",
                         "std"                         => "",
                         "slug"                        => "contact",
                         "type"                        => "description_h",
                         "nodescription"               =>true
);            
$page_elements[] =  array(    
                         "name"                        => "Your email adress",
                         "slug"                        => "contact",
                         "desc"                        => "Select or add the email address that you want to use for the contact form",
                         "id"                          => "email",
                         "std"                         => get_option('admin_email'),
                         "type"                        => "input_text"
);

$page_elements[] =  array(    
                         "slug"                        => "contact",
                         "name"                        => "Autoresponder Subject",
                         "desc"                        => "",
                         "id"                          => "autoresponder_subject",
                         "std"                         => "",
                         "type"                        => "input_text"
);                  
$page_elements[] =  array(    
                         "slug"                        => "contact",
                         "name"                        => "Autoresponder",
                         "desc"                        => "Write the message to be sent as an auto responde",
                         "id"                          => "autoresponder",
                         "std"                         => "",
                         "type"                        => "textarea"
);             
          
               
$page_elements[] =  array(    
                         "name"                        => "Add new form elements to your contact form:",
                         "desc"                        => "Here you can add or edit contact form fields.",
                         "id"                          => "contactformdescription",
                         "std"                         => "",
                         "slug"                        => "contact",
                         "type"                        => "description_h",
                         "nodescription"               =>true
);
$page_elements[] =  array(    
                         "slug"                        => "contact",
                         "type"                        => "layout_section", 
                         "id"                          => "contact_elements", 
                         "linktext"                    => "Add another Form Element",
                         "deletetext"                  => "Remove Form Element",
                         "blank"                       => true, 
                         "nodescription"               => true,
                         "std"                         => array(
                                                            array('label'=>'Name', 'type'=>'text', 'check'=>'is_empty'),
                                                            array('label'=>'E-Mail', 'type'=>'text', 'check'=>'is_email'),
                                                            array('label'=>'Subject', 'type'=>'text', 'check'=>'is_empty'),
                                                            array('label'=>'Priority', 'type'=>'select', 'check'=>'', 'options'=>'Low, Medium, High, Urgent as Hell, ASAP DUDE!!!'),
                                                            array('label'=>'Message', 'type'=>'textarea', 'check'=>'is_empty')
                                                       ),
                         'subelements'                 => array( 
                              
                                                            array(    
                                                                 "name"    => "Form Element Label",
                                                                 "slug"    => "contact",
                                                                 "desc"    => "",
                                                                 "id"      => "label",
                                                                 "std"     => "",
                                                                 "type"    => "input_text"
                                                            ),
                                 
                                    
                                                            array( 
                                                                 "slug"    => "contact",
                                                                 "name"    => "Form Element Type",
                                                                 "desc"    => "",
                                                                 "id"      => "type",
                                                                 "type"    => "select",
                                                                 "std"     => "text",
                                                                 "no_first"=>true,
                                                                 "subtype" => array('Text input'=>'text', 'Text Area'=>'textarea', 'Select Element'=>'select')
                                                            ),    
                              
                                                            array(     
                                                                 "slug"    => "contact",
                                                                 "name"    => "Form Element Validation",
                                                                 "desc"    => "",
                                                                 "id"      => "check",
                                                                 "type"    => "select",
                                                                 "std"     => "",
                                                                 "no_first"=>true,
                                                                 "subtype" => array('No Validation'=>'', 'Is not empty'=>'is_empty', 'Valid Mail adress'=>'is_email', 'Valid Phone Number'=>'is_phone', 'Valid Number'=>'is_number')
                                                            ), 
                                                                 
                                                            array(    
                                                                 "name"    => "Form Element Options",
                                                                 "slug"    => "contact",
                                                                 "desc"    => "If you are a make a select options field, please write options divided by commas Op1, Op2, Op3",
                                                                 "id"      => "options",
                                                                 "required" => array('type','select'),
                                                                 "std"     => "",
                                                                 "type"    => "input_text"
                                                            ),   
                         ),              
                                    
);

/* End Contact */
/*------------------------------------------------*/
/*------------------------------------------------*/




?>