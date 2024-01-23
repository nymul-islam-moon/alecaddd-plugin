<?php
/**
 * Alecaddd
 *
 * @package           AlecadddPlugin
 * @author            Nymul Islam
 * @copyright         ©2024 Nymul Islam
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Alecaddd
 * Plugin URI:        https://github.com/nymul-islam-moon/alecaddd-plugin
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Your Name
 * Author URI:        https://nymul-islam-moon.github.io/
 * Text Domain:       alecaddd
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */


/*
{Alecaddd} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Alecaddd} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Alecaddd}. If not, see {URI to Plugin License}.
*/


    defined('ABSPATH') or die('Hay, You can not access the area');

    if ( file_exists( dirname( __FILE__ ) . 'vendor/autoload.php' ) ) {
        require_once dirname( __FILE__ ) . 'vendor/autoload.php';
    }

    define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

    if ( class_exists( 'Inc\\Init' ) ) {
        Inc\Init::register_services();
    }