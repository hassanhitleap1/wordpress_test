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

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once  dirname(__FILE__).'/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\DesActivate;




if(class_exists('Inc\\Init')){
    Inc\Init::register_servies();
}



function active_alccaddd_plugin()
{
    \Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__,'active_alccaddd_plugin');


function deactive_alccaddd_plugin()
{
    \Inc\Base\DesActivate::deactivate(); 
}
register_deactivation_hook( __FILE__,'deactive_alccaddd_plugin');




