<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
#phpinfo();

#$_SERVER['REQUEST_SCHEME'] = 'https';
#$_SERVER['SCRIPT_URI'] = str_replace('http://','https://',$_SERVER['SCRIPT_URI']);
#$_ENV['SCRIPT_URI'] = $_SERVER['SCRIPT_URI'];
#$_ENV['REQUEST_SCHEME'] = 'https';
#apache_setenv('REQUEST_SCHEME','https');
#apache_setenv('SCRIPT_URI',$_SERVER['SCRIPT_URI']);
#var_dump($_SERVER);
#phpinfo();
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
 
