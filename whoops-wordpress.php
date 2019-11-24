<?php

/**
 * Plugin Name:       Whoops for WordPress
 * Plugin URI:        https://www.nutt.net
 * Description:       Quick plugin that enables the filp/whoops library while developing your plugins and themes.
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ryan Nutt
 * Author URI:        https://www.nutt.net
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       whoops-wordpress
 */
include_once(__DIR__ . '/vendor/autoload.php');

/* Only turn on if we're in debug mode */
if ( defined( 'WP_DEBUG' ) && 'WP_DEBUG' ) {
  $whoops = new \Whoops\Run;
  $whoops->prependHandler( new \Whoops\Handler\PrettyPageHandler );
  $whoops->register();
}