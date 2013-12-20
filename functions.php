<?php 

    function responsive_scripts_basic()  
    {  
    	//wp_deregister_script('jquery');

        //register scripts for our theme  
        wp_register_script('foundation-mod', get_template_directory_uri() . '/js/modernizr.js', array( ), false );  
        wp_register_script('foundation-main', get_template_directory_uri() . '/js/foundation/foundation.js', array( 'jquery' ), true );  
        //wp_register_script('foundation-app', get_template_directory_uri() . '/js/app.js', true );  
        //wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', true );
        wp_register_script('foundation_init_js', get_template_directory_uri() . '/js/foundation_init.js', array('foundation-main'), true);
        //wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'foundation-mod' );  
        wp_enqueue_script( 'foundation-main' );  
        //wp_enqueue_script( 'foundation-app' );  
        wp_enqueue_script( 'foundation_init_js');
    }  
    add_action( 'wp_enqueue_scripts', 'responsive_scripts_basic', 5 );  

/*
function wprationale_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wprationale_scripts_with_jquery' );
*/
/*
function responsive_scripts_basic()  
{  
    //register scripts for our theme  
    wp_register_script('foundation-mod', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), true );  
    wp_register_script('foundation-main', get_template_directory_uri() . '/js/foundation.min.js', true );  
    //wp_register_script('foundation-app', get_template_directory_uri() . '/js/app.js', true );  
    wp_enqueue_script( 'foundation-mod' );  
    wp_enqueue_script( 'foundation-main' );  
    //wp_enqueue_script( 'foundation-app' );  
}  
add_action( 'wp_enqueue_scripts', 'responsive_scripts_basic', 5 );  

function wprationale_scripts()
{
    wp_deregister_script('jquery');

    wp_register_script('foundation-mod',  get_template_directory_uri() . '/js/modernizer.js', true );  
    wp_register_script('foundation-main', get_template_directory_uri() . '/js/foundation.min.js', true );  
    //wp_register_script('zepto', get_template_directory_uri() . '/javascripts/vendor/zepto.js', true );
    //wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', true );

    wp_enqueue_script( 'foundation-mod' ); 
    //wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'foundation-main' );  
    //wp_enqueue_script( 'zepto');
}  
add_action( 'wp_enqueue_scripts', 'wprationale_scripts' );  

*/
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>