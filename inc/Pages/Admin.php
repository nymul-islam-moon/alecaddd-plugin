<?php

/**
 * @package AlicadddPlugin
 */

namespace Inc\Pages;

/**
 *
 */
class Admin {

    /**
     * @return void
     */
    public function register() {
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
    }

    /**
     * @return void
     */
    public function add_admin_pages() {
        add_menu_page( 'Alecaddd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
    }

    public function admin_index() {
        require_once PLUGIN_PATH . 'templates/admin.php';
    }

}