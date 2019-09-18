<?php

namespace Inc;



final class Init {

    /**
     * @do utuean classes
     * @param none
     * @return class of servies
     */
    public static function get_servies()
    {
      
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class,
        ];
    }


    /**
     * @do rgesist the servies 
     * @param none
     * @return no return
     */
    public static function  register_servies(){
      
        foreach (Self::get_servies() as $class) {
            $servie= Self::inistince($class);
            if(method_exists($servie,'register')){
                $servie->register();
            }
        }
   
    }

    /**
     * @do inclizese class  
     * @param nam class 
     * @return no initance from class 
     */
    private static function inistince($class){
        $servie = new $class;
        return $servie;
    }
 
}
?>