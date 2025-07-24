<?php

namespace Espressoole;

use Error;

class ThemePages
{
    private $default_pages;

    public function __construct()
    {
        $this->default_pages = [
            [
                'title' => 'Acasă',
                'content' => '',
                'template' => 'templates/homepage.php',
                'slug' => 'acasa',
                'parent_id' => '0',
                'is_front_page' => true,
            ],
        
            [
                'title' => 'Contact',
                'content' => '',
                'template' => 'templates/contact.php',
                'slug' => 'contact',
                'parent_id' => '0',
                'is_front_page' => false,
            ],
        ];
    }

    public function get_theme_pages()
    {
        return $this->default_pages;
    }

        public function create_theme_pages(): void
    {
        $pages_ids = [];

        foreach ($this->default_pages as $page) {
            if (!$this->check_if_page_exists($page['slug'])) {
                $temp_data = $page;
                $temp_data['parent_id'] = 0;

                $page_id = $this->create_single_page($temp_data);

                if ($page_id) {
                    $pages_ids[$page['slug']] = $page_id;

                    if (isset($page['is_front_page']) && $page['is_front_page'] === true) {
                        update_option('show_on_front', 'page');
                        update_option('page_on_front', $page_id);
                    }
                }
            } else {
                $existing_page = get_page_by_path($page['slug']);
                if ($existing_page) {
                    $pages_ids[$page['slug']] = $existing_page->ID;
                }
            }
        }

        foreach ($this->default_pages as $page) {
            if (is_string($page['parent_id']) && isset($pages_ids[$page['parent_id']])) {
                if (isset($pages_ids[$page['slug']])) { 
                    wp_update_post([
                        'ID' => $pages_ids[$page['slug']],
                        'post_parent' => $pages_ids[$page['parent_id']]
                    ]);
                } else {
                    error_log('Warning: Undefined array key for slug '.$page['slug']);
                }
            }
        }
    }

    private function check_if_page_exists(string $slug): bool
    {
        $page = get_posts([
            'name' => $slug,
            'post_type' => 'page',
        ]);
        return !empty($page) ? true : false;
    }

    private function create_single_page(array $page_data): int | WP_Error
    {
        $page = [
            'post_title' => $page_data['title'],
            'post_content' => $page_data['content'],
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_parent' => $page_data['parent_id'],
            'post_name' => $page_data['slug'],
        ];

        if (isset($page_data['template'])) {
            $page['post_template'] = $page_data['template'];
        }

        return wp_insert_post($page);
    }

    public function remove_theme_pages(): void
    {
        foreach ($this->default_pages as $page) {
            $existing_page = get_page_by_path($page['slug']);
            if ($existing_page) {
                wp_delete_post($existing_page->ID, true);
            }
        }
    }
}