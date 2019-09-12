<?php

/**
 * @package AlccadddPlgin 
 */



class AlccadddPlginDesActivate{


    public static  function desactivate()
    {
        flush_rewrite_rules();
    }
}
?>