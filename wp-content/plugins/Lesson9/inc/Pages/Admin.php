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
    public $subpages;

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

    public function register(){
        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }
}