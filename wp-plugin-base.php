<?php
/**
 * Plugin Name: WP Plugin Base
 * Plugin URI: https://zpirit.no
 * Description: A simple Wordpress plugin
 * Author: Zpirit Reklamebyrå
 * Author URI: https://zpirit.no/kontakt/
 * Version: 0.1
 * Text Domain: acf
 * Domain Path: /lang
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * The plugin class with actions and filters
 */
class ZP_wp_plugin_base {
	private $wpdb, $var1, $var2;

	public function __construct() {
		/* Use init function */
	}

	public function init() {
		// global $wpdb;
		// $this->wpdb = $wpdb;
		
		// set text domain
		load_textdomain( 'wp-plugin-base', 'lang/' );

		// Actions and filters
		add_action( 'init', array( $this, 'plugin_action') );
	}

	// Plugin action
	private function plugin_action() {
		// hardcore workout
	}
}

/**
 * Initiate the class in proper wp ways
 * @return obj The class instance
 */
function zp_plugin_base() {

	global $zp_plugin_base;
	
	if( !isset($zp_plugin_base) ) {
	
		$zp_plugin_base = new zp_plugin_base();
		
		$zp_plugin_base->init();
		
	}
	
	return $zp_plugin_base;
	
}

// initialize
zp_plugin_base();
