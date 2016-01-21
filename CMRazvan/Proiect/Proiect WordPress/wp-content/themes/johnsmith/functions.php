<?php
/**
 * Created by PhpStorm.
 * User: imola
 * Date: 1/15/16
 * Time: 12:56 PM
 */

include get_template_directory() . '/classes/Home.php';


add_theme_support( 'post-thumbnails' );

register_nav_menu( 'Main menu', 'Main menu');

function include_scripts() {
    //wp_enqueue_style('print', get_template_directory_uri() . '/css/print.css');
    wp_enqueue_style('purple', get_template_directory_uri() . '/css/purple.css');
    wp_enqueue_style('colorboxcss', get_template_directory_uri() . '/css/colorbox.css');
    wp_enqueue_script('js', get_template_directory_uri() . '/js/jquery-2.1.4.min.js');
    wp_enqueue_script('tipsy', get_template_directory_uri() . '/js/jquery.tipsy.js');
    wp_enqueue_script('cufon', get_template_directory_uri() . '/js/cufon.yui.js');
    wp_enqueue_script('scrollto', get_template_directory_uri() . '/js/scrollTo.js');
    wp_enqueue_script('myriad', get_template_directory_uri() . '/js/myriad.js');
    wp_enqueue_script('colorbox', get_template_directory_uri() . '/js/jquery.colorbox.js');
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js');


}

add_action( 'wp_enqueue_scripts', 'include_scripts' );

?>