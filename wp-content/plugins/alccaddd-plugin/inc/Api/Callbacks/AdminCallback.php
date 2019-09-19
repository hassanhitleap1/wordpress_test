<?php

/**
 * @packge
 */
namespace Inc\Api\Callbacks;

use \Inc\Base\BaseController;


 class AdminCallback extends BaseController{

    public function dashboardAdmin(){
        return require_once $this->plugin_path.'template/admin.php';
    }
 }