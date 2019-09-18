<?php

/**
 * @package AlccadddPlgin 
 */

namespace Inc\Base;


class DesActivate{


    public static  function deactivate()
    {
        flush_rewrite_rules();
    }
}
?>