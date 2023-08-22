<?php
    /**
     * Plugin Name: Plugin Dev Part 2
     * Description: This is the ultimate WordPress plugin development
     * Plugin URL: http://localhost:8888/webapick/plugin
     * Author: Nymul Isam Moon
     * Author URI: https://nymul-islam-moon.github.io/
     * version: 0.0.1
     * License: GPLv2 or later
     * Licnse URL: https:www.gnu.org/licenses/gpl-2.0.html
     */

//    if (!defined('ABSPATH')) {
//        die;
//    }

    # OR You can use
    defined('ABSPATH') or die('Hay, You can not access the area');

     # Or can use
//    if(!function_exists('add_action')) {
//        echo 'hay you do not have the access to the area!';
//        exit;
//    }

    class alecaddPlugin
    {
        # methods

        /**
         * Constructor for the class
         */
        public function __construct()
        {

        }

        public function method1()
        {

        }

        public function method2()
        {

        }
    }

    if (class_exists('alecaddPlugin')){
        $alecadddPlugin = new alecaddPlugin();
    }

    # Activation

    # Deactivating

    # Uninstall