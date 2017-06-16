<?php
/**
 * Plugin Name: f(x) Fix Update Lock
 * Plugin URI: http://genbumedia.com/plugins/
 * Description: Sometimes, WP Core update failed, and show this message "Another update is currently in progress." where it actually failed. Use this plugin at your own risk.
 * Version: 1.0.0
 * Author: David Chandra Purnama
 * Author URI: http://shellcreeper.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @author David Chandra Purnama <david@genbumedia.com>
 * @copyright Copyright (c) 2017, Genbu Media
**/
if ( ! defined( 'WPINC' ) ) {
	die;
}

// On plugin activation.
register_activation_hook( __FILE__, function() {

	// Remove core update lock.
	delete_option( 'core_updater.lock' );

} );

