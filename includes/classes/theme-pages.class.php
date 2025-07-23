<?php

namespace Espressoole;


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

}