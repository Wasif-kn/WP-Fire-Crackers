<?php
/*
Version: 1.0
Author: Wasif Khan
*/

/**
 * Plugin Name: Firecracker Display
 * Plugin URI: https://github.com/Wasif-kn/WP-Fire-Crackers
 * Description: Display firecrackers on the entire site after activation.
 * Version: 1.0.0
 * Author: Wasif Khan
 * Author URI: https://github.com/Wasif-kn
 * License: GPL-2.0+
 * Domain Path: /languages
 */

// Enqueue necessary scripts and styles
function firecracker_enqueue_scripts()
{
    wp_enqueue_script('firecracker-script', plugin_dir_url(__FILE__) . 'firecracker.js', array('jquery'), '1.0', true);
    // wp_enqueue_style('firecracker-style', plugin_dir_url(__FILE__) . 'firecracker-style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'firecracker_enqueue_scripts');

// Display firecrackers
function display_firecrackers()
{
    ?>

    <body background="https://wallpaperscraft.com/image/mountains_night_sky_road_bends_darkness_63269_1920x1080.jpg">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
}
add_action('wp_footer', 'display_firecrackers');