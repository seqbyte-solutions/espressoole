<?php


?>

<section class="hero-section">
    <div class="hero-section__video-bg">
        <video autoplay muted loop>
            <source src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/vid/hero.mp4'); ?>" type="video/mp4">
        </video>
        <div class="hero-section__video-bg-filter"></div>
    </div>
    <div class="hero-section__content">

        <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/fresh_roasted_party_logo.svg'); ?>" alt="Hero Image" />
        
        <a class="hero-cta-button" href="#"><?= __('Cumpără bilete', 'espressoole') ?></a>

    </div>
</section>
<section>
    <div class="content-box content-centered">
        <div>
            <h2><?= __('Welcome to Our Website', 'espressoole') ?></h2>
            <p> <?= __('We are glad to have you here. Explore our content and enjoy your stay!', 'espressoole') ?></p>
        </div>
    </div>
</section>