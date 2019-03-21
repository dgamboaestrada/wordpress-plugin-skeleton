<?php
/**
 * Add settings page in dashboard
 * Author:       Daniel Gamboa Estrada
 * Author URI:   gamboa.xyz
 * Version:      1.0.0
 *
 * @package WordPress
 **/

if ( ! function_exists( 'myplugin_create_menu' ) ) {
	/**
	 * Add menu item in dashboard.
	 **/
	function myplugin_create_menu() {
		add_menu_page( 'My Plugin Settings', 'My Plugin Settings', 'administrator', __FILE__, 'myplugin_settings_page' );
		add_action( 'admin_init', 'register_myplugin_settings' );
	}
	add_action( 'admin_menu', 'myplugin_create_menu' );
}

if ( ! function_exists( 'register_myplugin_settings' ) ) {
	/**
	 * Registrer settings page.
	 **/
	function register_myplugin_settings() {
		// register our settings.
		register_setting( 'my-cool-plugin-settings-group', 'new_option_name' );
		register_setting( 'my-cool-plugin-settings-group', 'some_other_option' );
		register_setting( 'my-cool-plugin-settings-group', 'option_etc' );
	}
}

if ( ! function_exists( 'myplugin_enqueue_admin_scripts' ) ) {
	/**
	 * Enqueue admin scripts.
	 **/
	function myplugin_enqueue_admin_scripts() {
		wp_enqueue_style( 'myplugin', MYPLUGIN_URL . '/assets/css/admin.css', array(), '1.0' );
		wp_enqueue_script( 'myplugin', MYPLUGIN_URL . '/assets/js/admin.js', array( 'jquery' ), '1.0', true );

	}
	add_action( 'admin_enqueue_scripts', 'myplugin_enqueue_admin_scripts' );
}

if ( ! function_exists( 'myplugin_settings_page' ) ) {
	/**
	 * Print plugin page.
	 **/
	function myplugin_settings_page() {
		?>
			<div class='wrap'>
				<h1>My custom plugin's page</h2>
			</div>
		<?php
	}
}
