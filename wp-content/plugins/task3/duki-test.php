<?php 

/*
 *	Plugin Name: Task - 3. Duki Aleksey
 *	Plugin URI: http://test.loc/
 *	Description: Test Plugin WordPress
 *	Version: 1.0
 *	Author: Duki Aleksey
 *	Author URI: http://webinspiration.by
 *	License: GPL2
 *
*/


add_action( 'admin_init', 'duki_test_compare_version' );

/**
 * Call duki_test_compare_version() and deactivate this plugin if there are error.
 *
 * @wp-hook admin_init
 * @return  void
 */
function duki_test_compare_version()
{

	$errors = array ();

	// Change php version here

	$php_min_version = '5.3';

	$php_current_version = phpversion();

	if ( version_compare( $php_min_version, $php_current_version, '>' ) ) {
	    $errors[] = "Your server is running PHP version $php_current_version but this plugin requires at least PHP $php_min_version. Please run an upgrade.";

	    printf(
	    '<div class="error form-invalid"><p>%1$s</p><p>Plugin has been deactivated.</p></div>',
	    join( $errors )
		);

		deactivate_plugins( plugin_basename( __FILE__ ) );
	} 
	

	if ( empty ( $errors ) )
	    return;

	unset( $_GET['activate'] );
}