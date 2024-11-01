<?php

/**
 * @link              https://profiles.wordpress.org/palmoduledev
 * @since             1.0.0
 * @package           Woo_Braintree
 *
 * @wordpress-plugin
 * Plugin Name:       Braintree Payment For WooCoomerce
 * Plugin URI:        https://profiles.wordpress.org/palmoduledev#content-plugins
 * Description:       Braintree Payment integrates your Braintree merchant account with your WooCoomerce site all while keeping you SAQ A compliant.
 * Version:           1.0.1
 * Author:            palmoduledev
 * Author URI:        https://profiles.wordpress.org/palmoduledev
 * License:           GNU General Public License v3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       woo-braintree
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('WOO_BRAINTREE_VERSION', '1.0.1');
if (!defined('WOO_BRAINTREE_PLUGIN_DIR')) {
    define('WOO_BRAINTREE_PLUGIN_DIR', untrailingslashit(dirname(__FILE__)));
}
if (!defined('WOO_BRAINTREE_ASSET_URL')) {
    define('WOO_BRAINTREE_ASSET_URL', untrailingslashit(plugin_dir_url(__FILE__)));
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-braintree-activator.php
 */
function activate_woo_braintree() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-woo-braintree-activator.php';
    Woo_Braintree_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-braintree-deactivator.php
 */
function deactivate_woo_braintree() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-woo-braintree-deactivator.php';
    Woo_Braintree_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_woo_braintree');
register_deactivation_hook(__FILE__, 'deactivate_woo_braintree');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-woo-braintree.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woo_braintree() {

    $plugin = new Woo_Braintree();
    $plugin->run();
}

run_woo_braintree();
