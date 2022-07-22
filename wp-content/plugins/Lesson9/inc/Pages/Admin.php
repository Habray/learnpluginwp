<?php
/**
 * @package  AlecadddPlugin
 */

namespace Inc\Pages;

use Inc\Api\SettingsApi;
use Inc\Base\BaseController;

class Admin extends BaseController{

    public $settings;
    public $pages;

    public function __construct()
    {
        $this->settings = new SettingsApi();

        $this->pages = [
            [
            'page_title' => 'Alecaddd Plugin',
            'menu_title'  => 'Alecaddd',
            'capability'  => 'manage_options',
            'menu_slug'  => 'alecaddd_plugin',
            'callback'  => function (){ echo '<h1> Admin Page </h1>';},
            'icon_url'  => 'dashicons-store',
            'position'  => '110'
            ]
        ];
    }

    public function register(){
        $this->settings->addPages($this->pages)->register();
    }

    // public function add_admin_pages() {
    //     add_menu_page( 'Alecaddd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
    // }

    // public function admin_index() {
    //     require_once $this->plugin_path . 'templates/admin.php';
    // }
}