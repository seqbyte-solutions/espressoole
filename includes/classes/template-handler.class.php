<?php

namespace Espressoole;

use WP_Post;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class TemplateHandler
{
    public function render()
    {
        global $post;

        // if (get_option('espressoole_maintenance_mode')) {
        //     $this->render_maintenance_template();
        //     exit;
        // }

        if(is_404()) {
            $this->render_404_template();
            exit;
        }
    }

    private function render_maintenance_template()
    {
        get_template_part('templates/maintenance');
    }

    private function render_404_template()
    {
        status_header(404);
        get_header();
        get_template_part('templates/404');
        get_footer();
    }
}
