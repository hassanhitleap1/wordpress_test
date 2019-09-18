<?php

/**
 *  @package Admin
 */

 namespace  Inc\Pages;

use Inc\Base\BaseController;
use \Inc\Api\ApiSettings;

 class Admin  extends BaseController
 {
    public function register()
    {
      add_action( 'admin_menu',[$this,'add_admin_pages']); 
    }


   public function add_admin_pages()
   {
      add_menu_page( 'ALICADDDPLGIN', 'Alicadd', 'manage_options', 'alicaddd_plugin', [$this,'admin_index'], 'dashicons-image-filter' ,  null );
   }

   public function admin_index()
   {
      require_once $this->plugin_path.'template/admin.php';
   }
 }
 