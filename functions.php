<?php 


    function responsive_scripts_basic()
    {  
        //register scripts for our theme  
        wp_register_script('foundation-mod', get_template_directory_uri() . '/js/modernizr.js', array(  ), '1.0', false );  
        wp_register_script('foundation-main', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '5.0.2', true );  
        //wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', true );
        wp_register_script('foundation_init_js', get_template_directory_uri() . '/js/foundation_init.js', array('foundation-main'), '1.0', true);
        
        wp_enqueue_script( 'foundation-mod' );  
        wp_enqueue_script( 'foundation-main' );   
        wp_enqueue_script( 'foundation_init_js');
    }  
    add_action( 'wp_enqueue_scripts', 'responsive_scripts_basic', 0 );  

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
?>