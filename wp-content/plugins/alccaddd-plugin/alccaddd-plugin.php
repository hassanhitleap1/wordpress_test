<?php


/**
 * Plugin Name:       Aleccad Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * 
 */
defined('ABSPATH') or die('cont access');

if(!defined('ABSPATH')){
    die('cont access'); 
}

class AleccadPlugin{

    function __construct(){
        flush_rewrite_rules();
        add_action( 'init',[$this,'custm_post_type'] );
        
    }

    function active(){
       
        flush_rewrite_rules();
    }
    
    function disactive(){
        flush_rewrite_rules();
    }

    function custm_post_type(){
        register_post_type( 'book', ['public' => 'true'] );
    }
}


if(class_exists('AleccadPlugin')){
    $aleccadd= new AleccadPlugin();
}

register_activation_hook( __FILE__,[$aleccadd,'active']);

register_deactivation_hook( __FILE__,[$aleccadd,'disactive']);