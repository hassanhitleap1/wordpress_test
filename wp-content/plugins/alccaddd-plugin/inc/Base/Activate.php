<?php

/**
 * @package AlccadddPlgin 
 */
namespace Inc\Base;


class Activate{


    public static  function register()
    {
        self::codex_custom_init();
        flush_rewrite_rules();
    }

    public static function codex_custom_init()
    {
        
        $args = array(
          'public' => true,
          'label'  => 'Books'
          );
        
      register_post_type( 'book', $args );
  }

}
?>