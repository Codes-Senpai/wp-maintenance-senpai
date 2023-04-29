<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://amine.senpai.codes/
 * @since             0.0.3
 * @package           Wp_Maintenance_Senpai
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress Maintenance Mode
 * Plugin URI:        https://senpai.codes/wp-maintenance-senpai
 * Description:       Put your website into maintenance mode while you can do administrative tasks.
 * Version:           0.0.3
 * Author:            Amine Safsafi
 * Author URI:        https://amine.senpai.codes//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-maintenance-senpai
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Add Composer Support to the plugin
 */
require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_MAINTENANCE_SENPAI_VERSION', '1.0.0' );
define( 'WP_MAINTENANCE_SENPAI_DIR', plugin_dir_path(__FILE__) );



/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-maintenance-senpai-activator.php
 */
function activate_wp_maintenance_senpai() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-maintenance-senpai-activator.php';
	Wp_Maintenance_Senpai_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-maintenance-senpai-deactivator.php
 */
function deactivate_wp_maintenance_senpai() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-maintenance-senpai-deactivator.php';
	Wp_Maintenance_Senpai_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_maintenance_senpai' );
register_deactivation_hook( __FILE__, 'deactivate_wp_maintenance_senpai' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-maintenance-senpai.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_maintenance_senpai() {

	$plugin = new Wp_Maintenance_Senpai();
	$plugin->run();

}
run_wp_maintenance_senpai();
