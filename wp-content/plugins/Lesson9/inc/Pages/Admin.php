<?php
/**
 * @package  AlecadddPlugin
 */

namespace Inc\Pages;

use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\Callback\AdminCallbacks;

class Admin extends BaseController{

    public $settings;
    public $pages;
    public $subpages;
    public $callbacks;

    public function register(){

        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();

        $this->setPages();

        $this->setSubpages();

        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

    public function setPages(){
        $this->pages = [
            [
            'page_title' => 'Alecaddd Plugin',
            'menu_title'  => 'Alecaddd',
            'capability'  => 'manage_options',
            'menu_slug'  => 'alecaddd_plugin',
            'callback'  => array($this->callbacks, 'adminDashboard'),
            'icon_url'  => 'dashicons-store',
            'position'  => '110'
            ]
        ];
    }

    public function setSubpages(){
        $this->subpages = [
            [
                'parent_slug' => 'alecaddd_plugin',
                'page_title' => 'Custom Post Types',
                'menu_title'  => 'CPT',
                'capability'  => 'manage_options',
                'menu_slug'  => 'alecaddd_cpt',
                'callback'  => function(){echo '<h1> CPT Manager</h1>';},
            ]
        ];
    }
}