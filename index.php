<?php
namespace Espressoole;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if(!class_exists('Espressoole')) {
    require_once get_theme_file_path('/functions.php');
}

$GLOBALS['espressoole']->template_handler->render();
