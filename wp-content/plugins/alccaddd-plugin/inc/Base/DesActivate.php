<?php

/**
 * @package AlccadddPlgin 
 */

namespace Inc\Base;


class DesActivate{


    public static  function register()
    {
        flush_rewrite_rules();
    }
}
?>