<?php

/**
 * @package AlccadddPlgin 
 */
namespace Inc\Api;


class ApiSettings{

    public $admin_pages=array();

    public $admin_subpages=array();

    public $settings=array();

    public $sections=array();

    public $fileds=array();


    public  function register()
    {
        if(!empty($this->admin_pages)){
            add_action( 'admin_menu',[$this,'addAdminMenu']);
        }
    }



    
    public function addPages(array $pages){
        $this->admin_pages=$pages;
        return $this;
    }

    public function withSubPage(string $title = null){
        if(empty($this->admin_pages)){
            $this;
        }

        $admin_pages=$this->admin_pages[0];
        $subpages=[
            [
               "parent_slug"=>$admin_pages["menu_slug"],
                'page_title'=>$admin_pages["page_title"],
               'menu_title'=>($title)?$title:$admin_pages["menu_title"], 
               'capability'=>$admin_pages["capability"],
               'menu_slug'=>$admin_pages["menu_slug"], 
               'callable'=> function(){echo "sss";},
               
            ],
           
         ];

         $this->admin_subpages=$subpages;
         return $this;
    }

    public function subMenuPages(array $subpages)
    {
       
        $this->admin_subpages=array_merge($this->admin_subpages,$subpages);
      
        return $this;
    }


    public function setSettings(array $settings){
        $this->settings=$settings;
        return $this;
    }


    public function setSsections(array $sections){
        $this->sections=$sections;
        return $this;
    }


    public function setFileds(array $fileds){
        $this->fileds=$fileds;
        return $this;
    }






    public function addAdminMenu(){

        foreach ($this->admin_pages as $page) {

            add_menu_page(
                $page['page_title'],     
                $page['menu_title'], 
                $page['capability'],
                $page['menu_slug'] , 
                $page['callable'] , 
                $page['icon_url'] , 
                $page['position'],
                null
            );

        }


        foreach ($this->admin_subpages as $subpage) {

            add_submenu_page(
                $subpage['parent_slug'],   
                $subpage['page_title'],     
                $subpage['menu_title'], 
                $subpage['capability'],
                $subpage['menu_slug'] , 
                $subpage['callable'] );

        }

    }




    public  function  registerCustumFields(){
        //  register setting

        foreach ($this->settings as $setting) {
            register_setting( $setting["option_group"],$setting["option_name"], isset($setting["callback"])?isset($setting["callback"]):"" ); 
        }

        //  add  setting session
        foreach ($this->sessions as $session) {
          add_settings_section( $session["id"], $session["title"],isset($session["callback"])?isset($session["callback"]):"", $session["page"] );
        } 
        // add setting  field
        foreach ($this->fields as $field) {
            add_settings_field( $field["id"], 
                        $field["title"], isset($field["callback"])?isset($field["callback"]):"",
                         $field["page"],
                        $field["section"],
                        $field["args"], isset($field["args"])?isset($field["args"]):"");

        }                 
    }


}
?>