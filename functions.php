<?php

namespace Espressoole;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Espressoole
{
    public static $instance = null;

    public \Espressoole\Setup $setup;
    public \Espressoole\TemplateHandler $template_handler;
    

    public function __construct()
    {
        // Initialize the theme
        $this->set_constants();
        $this->init();
    }

    private function init()
    {

        require_once get_theme_file_path('/includes/classes/setup.php');
        require_once get_theme_file_path('/includes/classes/template-handler.class.php');

        $this->setup = new \Espressoole\Setup();
        $this->template_handler = new \Espressoole\TemplateHandler();
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
