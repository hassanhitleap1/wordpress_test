<?php

/**
 *  @package Admin
 */

 namespace  Inc\Pages;

use Inc\Base\BaseController;
use \Inc\Api\ApiSettings;

 class Admin  extends BaseController
 {

   public $settings;
   public $pages;

   /**
    * 
    */
   public function __construct() {
      parent::__construct();
      $this->settings= new ApiSettings();
      $this->pages=[
         [
           'page_title'=>"ALICADDDPLGIN",
            'menu_title'=>"Alicadd", 
            'capability'=>"manage_options",
            'menu_slug'=>"alicaddd_plugin", 
            'callable'=> function(){echo "sss";},
            'icon_url'=>"dashicons-dashboard" , 
            'position'=>110
         ],
         [
            'page_title'=>"ALICADDDPLGIN2",
             'menu_title'=>"Alicadd2", 
             'capability'=>"manage_options",
             'menu_slug'=>"alicaddd_plugin2", 
             'callable'=> function(){echo "sss";},
             'icon_url'=>"dashicons-admin-site" , 
             'position'=>110
          ]
      ];
   }
   

   public function register()
   {

      //add_action( 'admin_menu',[$this,'add_admin_pages']);
     
     $this->settings->addPages($this->pages)->register();
   }


   public function add_admin_pages()
   {
      foreach ($this->pages as $page) {
      add_menu_page( 'ALICADDDPLGIN', 'Alicadd', 'manage_options', 'alicaddd_plugin', [$this,'admin_index'], 'dashicons-image-filter' ,  null );
      }
   }

   public function admin_index()
   {
       require_once $this->plugin_path.'template/admin.php';
   }
 }
 