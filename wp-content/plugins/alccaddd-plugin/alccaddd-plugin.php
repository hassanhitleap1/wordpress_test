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
        add_action( 'init', [$this,'codex_custom_init'] );
    }

    function register(){
         add_action( "admin_enqueue_scripts",[$this,'enqueue_admin'] );
         add_action( "wp_enqueue_scripts",[$this,'enqueue_wp'] );
    }
    function active(){
        $this->codex_custom_init();
        flush_rewrite_rules();
    }
    
    function disactive(){
        flush_rewrite_rules();
    }

    function codex_custom_init(){
        
          $args = array(
            'public' => true,
            'label'  => 'Books'
            );
          
        register_post_type( 'book', $args );
    }

    function enqueue_admin(){
        wp_enqueue_script( 'myscript', plugins_url( 'assets/js/myscript.js', __FILE__ ) );
        wp_enqueue_style( 'mystyle', plugins_url( 'assets/css/mystyle.js', __FILE__ ) );
    }

    function enqueue_wp(){
        wp_enqueue_script( 'myscript', plugins_url( 'assets/js/myscript.js', __FILE__ ) );
        wp_enqueue_style( 'mystyle', plugins_url( 'assets/css/mystyle.js', __FILE__ ) );
    }
}




$aleccadd= new AleccadPlugin();
 
$aleccadd->register();

register_activation_hook( __FILE__,[$aleccadd,'active']);

register_deactivation_hook( __FILE__,[$aleccadd,'disactive']);



