<?php
namespace Espressoole;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Setup {
    public function __construct()
    {
        $this->init_options();
    }

    private function init_options() {
        if (!get_option('espressoole_maintenance_mode')) {
            add_option('espressoole_maintenance_mode', true);
        }
    }
}