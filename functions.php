<?php
define('TM_TEXTDOMAIN', 'project_name');

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

if ( file_exists( dirname( __FILE__ ) . '/twig_init.php' ) ) {
    require_once get_template_directory() . '/twig_init.php';
}

/**
 * Initialize all the core classes of the theme
 */
if ( class_exists( 'App\\Init' ) ) {
	App\Init::register_services();
}