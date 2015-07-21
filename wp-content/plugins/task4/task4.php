<?php 

/*
 *	Plugin Name: Task - 4. Duki Aleksey
 *	Plugin URI: http://test.loc/
 *	Description: Test Plugin WordPress. Task 4.
 *	Version: 1.0
 *	Author: Duki Aleksey
 *	Author URI: http://webinspiration.by
 *	License: GPL2
 *
*/


if(!class_exists('WP_Plugin_Template'))
{
	class WP_Plugin_Template
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{

			// Register custom post types
			require_once(sprintf("%s/my_cpt.class.php", dirname(__FILE__)));

			$My_Custom_Post_Type = new My_Custom_Post_Type();

			$plugin = plugin_basename(__FILE__);

			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));

		}

		/**
		 * Activate the plugin
		 */
		public static function activate()
		{	} 

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{ } 


		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=wp_plugin_template">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}


	} // END class WP_Plugin_Template
} // END if(!class_exists('WP_Plugin_Template'))


if(class_exists('WP_Plugin_Template'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('WP_Plugin_Template', 'activate'));
	register_deactivation_hook(__FILE__, array('WP_Plugin_Template', 'deactivate'));

	$wp_plugin_template = new WP_Plugin_Template();
}

if(class_exists('My_Base_Custom_Post_Type'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('My_Base_Custom_Post_Type', 'activate'));
    register_deactivation_hook(__FILE__, array('My_Base_Custom_Post_Type', 'deactivate'));
}
