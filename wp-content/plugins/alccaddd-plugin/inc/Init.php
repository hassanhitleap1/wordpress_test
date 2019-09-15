<?php

namespace Inc;

final class Init {

    public function get_servies()
    {
        return [
            Inc\Pages\Admin::class,
        ];
    }


    public static function  register_servies(){
        foreach (Self::get_servies() as $class) {
            $servie= Self::inistince($class);
            if(method_exists($servie,'register')){
                $servie->register();
            }
        }
   
    }


    private static function inistince($class){
        $servie = new $class;
        return $servie;
    }
 
}
?>