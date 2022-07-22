<?php
/**
 * @package  AlecadddPlugin
 */

namespace Inc\Api;

class SettingsApi{

    public $admin_pages = array();

    public $admin_subpages = array();

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

        // for method chaining 
        return $this;
    }

    public function withSubPage(string $title =null){
        if(empty($this->admin_pages)){
            return $this;
        }

        $admin_page = $this->admin_pages[0];

        $subpage = [
            [
                'parent_slug' => $admin_page['menu_slug'],
                'page_title' => $admin_page['page_title'],
                'menu_title'  => ($title) ? $title : $admin_page['menu_title'],
                'capability'  => $admin_page['capability'],
                'menu_slug'  => $admin_page['menu_slug'],
                'callback'  => $admin_page['callback'],
            ]
        ];

        $this->admin_subpages = $subpage;

        return $this;
    }

    // Dynamically generate subPage
    public function addSubPages(array $subpage){
        $this->admin_subpages = array_merge($this->admin_subpages ,$subpage);

        // for method chaining
        return $this;
    }

    /**
     * here we loop though all the pages that we pass through our AddPages() and trigger the default the add menu page
     */
    public function addAdminMenu(){

        // for admin menu page
        foreach($this->admin_pages as $page){
            add_menu_page($page['page_title'], $page['menu_title'], $page['capability'], $page['menu_slug'], $page['callback'], $page['icon_url'], $page['position']);
        }

        // for admin sub menu page
        foreach($this->admin_subpages as $page){
            add_submenu_page($page['parent_slug'], $page['page_title'], $page['menu_title'], $page['capability'], $page['menu_slug'], $page['callback']);
        }
    }
}