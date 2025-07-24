<?php

global $post;

$post_title = get_the_title($post->ID);
$title = is_front_page() ? "Fresh Roasted Party | Espressoole" : "{$post_title} | Espressoole";

?>


<title><?= $title ?></title>