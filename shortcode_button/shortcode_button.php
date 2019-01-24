<?php
/*
Plugin Name:  shortcode_button
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Basic WordPress Plugin Header Comment
Version:      1
Author:       pawel
Author URI:   https://google.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/



// Exit if accessed directly.
if( !defined( 'ABSPATH' ) ) exit;

function make_my_button(){
    return "<a href='http://www.google.nl/'' class='button'>Hallo</a>";
}
add_shortcode('my_button', 'make_my_button');

wp_enqueue_style( $handle, $src = 'style.css', $deps = array(), $ver = false, $media = 'all' );