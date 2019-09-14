<?php

/**
 * @package AlccadddPlgin 
 */
namespace Inc;


class Activate{


    public static  function activate()
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