<?php

// Load HTML5 Blank scripts (header.php)
function shipwright_header_scripts() {
    if ( $GLOBALS['pagenow'] != 'wp-login.php' && ! is_admin() ) {
        if ( HTML5_DEBUG ) {
            // jQuery
            //wp_deregister_script( 'jquery' );
            //wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/lib/jquery.js', array(), '1.11.1' );

            // Conditionizr
            wp_register_script( 'conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0' );

            // Modernizr
            wp_register_script( 'modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr.js', array(), null );

        // If production
        } else {
            // Scripts minify
            wp_register_script( 'shipwrightscripts-min', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '1.0.0' );
            // Enqueue Scripts
            wp_enqueue_script( 'shipwrightscripts-min' );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'shipwright_header_scripts' ); // Add Custom Scripts to wp_head

// Load HTML5 Blank conditional scripts
function shipwright_conditional_scripts() {
    if ( is_page( 'pagenamehere' ) ) {
        // Conditional script(s)
        wp_register_script( 'scriptname', get_template_directory_uri() . '/assets/js/scriptname.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'scriptname' );
    }
}
add_action( 'wp_print_scripts', 'shipwright_conditional_scripts' ); // Add Conditional Page Scripts

// Load HTML5 Blank styles
function shipwright_styles() {
    if ( HTML5_DEBUG ) {
        // Register CSS
        wp_enqueue_style( 'shipwright' );
    } else {
        // Custom CSS
        wp_register_style( 'shipwrightcssmin', get_template_directory_uri() . '/style.css', array(), '1.0' );
        // Register CSS
        wp_enqueue_style( 'shipwrightcssmin' );
    }
    // MAIN CSS
    wp_register_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), null );
    // REGISTER MAIN CSS
    wp_enqueue_style( 'main' );
    
    // GOOGLE FONTS
    wp_register_style( 'googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans', array(), null );
    // Register CSS
    wp_enqueue_style( 'googlefont' );
	
	// Custom scripts
    wp_register_script('shipwrightscripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true );
	// Enqueue Scripts
	wp_enqueue_script( 'shipwrightscripts' );
    
    // FONT AWESOME CSS
    wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', array(), null );
    wp_enqueue_style( 'fontawesome' );
}
add_action( 'wp_enqueue_scripts', 'shipwright_styles' ); // Add Theme Stylesheet