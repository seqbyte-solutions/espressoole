<?php

namespace Espressoole;

use WP_Error;

class ThemePages
{
    private $default_pages;

    public function __construct()
    {
        $this->default_pages = [
            'ro' => [
                [
                    'title' => 'Acasă',
                    'content' => '',
                    'template' => 'templates/homepage.php',
                    'slug' => 'acasa',
                    'parent_id' => '0',
                    'is_front_page' => true,
                ],
                [
                    'title' => 'Bilete',
                    'content' => '',
                    'template' => 'templates/tickets.php',
                    'slug' => 'bilete',
                    'parent_id' => '0',
                    'is_front_page' => false,
                ],
                [
                    'title' => 'FAQ',
                    'content' => '',
                    'template' => 'templates/faq.php',
                    'slug' => 'faq',
                    'parent_id' => '0',
                    'is_front_page' => false,
                ],
                [
                    'title' => 'Galerie Media',
                    'content' => '',
                    'template' => 'templates/media-gallery.php',
                    'slug' => 'galerie-media',
                    'parent_id' => '0',
                    'is_front_page' => false,
                ],
                [
                    'title' => 'Contact',
                    'content' => '',
                    'template' => 'templates/contact.php',
                    'slug' => 'contact',
                    'parent_id' => '0',
                    'is_front_page' => false,
                ]
            ],
            'en' => [
                [
                    'title' => 'Home',
                    'content' => '',
                    'template' => 'templates/homepage.php',
                    'slug' => 'home',
                    'parent_id' => '0',
                    'is_front_page' => true,
                ],
                [
                    'title' => 'Tickets',
                    'content' => '',
                    'template' => 'templates/tickets.php',
                    'slug' => 'tickets',
                    'parent_id' => '0',
                    'is_front_page' => false,
                ],
                [
                    'title' => 'FAQ',
                    'content' => '',
                    'template' => 'templates/faq.php',
                    'slug' => 'faq-en',
                    'parent_id' => '0',
                    'is_front_page' => false,
                ],
                [
                    'title' => 'Media Gallery',
                    'content' => '',
                    'template' => 'templates/media-gallery.php',
                    'slug' => 'media-gallery',
                    'parent_id' => '0',
                    'is_front_page' => false,
                ],
                [
                    'title' => 'Contact',
                    'content' => '',
                    'template' => 'templates/contact.php',
                    'slug' => 'contact-en',
                    'parent_id' => '0',
                    'is_front_page' => false,
                ]
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
        $pages_by_index = [];

        foreach ($this->default_pages as $locale => $pages) {
            foreach ($pages as $index => $page) {
                if (!$this->check_if_page_exists($page['slug'])) {
                    $temp_data = $page;
                    $temp_data['parent_id'] = 0;

                    $page_id = $this->create_single_page($temp_data);

                    if ($page_id) {
                        $pages_ids[$page['slug']] = $page_id;
                        $pages_by_index[$index][$locale] = $page_id;

                        pll_set_post_language($page_id, $locale);

                        if (isset($page['is_front_page']) && $page['is_front_page'] === true) {
                            update_option('show_on_front', 'page');
                            
                            // Set front page for specific language
                            $option_name = 'page_on_front_' . $locale;
                            update_option($option_name, $page_id);
                            
                            // Also set as general front page if it's the default language
                            $default_language = pll_default_language();
                            if ($locale === $default_language) {
                                update_option('page_on_front', $page_id);
                            }
                        }
                    }
                } else {
                    $existing_page = get_page_by_path($page['slug']);
                    if ($existing_page) {
                        $pages_ids[$page['slug']] = $existing_page->ID;
                        $pages_by_index[$index][$locale] = $existing_page->ID;
                        pll_set_post_language($existing_page->ID, $locale);
                    }
                }
            }
        }

        foreach ($this->default_pages as $locale => $pages) {
            foreach ($pages as $page) {
                if (is_string($page['parent_id']) && isset($pages_ids[$page['parent_id']])) {
                    if (isset($pages_ids[$page['slug']])) {
                        wp_update_post([
                            'ID' => $pages_ids[$page['slug']],
                            'post_parent' => $pages_ids[$page['parent_id']]
                        ]);
                    } else {
                        error_log('Warning: Undefined array key for slug ' . $page['slug']);
                    }
                }
            }
        }

        // Connect translations between pages with the same index
        foreach ($pages_by_index as $index => $page_translations) {
            if (count($page_translations) > 1) {
                pll_save_post_translations($page_translations);
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
        foreach ($this->default_pages as $locale => $pages) {
            foreach ($pages as $page) {
                $existing_page = get_page_by_path($page['slug']);
                if ($existing_page) {
                    wp_delete_post($existing_page->ID, true);
                }
            }
        }
    }
}
