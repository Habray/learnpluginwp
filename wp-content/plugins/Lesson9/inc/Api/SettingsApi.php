<?php
/**
 * @package  AlecadddPlugin
 */

namespace Inc\Api;

class SettingsApi{

    public $admin_pages = array();

    /**
     * we use register() function to register somthing or initialize a class or trigger the class
     * And use __construct() to only update variables and define some unique specification of the class
     */
    public function register(){
        
        if (! empty($this->admin_pages)){
            add_action('admin_menu', array($this, 'addAdminMenu'));
        }
    }
    /**
     * Dynamically generate page
     * @function accept array
     * store to our own array variable
     * @return our own array
     */ 
    public function addPages(array $pages){
        $this->admin_pages = $pages;

        // for method chaning 
        return $this;
    }

    /**
     * here we loop though all the pages that we pass through our AddPages() and trigger the default the add menu page
     */
    public function addAdminMenu(){
        foreach($this->admin_pages as $page){
            add_menu_page($page['page_title'], $page['menu_title'], $page['capability'], $page['menu_slug'], $page['callback'], $page['icon_url'], $page['position']);
        }
    }
}