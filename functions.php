<?php

namespace Espressoole;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Espressoole
{
    public static $instance = null;
    private $theme_pages;
    private $theme_menus;

    public \Espressoole\Setup $setup;
    public \Espressoole\TemplateHandler $template_handler;
    public \Espressoole\Contact $contact;

    public function __construct()
    {
        $this->set_constants();
        $this->init();
        
        $this->theme_pages = new \Espressoole\ThemePages();
        $this->theme_menus = new \Espressoole\ThemeMenus();
        add_action('after_setup_theme', [$this, 'load_theme_textdomain']);
        add_action('init', [$this->theme_menus, 'register_menus']);
        // add_action('after_setup_theme', [$this, 'register_options']);
        add_action('after_switch_theme', [$this, 'theme_activation']);

        add_action('switch_theme', [$this, 'theme_deactivation']);

        // Initialize the theme
    }

    public function theme_deactivation()
    {
        delete_option('maintainance_mode');
        // remove menus and pages
        $this->theme_menus->remove_menus();
        $this->theme_pages->remove_theme_pages();
    }

       public function theme_activation()
    {
        $this->theme_menus->register_menus();
        $this->theme_pages->create_theme_pages();
        $this->theme_menus->create_default_menus();
    }

    /**
     * Load theme text domain for translations
     * Încarcă fișierele de traducere pentru temă din directorul /languages
     */
    public function load_theme_textdomain()
    {
        load_theme_textdomain('espressoole', get_template_directory() . '/languages');
    }


    private function init()
    {
        require_once get_theme_file_path('/includes/classes/setup.php');
        require_once get_theme_file_path('/includes/classes/theme-pages.class.php');
        require_once get_theme_file_path('/includes/classes/theme-menus.class.php');
        require_once get_theme_file_path('/includes/classes/template-handler.class.php');
        require_once get_theme_file_path('/includes/classes/contact.class.php');

        $this->setup = new \Espressoole\Setup();
        $this->template_handler = new \Espressoole\TemplateHandler();
        $this->contact = new \Espressoole\Contact();
    }

    private function set_constants()
    {
        if (!defined('ESPRESSOOLE_PATH')) {
            define('ESPRESSOOLE_PATH', get_template_directory());
        }

        if (!defined('ESPRESSOOLE_URL')) {
            define('ESPRESSOOLE_URL', get_template_directory_uri());
        }
    }
}

$GLOBALS['espressoole'] = new Espressoole();
