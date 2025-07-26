<?php
wp_enqueue_style('espressoole-header', ESPRESSOOLE_URL . '/assets/css/header.css', ['espressoole-media-queries']);
wp_enqueue_script('espressoole-header', ESPRESSOOLE_URL . '/assets/js/header.js', ['espressoole-gsap']);
?>

<header class="header" <?php if ( is_admin_bar_showing() ) : ?>style="top: 32px;"<?php endif; ?> >
    <div class="header__container">
        <div class="header__content">
            <div class="header__content-logo">
                <a href="<?= esc_url( get_permalink( pll_get_post( pll_get_post( get_page_by_path( 'acasa' )->ID, pll_current_language() ), pll_current_language() ) ) ); ?>" aria-label="Espressoole.com">
                    <img src="<?= ESPRESSOOLE_URL ?>/assets/img/espressoole_logo.svg" fetchpriority="high" alt="Espressoole" />
                </a>
            </div>
            <div class="header__content-menu">
                <nav class="header__content-menu-nav">
                    <ul class="header__content-menu-list">
                        <li>
                            <a href="<?= esc_url( get_permalink( pll_get_post( pll_get_post( get_page_by_path( 'bilete' )->ID, pll_current_language() ), pll_current_language() ) ) ); ?>" class="header__content-cta-button"><?= __('Cumpără bilete', 'espressoole') ?></a>
                            <a href="<?= esc_url( get_permalink( pll_get_post( pll_get_post( get_page_by_path( 'bilete' )->ID, pll_current_language() ), pll_current_language() ) ) ); ?>" class="header__content-cta-button-mobile"><?= __('Bilete', 'espressoole') ?></a>
                        </li>
                        <li>
                            <button id="header__content-menu-burger-button" class="header__content-menu-burger-button" title="Menu">
                                <div class="header__content-menu-burger">
                                    <div class="header__content-menu-burger-bar header__content-menu-burger-bar-1"></div>
                                    <div class="header__content-menu-burger-bar header__content-menu-burger-bar-2"></div>
                                    <div class="header__content-menu-burger-bar header__content-menu-burger-bar-3"></div>
                                </div>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="header__menu" id="header__menu">
    <div class="header__menu-content">
        <?php
        wp_nav_menu([
            'theme_location' => 'header-primary',
            'container' => false,
            'menu_class' => 'header__menu-list',
            'fallback_cb' => false,
        ]);
        ?>
        <?php
            $args = array(
                'dropdown' => 0,
                'show_names' => 0,
                'show_flags' => 1,
                'hide_current' => 0,
                'force_home' => 0,
                'echo' => 0,
                'raw' => 0
            );
            pll_the_languages( [
                'dropdown' => 0,
                'show_flags' => 1,
                'show_names' => 0,
                'hide_current' => 1,
            ] );
        ?>
    </div>
</div>