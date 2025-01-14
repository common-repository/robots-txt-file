<?php
/**
Plugin Name: WordPress Robots.txt File
Plugin URI: https://www.usefulblogging.com/wordpress-robots-txt-file
Description: Simply Create or Edit Robots.txt File From Your WordPress Dashboard.
Version: 1.5
Author: Ataul Ghani
Author URI: https://www.usefulblogging.com
Requires at least: 4.5
Tested Up to: 4.8.1
Stable Tag: trunk
License: GPL v2
*/

!defined('ABSPATH') && exit;

define('WP_ROBOTS_TXT_DIR', plugin_dir_path(__FILE__));

require_once WP_ROBOTS_TXT_DIR . 'inc/core.php';
if (is_admin()) {
    require_once WP_ROBOTS_TXT_DIR . 'inc/options-page.php';
    ub_mag_Admin_Page::init();
}

add_filter('robots_txt', 'ub_mag_filter_robots', 10, 2);
register_activation_hook(__FILE__, 'ub_mag_activation');
register_deactivation_hook(__FILE__, 'ub_mag_deactivation');
