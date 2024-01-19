<?php
    /**
     * Plugin Name: Alecaddd
     * Description: This is the ultimate WordPress plugin development
     * Plugin URL: http://localhost:8888/webapick/plugin
     * Author: Nymul Isam Moon
     * Author URI: https://nymul-islam-moon.github.io/
     * version: 1.0.0
     * License: GPLv2 or later
     * License URL: https:www.gnu.org/licenses/gpl-2.0.html
     */

    defined('ABSPATH') or die('Hay, You can not access the area');

    class AlecadddPlugin
    {
        /**
         * Constructor for the class
         */
        public function __construct()
        {

        }

        public function activate()
        {
            // generated a CPT
            // flush rewrite rules
        }

        public function deactivate()
        {
            // flush rewrite rules
        }

        public function uninstall() {
            // delete CPT
            // delete all the plugin data from the DB
        }
    }

    if ( class_exists( 'AlecadddPlugin' ) ) {
        $alecadddPlugin = new AlecadddPlugin();
    }

    # Activation
    register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );

    # Deactivating
    register_deactivation_hook( __FILE__, array( $alecadddPlugin, 'deactivate' ) );

    # Uninstall