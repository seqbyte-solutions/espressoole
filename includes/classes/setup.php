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

        add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);

        add_action('init', [$this, 'setup_database_tables']);

    }

    public function setup_database_tables(): void
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'contact_form_submissions';

        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id int(11) NOT NULL AUTO_INCREMENT,
            name tinytext NOT NULL,
            email VARCHAR(100) NOT NULL,
            subject VARCHAR(255) NOT NULL,
            message text NOT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        dbDelta($sql);
    }

     public function setup_theme_supports(): void
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
        add_theme_support('menus');
        add_theme_support('widgets');
       
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
       
    }

    private function init_options() {
        if (!get_option('espressoole_maintenance_mode')) {
            add_option('espressoole_maintenance_mode', true);
        }
    }
    
    public function enqueue_styles(): void
    {
        wp_enqueue_style('espressoole-globals', ESPRESSOOLE_URL . '/assets/css/globals.css');
        wp_enqueue_style('espressoole-styles', ESPRESSOOLE_URL . '/assets/css/style.css', ['espressoole-globals']);
        wp_enqueue_style('espressoole-media-queries', ESPRESSOOLE_URL . '/assets/css/media-queries.css', ['espressoole-globals', 'espressoole-styles']);
    }

    public function enqueue_scripts(): void {
        wp_enqueue_script('espressoole-gsap', ESPRESSOOLE_URL . '/assets/js/gsap/minified/gsap.min.js');
    }

   
}