<?php

/**
 * @package AlccadddPlgin 
 */

namespace Inc\Base;


class DesActivate{


    public static  function desactivate()
    {
        flush_rewrite_rules();
    }
}
?>