<?php
namespace Espressoole;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Setup {
    public function __construct()
    {
        $this->init_options();

        add_action('after_setup_theme', [$this, 'setup_theme_supports']);

    }

     public function setup_theme_supports(): void
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
    }

    private function init_options() {
        if (!get_option('espressoole_maintenance_mode')) {
            add_option('espressoole_maintenance_mode', true);
        }
    }
}