<?php

/**
 * @package AlecadddPlugin
 */

namespace Inc;

final class Init {

    /**
     * Store all the classes inside an array
     *
     * @return string[] full list of classes
     */
    public static function get_services() {
        return [
            Pages\Admin::class
        ];
    }

    /**
     * Loop through the classes, initialize them,
     * and call the register() method if it exits
     *
     * @return void
     */
    public static function register_services() {
        foreach ( self::get_services() as $key => $class ) {
            $service = self::instentiate( $class );
            if ( method_exists( $service, 'register' ) ) {
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     *
     * @param class $class      | class from the services array
     * @return class instance   | new instance of the class
     */
    private static function instantiate( $class ) {
        $service = new $class;

        return $service;
    }

}

//
//use Inc\Activate;
//use Inc\Deactivate;
//
//if ( ! class_exists( 'AlecadddPlugin' ) ) {
//class AlecadddPlugin
//{
//public $plugin;
//
//public function __construct() {
//$this->plugin = plugin_basename( __FILE__ );
//}
//
//public function register() {
////                add_action( 'admin_enqueue_scripts', array( $this, 'enqueue') );
////
////                add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
////
////                add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
//
//}
////
////            public function settings_link( $links ) {
////                $settings_link = '<a href="admin.php?page=alecaddd_plugin">Settings</a>'
////            }
////
//////            public function admin_index() {
//////
//////            }
////
////            protected function create_post_type() {
////                add_action( 'init', array( $this, 'custom_post_type') );
////            }
////
////            function custom_post_type() {
////                register_post_type( 'book', [ 'public' => true , 'label' => 'Books' ] );
////            }
////
////            public function enqueue() {
////                // enqueue all our script
////                wp_enqueue_style( 'mypluginstyle', plugin_url( '/assets/mystyle.css', __FILE__ ) );
////
////                wp_enqueue_script( 'mypluginscript', plugin_url( '/assets/myscript.js', __FILE__ ) );
////            }
////
////            public function deactivate() {
////                // flush rewrite rules
////                flush_rewrite_rules();
////            }
//
//public function activate()
//{
//Activate::activate();
//}
//}
//
//$alecadddPlugin = new AlecadddPlugin();
//$alecadddPlugin->register();
//
//
//# Activate
//register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );
//
//# Deactivating
//register_deactivation_hook( __FILE__, array( $alecadddPlugin, 'deactivate' ) );
//
//}