<?php

/**
 * @package AlccadddPlgin 
 */
namespace Inc\Base;


class Enqueue{


    public  function register()
    {
        add_action( "admin_enqueue_scripts",[$this,'enqueue_admin'] );
        add_action( "wp_enqueue_scripts",[$this,'enqueue_wp'] );
    }


    public  function enqueue_admin(){
        wp_enqueue_script( 'myscript', PLUGIN_URL. 'assets/js/myscript.js' );
        wp_enqueue_style( 'mystyle', PLUGIN_URL.'assets/css/mystyle.js' ) ;
    }

    public function enqueue_wp(){
        wp_enqueue_script( 'myscript', PLUGIN_URL .'assets/js/myscript.js' );
        wp_enqueue_style( 'mystyle', PLUGIN_URL. 'assets/css/mystyle.js' );
    }

}
?>