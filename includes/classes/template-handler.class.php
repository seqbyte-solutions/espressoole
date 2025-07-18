<?php
namespace Espressoole;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class TemplateHandler {
    public function render() {
        if (get_option('espressoole_maintenance_mode')) {
            $this->render_maintenance_template();
            return;
        }
    }

    private function render_maintenance_template() {
        require_once get_theme_file_path('/templates/maintenance.php');
    }
}