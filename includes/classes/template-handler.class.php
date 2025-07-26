<?php

namespace Espressoole;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class TemplateHandler
{
    private array $theme_pages;

    public function __construct()
    {
        // $espressoole_theme_pages = new \Espressoole\ThemePages();
        // $this->theme_pages = $espressoole_theme_pages->get_theme_pages();

        add_filter('pre_get_document_title', [$this, 'custom_document_title']);
        add_action('wp_head', [$this, 'set_head']);
    }

    public function render(): void
    {
        global $post;

        $current_locale = apply_filters('locale', get_locale());

        if (is_404()) {
            $this->render_404_template();
            exit;
        }

        if (get_option('espressoole_maintenance_mode') && !current_user_can('manage_options')) {
            ob_start();
            get_template_part('templates/maintenance');

            $content = ob_get_clean();
            echo $content;
            ob_end_flush();
            exit;
        }

        ob_start();

?>
        <!DOCTYPE html>
        <html lang="<?= $current_locale === 'ro_RO' ? 'ro' : 'en' ?>">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <?php
            wp_head();
            ?>
        </head>

        <body>
            <?php
            get_template_part('parts/header');
            ?>
            <main>
                <?php
                $this->render_page_content();
                ?>
            </main>
            <?php
            get_template_part('parts/footer');
            wp_footer();
            ?>
        </body>

        </html>
<?php
        $content = ob_get_clean();
        echo $content;
        ob_end_flush();
    }

    private function render_page_content(): void
    {
        global $post;

        $page_slug = $post->post_name;

        $theme_pages = new \Espressoole\ThemePages();
        $this->theme_pages = $theme_pages->get_theme_pages();

        foreach ($this->theme_pages as $locale => $pages) {
            foreach ($pages as $page) {
                if ($page['slug'] === $page_slug) {
                    $page_template = strtr($page['template'], ['.php' => '']);
                    break;
                }
            }
        }
        get_template_part($page_template);
    }

    private function render_404_template()
    {
        status_header(404);
        get_header();
        get_template_part('templates/404');
        get_footer();
    }

    public function set_head(): void
    {
        get_template_part('parts/head');
    }

    public function custom_document_title($title): string
    {

        global $post;
        $post_title = get_the_title($post->ID);
        $title = is_front_page() ? "Fresh Roasted Party | Espressoole" : "{$post_title} | Espressoole";

        // Fallback to default title if nothing matches
        return $title;
    }
}
