<?php

/**
 * PHP functions for the child theme.
 * PHP Version 7.3.5
 *
 * @category Theme_Functions
 * @package  Therese_Child
 * @author   Sam Pohlman <spohlman@diocesan.com>
 * @license  IDK therese.diocesanweb.org
 * @link     https://developer.wordpress.org/themes/basics/theme-functions/
 */

if (!function_exists('diocesan_child_styles')) {
    function diocesan_child_styles()
    {
            wp_enqueue_style("child-styles", get_stylesheet_directory_uri() . "/style.css", array(), "1.0", "screen");
    add_action('wp_enqueue_scripts', 'diocesan_child_styles', 15);
}
}
