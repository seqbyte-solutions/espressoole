<?php

global $post;

$current_locale = apply_filters('locale', get_locale());

?>

<meta name="description" content="<?= __('Fresh Roasted Party este mai mult decât un party. E un statement. Un spațiu creat pentru vibe seekers și coffee rebels.','espressoole') ?>">
<meta name="keywords" content="<?= __('Espressoole, cafea, espresso, party, ritual urban, vip, romaero, fresh, roasted','espressoole') ?>">
<meta name="author" content="Seqbyte Solutions">

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo ESPRESSOOLE_URL; ?>/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo ESPRESSOOLE_URL; ?>/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo ESPRESSOOLE_URL; ?>/assets/img/favicon/favicon-16x16.png">
<link rel="shortcut icon" href="<?php echo ESPRESSOOLE_URL; ?>/assets/img/favicon/favicon.ico">
<link rel="manifest" href="<?php echo ESPRESSOOLE_URL; ?>/assets/img/favicon/site.webmanifest">

<meta property="og:title" content="<?php echo esc_attr($title); ?>">
<meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo esc_url(get_permalink($post->ID)); ?>">
<meta property="og:site_name" content="Espressoole">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
<meta name="twitter:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">