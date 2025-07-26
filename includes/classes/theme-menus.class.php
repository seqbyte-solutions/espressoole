<?php

namespace Espressoole;

class ThemeMenus
{
    private $menu_locations;
    private $menu_items;
    private $current_locale;

    public function __construct()
    {
        $this->menu_locations = [
            'header-primary' => 'Header Primary',
            'footer-primary' => 'Footer Primary',
            'footer-utils' => 'Footer Utils',

        ];

        $this->menu_items = [

            'header-primary' => [
                [
                    'title' => 'Acasă',
                    'type' => 'page',
                    'page_slug' => 'acasa',
                ],
                [
                    'title' => 'Bilete',
                    'type' => 'page',
                    'page_slug' => 'bilete',
                ],
                [
                    'title' => 'FAQ',
                    'type' => 'page',
                    'page_slug' => 'faq',
                ],
                [
                    'title' => 'Galerie Media',
                    'type' => 'page',
                    'page_slug' => 'galerie-media',
                ],
                [
                    'title' => 'Contact',
                    'type' => 'page',
                    'page_slug' => 'contact',

                ]
                ],
                'footer-utils' => [
                    [
                        'title' => 'Termeni și condiții',
                        'type' => 'page',
                        'page_slug' => 'termene-si-conditii',
                    ],
                    [
                        'title' => 'Politica de confidențialitate',
                        'type' => 'page',
                        'page_slug' => 'politica-de-confidentialitate',
                    ],
                    [
                        'title' => 'Politica de cookies',
                        'type' => 'page',
                        'page_slug' => 'politica-de-cookies',
                    ],
                    [
                        'title' => 'ANPC SAL',
                        'type' => 'custom',
                        'url' => 'https://anpc.ro/ce-este-sal/',
                    ],
                    [
                        'title' => 'SOL',
                        'type' => 'custom',
                        'url' => 'https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home2.show&lng=RO',
                    ],
                ]

        ];
    }

    public function register_menus(): void
    {
        register_nav_menus($this->menu_locations);
    }

    public function create_default_menus(): void
    {
        foreach ($this->menu_locations as $location => $menu_name) {
            $menu_exists = wp_get_nav_menu_object($menu_name);
            if (!$menu_exists) {
                $this->create_single_menu($location, $menu_name);
            }
        }
    }

    private function create_single_menu(string $location, string $menu_name): void
    {
        $menu_id = wp_create_nav_menu($menu_name);
        if (is_wp_error($menu_id)) {
            return;
        }

        $locactions = get_theme_mod('nav_menu_locations');
        $locactions[$location] = $menu_id;
        set_theme_mod('nav_menu_locations', $locactions);
        if (isset($this->menu_items[$location])) {
            $this->create_menu_item($menu_id, $this->menu_items[$location]);
        }
    }

    private function create_menu_item($menu_id, $items, $parent_id = 0): void
    {
        foreach ($items as $item) {
            if ($item['type'] === 'custom') {
                $item_id = wp_update_nav_menu_item($menu_id, 0, [
                    'menu-item-title' => $item['title'],
                    'menu-item-url' => $item['url'],
                    'menu-item-status' => 'publish',
                    'menu-item-parent-id' => $parent_id,
                ]);
            } elseif ($item['type'] === 'page') {
                $page = get_posts([
                    'name' => $item['page_slug'],
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'numberposts' => 1,
                ])[0] ?? null;

                if ($page) {
                    $item_id = wp_update_nav_menu_item($menu_id, 0, [
                        'menu-item-object-id' => $page->ID,
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type',
                        'menu-item-title' => $item['title'],
                        'menu-item-status' => 'publish',
                        'menu-item-parent-id' => $parent_id,
                    ]);
                }
            }

            if (isset($item['children'])) {
                $this->create_menu_item($menu_id, $item['children'], $item_id);
            }
        }
    }

    public function remove_menus(): void
    {
        foreach ($this->menu_locations as $location => $menu_name) {
            $menu = wp_get_nav_menu_object($menu_name);
            if ($menu) {
                wp_delete_nav_menu($menu->term_id);
            }
        }
    }
}
