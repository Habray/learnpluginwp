<?php

/**
 * @package  AlecadddPlugin
 */

namespace Inc\Api\Callback;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController{
    
    public function adminDashboard(){
        return require_once wp_sprintf( '%s/templates/Admin.php',$this->plugin_path );
    }
}