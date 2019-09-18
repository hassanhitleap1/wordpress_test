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

define('PLUGIN_PATH',plugin_dir_path( __FILE__ ));
define('PLUGIN_URL',plugin_dir_url( __FILE__ ));
define('PLUGIN',plugin_basename(__FILE__));


if(class_exists('Inc\\Init')){
    Inc\Init::register_servies();
}



function active_alccaddd_plugin()
{
    Activate::activate();
}

function deactive_alccaddd_plugin()
{
    DesActivate::deactivate(); 
}

register_activation_hook( __FILE__,'active_alccaddd_plugin');

register_deactivation_hook( __FILE__,'deactive_alccaddd_plugin');





// use Inc\Activate;
// use Inc\DesActivate;



// class AleccadPlugin{

//     public $plugin;
//     function __construct(){
//         // add_action( 'init', [$this,'codex_custom_init'] );
//         $this->plugin=plugin_basename(__FILE__);
       
//     }

//     function register(){
        
//          add_action( "admin_enqueue_scripts",[$this,'enqueue_admin'] );
//          add_action( "wp_enqueue_scripts",[$this,'enqueue_wp'] );
//          add_action( 'admin_menu',[$this,'add_admin_pages']);

//          add_filter( "plugin_action_links_". $this->plugin, [$this, 'settings_link']);
//     }

//     public function settings_link($links){
//         $settings_link= '<a href="admin.php?page=alicaddd_plugin">setteing</a>';
//         array_push($links,$settings_link);
//         return $links;
//     }
 
//     public function add_admin_pages()
//     {
//         add_menu_page( 'ALICADDDPLGIN', 'Alicadd', 'manage_options', 'alicaddd_plugin', [$this,'admin_index'], 'dashicons-image-filter' ,  null );

//     }

//     public function admin_index(){
   
//         require_once plugin_dir_path( __FILE__ ).'template/admin.php';

//     }
//     function active(){
        
//         AlccadddPlginActivate::activate();
//         // $this->codex_custom_init();
//         // flush_rewrite_rules();
//     }
    
//     function disactive(){
       
//         AlccadddPlginDesActivate::desactivate();
//         // flush_rewrite_rules();
//     }

//     function codex_custom_init(){
        
//           $args = array(
//             'public' => true,
//             'label'  => 'Books'
//             );
          
//         register_post_type( 'book', $args );
//     }

//     function enqueue_admin(){
//         wp_enqueue_script( 'myscript', plugins_url( 'assets/js/myscript.js', __FILE__ ) );
//         wp_enqueue_style( 'mystyle', plugins_url( 'assets/css/mystyle.js', __FILE__ ) );
//     }

//     function enqueue_wp(){
//         wp_enqueue_script( 'myscript', plugins_url( 'assets/js/myscript.js', __FILE__ ) );
//         wp_enqueue_style( 'mystyle', plugins_url( 'assets/css/mystyle.js', __FILE__ ) );
//     }
// }




// $aleccadd= new AleccadPlugin();
 
//  $aleccadd->register();

// register_activation_hook( __FILE__,[$aleccadd,'active']);

// register_deactivation_hook( __FILE__,[$aleccadd,'disactive']);



