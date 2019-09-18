<?php

/**
 * @package AlccadddPlgin 
 */
namespace Inc\Base;

use Inc\Base\BaseControllerl;

class Enqueue extends BaseController{


    public  function register()
    {
        add_action( "admin_enqueue_scripts",[$this,'enqueue_admin'] );
        add_action( "wp_enqueue_scripts",[$this,'enqueue_wp'] );
    }


    public  function enqueue_admin(){
        wp_enqueue_script( 'myscript', $this->plugin_url. 'assets/js/myscript.js' );
        wp_enqueue_style( 'mystyle', $this->plugin_url.'assets/css/mystyle.js' ) ;
    }

    public function enqueue_wp(){
        wp_enqueue_script( 'myscript', $this->plugin_url .'assets/js/myscript.js' );
        wp_enqueue_style( 'mystyle', $this->plugin_url. 'assets/css/mystyle.js' );
    }

}
?>