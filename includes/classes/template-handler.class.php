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

        if (get_option('espressoole_maintenance_mode') ) {
            // Allow asset requests to pass through even in maintenance mode
            if ($this->is_asset_request()) {
                return;
            }
            
            ob_start();
            get_template_part('templates/maintenance');

            $content = ob_get_clean();
            echo $content;
            exit;
        }

        // if(is_404()) {
        //     $this->render_404_template();
        //     exit;
        // }
    }

    private function render_404_template()
    {
        status_header(404);
        get_header();
        get_template_part('templates/404');
        get_footer();
    }

    /**
     * Check if the current request is for an asset file
     * @return bool
     */
    private function is_asset_request()
    {
        $request_uri = $_SERVER['REQUEST_URI'] ?? '';
        
        // Common asset file extensions
        $asset_extensions = [
            'css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'webp',
            'woff', 'woff2', 'ttf', 'eot', 'otf', 'pdf', 'zip', 'mp4', 'mp3'
        ];
        
        $file_extension = strtolower(pathinfo(parse_url($request_uri, PHP_URL_PATH), PATHINFO_EXTENSION));
        
        return in_array($file_extension, $asset_extensions);
    }
}
