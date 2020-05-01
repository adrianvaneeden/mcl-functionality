<?php
/**
 * MindCraft MCL Functionality Plugin
 *
 * This plugin is supposed to contain all functional features, plelacing all the other spaghetti
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           mcl_functionality
 *
 * @wordpress-plugin
 * Plugin Name:       MindCraft Functionality Plugin
 * Plugin URI:        https:// www.mindcraftlearning.com
 * Description:       This plugin is supposed to contain all functional features, plelacing all the other spaghetti
 * Version:           1.0.0
 * Author:            MindCraft Learning (Adrian van Eeden)
 * Author URI:        https://www.mindcraftlearning.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mcl_functionality
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MCL_FUNCTIONALITY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mcl-functionality-activator.php
 */
function activate_mcl_functionality() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mcl-functionality-activator.php';
	mcl_functionality_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mcl-functionality-deactivator.php
 */
function deactivate_mcl_functionality() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mcl-functionality-deactivator.php';
	mcl_functionality_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mcl_functionality' );
register_deactivation_hook( __FILE__, 'deactivate_mcl_functionality' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
*/
require plugin_dir_path( __FILE__ ) . 'includes/class-mcl-functionality.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mcl_functionality() {

	$plugin = new mcl_functionality();
	$plugin->run();

}
run_mcl_functionality();
