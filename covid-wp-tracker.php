<?php

/**
 * Plugin Name:       Covid WP Tracker
 * Description:       This plugin use an api to display Covid-19 data in whole world and Sudan through a shortcode [covid] in WP Widget or Page or Post.
 * Version:           1.0
 * Author:            Haliem
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       covid-wp-tracker
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Currently plugin version.
 * Start at version 1.0 and use SemVer - https://semver.org
 * Rename this and update it as we release new versions.
 */
define( 'COVID_WP_TRACKER_DATA_VERSION', '1.0' );
// Require data file//
require plugin_dir_path( __FILE__ ) . 'inc/class-data.php';

function run_covid_wp_tracker_data() {
	$plugin = new Covid_Wp_Tracker_data();
	$plugin->run();
}
run_covid_wp_tracker_data();
