<?php
/**
 * Plugin Name: WordPress Plugin Sekeleton
 * Plugin URI: https://github.com/dgamboaestrada/wordpress-plugin-skeleton
 * Description: Your Plugin's description
 * Version: 1.0
 * Author: Daniel Gamboa Estrada
 * Author URI: gamboa.xyz
 * License: MIT License
 *
 * @package WordPress
 * @subpackage myplugin
 **/

define( 'MYPLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'MYPLUGIN_URL', plugin_dir_url( __FILE__ ) );


require_once MYPLUGIN_PATH . 'includes/admin/settings-page.php';

if ( ! function_exists( 'myplugin_enqueue_scripts' ) ) {
	/**
	 * Enqueue scripts.
	 **/
	function myplugin_enqueue_scripts() {
		wp_enqueue_style( 'myplugin', MYPLUGIN_URL . '/assets/css/public.css', array(), '1.0' );
		wp_enqueue_script( 'myplugin', MYPLUGIN_URL . '/assets/js/public.js', array( 'jquery' ), '1.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'myplugin_enqueue_scripts', 11 );
}

