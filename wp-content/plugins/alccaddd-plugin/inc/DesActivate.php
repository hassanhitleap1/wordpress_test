<?php

/**
 * @package AlccadddPlgin 
 */

namespace Inc;


class DesActivate{


    public static  function desactivate()
    {
        flush_rewrite_rules();
    }
}
?>