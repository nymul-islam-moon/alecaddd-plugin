<?php
    /**
     * Plugin Name: Alecaddd
     * Description: This is the ultimate WordPress plugin development
     * Plugin URL: https://github.com/nymul-islam-moon/alecaddd-plugin
     * Author: Nymul Isam Moon
     * Author URI: https://nymul-islam-moon.github.io/
     * version: 1.0.0
     * License: GPLv2 or later
     * License URL: https:www.gnu.org/licenses/gpl-2.0.html
     */

    defined('ABSPATH') or die('Hay, You can not access the area');

    if ( file_exists( dirname( __FILE__ ) . 'vendor/autoload.php' ) ) {
        require_once dirname( __FILE__ ) . 'vendor/autoload.php';
    }

    define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

    if ( class_exists( 'Inc\\Init' ) ) {
        Inc\Init::register_services();
    }