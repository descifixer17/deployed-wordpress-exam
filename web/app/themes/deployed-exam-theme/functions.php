<?php  

	function child_theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-styles', get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'child-styles',  get_stylesheet_directory_uri() . '/style.css', array( 'parent-styles' ) );
	}
	add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );
	
    // Remove jquery migrate on console
    add_action( 'wp_default_scripts', function( $scripts ) {
        if ( ! empty( $scripts->registered['jquery'] ) ) {
            $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
        }
    });

    function change_logo_class( $html ) {
    
      //   $html = str_replace( 'custom-logo', 'your-custom-class', $html );
        $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
    
        return $html;
    }
    add_filter( 'get_custom_logo', 'change_logo_class' );

    add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
    function clear_nav_menu_item_id($id, $item, $args) {
        return "";
    }

    add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
    function clear_nav_menu_item_class($classes, $item, $args) {
        return array();
    }

    function add_additional_class_on_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3);