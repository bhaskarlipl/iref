<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
#$_SERVER['REQUEST_SCHEME'] = 'https';
#$_SERVER['SCRIPT_URI'] = str_replace('http://','https://',$_SERVER['SCRIPT_URI']);

#var_dump($_SERVER);
if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' );

	wp();

	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
