<?php
/**
 * Plugin Name: WP Hook Inspector
 * Description: A developer tool for inspecting WordPress hooks, callbacks, priorities, and runtime activity.
 * Version: 0.1.0
 * Author: Aishvarya
 * Author URI: https://profiles.wordpress.org/aishvarya28/
 * Text Domain: wp-hook-inspector
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'WPHI_VERSION', '0.1.0' );
define( 'WPHI_PLUGIN_FILE', __FILE__ );
define( 'WPHI_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WPHI_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once WPHI_PLUGIN_DIR . 'includes/class-plugin.php';

$wphi_plugin = new WPHI_Plugin();

register_activation_hook(
    WPHI_PLUGIN_FILE,
    array( $wphi_plugin, 'activate' )
);

register_deactivation_hook(
    WPHI_PLUGIN_FILE,
    array( $wphi_plugin, 'deactivate' )
);

$wphi_plugin->init();