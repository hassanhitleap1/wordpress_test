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


    function enqueue_admin(){
        wp_enqueue_script( 'myscript', plugins_url( 'assets/js/myscript.js' );
        wp_enqueue_style( 'mystyle', plugins_url( 'assets/css/mystyle.js', __FILE__ ) );
    }

    function enqueue_wp(){
        wp_enqueue_script( 'myscript', plugins_url( 'assets/js/myscript.js', __FILE__ ) );
        wp_enqueue_style( 'mystyle', plugins_url( 'assets/css/mystyle.js', __FILE__ ) );
    }

}
?>