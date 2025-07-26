<?php

wp_enqueue_script('espressoole-gsap-st', ESPRESSOOLE_URL . '/assets/js/gsap/minified/ScrollTrigger.min.js', ['espressoole-gsap']);
wp_enqueue_script('espressoole-homepage', ESPRESSOOLE_URL . '/assets/js/homepage.js', ['espressoole-gsap', 'espressoole-gsap-st']);

?>

<section class="hero-section">
    <div class="hero-section__video-bg">
        <video autoplay muted loop>
            <source src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/vid/hero.mp4'); ?>" type="video/mp4">
        </video>
        <div class="hero-section__video-bg-filter"></div>
    </div>
    <div class="hero-section__content">

        <div class="hero-section__headliner-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 143.61 173.99">

                <g id="headliner" class="headliner-group">
                    <g id="what">
                        <path d="m24.42,36.91c-3.08,0-6.04.02-8.99-.04-.27,0-.75-.55-.77-.86-.22-3.04-.34-6.09-.52-9.14-.09-1.49-.23-2.97-.58-4.49-.39,4.79-.79,9.58-1.19,14.45H2.5c-.12-1.16-.28-2.36-.35-3.57-.18-2.85-.29-5.7-.5-8.54-.28-3.9-.63-7.79-.94-11.69-.09-1.1-.18-2.21-.23-3.31C.31,6.61.15,3.48,0,.35c0-.07.05-.14.1-.28h9.16c.13,7.38.25,14.78.38,22.18.09.01.17.03.26.04.05-.12.14-.24.15-.36.09-2.22.19-4.44.26-6.67.09-3.18.14-6.36.25-9.55.07-1.86.23-3.71.35-5.64h6.43c.03.07.12.17.12.28.09,2.86.19,5.72.26,8.59.09,3.74.15,7.48.26,11.22.02.74.21,1.47.48,2.24.08-.4.23-.8.24-1.2.09-6.66.17-13.32.25-19.98,0-.35,0-.71,0-1.15h8.64c-.09,1.57-.15,3.1-.29,4.63-.11,1.25-.34,2.49-.45,3.75-.27,3.19-.45,6.38-.74,9.57-.36,3.96-.81,7.92-1.18,11.88-.21,2.28-.34,4.57-.52,7.01Z" style="fill: #f0e2c5;" />
                        <path d="m31.94,36.81V.08h9.04v13.74h2.43V.06h9.04v36.79h-8.99v-15.46h-2.38v15.43h-9.13Z" style="fill: #f0e2c5;" />
                        <path d="m75.01.07h-14.21c-1.31,12.27-2.61,24.48-3.93,36.85,2.73,0,5.32-.05,7.91.02,1.13.04,1.43-.4,1.44-1.44.03-2.05.17-4.1.26-6.19h2.65c.17,2.56.34,5.07.5,7.54h9.26c-1.3-12.3-2.59-24.54-3.88-36.78Zm-8.17,21.69c.26-4.65.52-9.26.77-13.88.08,0,.15.01.22.01.3,4.6.61,9.2.92,13.87h-1.91Z" style="fill: #f0e2c5;" />
                        <path d="m93.84,36.88h-9.1V7.46h-4.26V.07h17.56v7.32h-4.2v29.5Z" style="fill: #f0e2c5;" />
                    </g>
                    <g id="if">
                        <path d="m142.74.09v7.28h-7.34v6.98h6.55v7.41h-6.56v15.08h-9.1V.09h16.45Z" style="fill: #f0e2c5;" />
                        <path d="m111.93,0h8.67v36.84h-8.67V0Z" style="fill: #f0e2c5;" />
                    </g>
                    <g id="coffee">

                        <path d="m41.89,82.67c-.26,0-.52,0-.79-.02-.22.01-.47.02-.73.02h0c-4.57,0-9.19-2-12.67-5.5-3.56-3.57-5.5-8.35-5.48-13.45.05-11.65,9.87-18.86,18.93-18.86h.24c9.16.12,18.86,7.87,18.72,19.2-.16,11.13-9.55,18.61-18.23,18.61Z" style="fill: #3a2016;" />
                        <path d="m41.16,45.23c.08,0,.16,0,.24,0,9.04.12,18.49,7.66,18.35,18.82-.15,10.44-8.84,18.24-17.85,18.24-.26,0-.51,0-.77-.02-.25.01-.5.02-.75.02-8.58,0-17.82-7.45-17.77-18.57.05-11.08,9.47-18.49,18.55-18.49m0-.75c-9.24,0-19.25,7.36-19.3,19.24-.02,5.2,1.96,10.07,5.59,13.71,3.55,3.57,8.27,5.61,12.93,5.61.25,0,.5,0,.75-.02.26.01.51.02.77.02,9.94,0,18.46-8.69,18.6-18.98.15-11.56-9.75-19.46-19.09-19.58h-.25Z" style="fill: #f0e2c5;" />

                        <path d="m48.03,63.8c0,3.86-3.1,6.95-6.92,6.9-3.79-.04-6.82-3.1-6.82-6.89,0-3.84,3.11-6.94,6.93-6.89,3.81.05,6.81,3.08,6.81,6.88Z" style="fill: #f15e22;" />

                        <path d="m10.87,83.3c-1.24,0-2.44-.11-3.56-.33-4.1-.8-6.61-3.99-6.69-8.53-.15-7.54-.15-14.44,0-21.11.11-4.94,3.44-8.31,8.49-8.58.53-.03,1.07-.05,1.6-.05,1.32,0,2.49.1,3.59.3,3.8.69,6.24,3.24,6.85,7.17.13.86.22,1.77.25,2.79.03.8.02,1.61.02,2.46v1.54h-9.8s0-1.35,0-1.83c0-1.25.02-2.43-.04-3.63-.02-.43-.24-.96-.48-1.12-.11-.07-.21-.11-.31-.11-.32,0-.65.41-.65,1.1-.02,7.07-.01,14.15,0,21.22,0,.97.43.98.66.98h.01c.25,0,.73-.02.76-1.02.04-1.08.03-2.16.03-3.24v-2.93h9.77v.95c.06,2.9.1,5.64-.85,8.36-1.18,3.4-3.81,5.21-8.02,5.53-.55.04-1.1.06-1.66.06Z" style="fill: #3a2016;" />
                        <path d="m10.71,45.08c1.19,0,2.38.08,3.53.29,3.72.68,5.97,3.13,6.55,6.85.14.91.22,1.83.25,2.74.04,1.16.01,2.31.01,3.62h-9.05c0-1.75.05-3.43-.03-5.09-.02-.49-.27-1.15-.64-1.41-.17-.12-.35-.18-.52-.18-.55,0-1.02.59-1.02,1.47-.02,7.07-.01,14.15,0,21.22,0,.67.18,1.34,1.02,1.36.01,0,.02,0,.04,0,.86,0,1.1-.69,1.12-1.39.05-1.52.03-3.04.03-4.56,0-.39,0-.78,0-1.25h9.02c.04,3.02.16,5.97-.83,8.82-1.26,3.63-4.17,5.01-7.69,5.28-.54.04-1.09.06-1.63.06-1.17,0-2.35-.1-3.49-.32-3.86-.75-6.31-3.78-6.39-8.17-.14-7.03-.15-14.07,0-21.09.11-4.82,3.33-7.95,8.13-8.22.52-.03,1.05-.04,1.58-.04m0-.75c-.52,0-1.06.02-1.62.05-5.26.29-8.73,3.8-8.84,8.95-.15,6.68-.15,13.59,0,21.13.09,4.66,2.77,8.07,7,8.89,1.14.22,2.36.33,3.63.33.56,0,1.13-.02,1.69-.07,4.31-.33,7.12-2.28,8.34-5.78.97-2.79.93-5.69.88-8.49v-.58s-.02-.74-.02-.74h-10.51v1.19s0,.81,0,.81c0,.43,0,.87,0,1.3,0,1.06,0,2.16-.03,3.23-.02.66-.22.66-.37.66-.17,0-.31,0-.31-.61-.01-6.71-.02-13.93,0-21.22,0-.53.23-.72.27-.72.01,0,.05,0,.1.04.1.07.3.46.31.83.05,1.18.05,2.36.04,3.6,0,.48,0,.97,0,1.46v.75h10.55v-.75c0-.4,0-.79,0-1.17,0-.86.01-1.67-.02-2.48-.04-1.03-.12-1.95-.26-2.83-.64-4.1-3.18-6.75-7.16-7.48-1.12-.2-2.32-.3-3.66-.3h0Z" style="fill: #f0e2c5;" />

                        <path d="m105.07,82.8c-.29,0-.7-.03-.97-.33-.2-.21-.28-.51-.24-.91.01-.18,0-.35,0-.53v-.28s0-35.46,0-35.46h16.65v7.86h-6.97v5.8c.4,0,.8,0,1.2.01.52,0,1.04.01,1.56.01.69,0,1.38-.01,2.08-.05.11,0,.21,0,.31,0,.41,0,.93.05,1.28.42.29.31.4.77.36,1.49-.08,1.31-.06,2.62-.05,4.01,0,.6.02,1.2.02,1.81v.38h-6.75v7.69h8.15l-.27,1.95c-.25,1.83-.48,3.58-.77,5.33-.07.47-.8.77-1.16.77-2.88.02-5.76.02-8.64.02-1.92,0-3.84,0-5.76,0h0Z" style="fill: #3a2016;" />
                        <path d="m120.13,45.67v7.11h-6.97v6.55c1.04,0,2.09.03,3.13.03.7,0,1.4-.01,2.1-.05.1,0,.2,0,.29,0,.97,0,1.33.35,1.26,1.51-.12,1.9-.03,3.82-.03,5.84h-6.75v8.44h8.09c-.33,2.38-.61,4.62-.97,6.85-.03.2-.52.45-.79.46-4.8.03-9.6.01-14.4.03h0c-.6,0-.89-.2-.84-.83.02-.28,0-.56,0-.84,0-11.19,0-22.38,0-33.58v-1.51h15.9m.75-.75h-17.4v35.83c0,.1,0,.19,0,.29,0,.16,0,.33,0,.49-.04.5.07.9.34,1.19.42.45,1.04.45,1.25.45,1.94,0,3.87,0,5.8,0,2.87,0,5.74,0,8.61-.02.47,0,1.42-.38,1.53-1.09.28-1.76.52-3.51.77-5.36l.2-1.51.12-.85h-8.2v-6.94h6.75v-.75c0-.62,0-1.22-.02-1.82-.02-1.38-.04-2.68.05-3.98.03-.52.02-1.26-.46-1.77-.45-.48-1.1-.54-1.55-.54-.1,0-.21,0-.33,0-.6.03-1.26.05-2.05.05-.52,0-1.03,0-1.55-.01-.28,0-.55,0-.83,0v-5.05h6.97v-8.61h0Z" style="fill: #f0e2c5;" />

                        <polygon points="125.46 82.71 125.46 45.26 142.04 45.26 142.04 53.13 135.07 53.13 135.07 58.92 141.62 58.92 141.62 66.98 135.09 66.98 135.09 74.72 143.18 74.72 142.09 82.71 125.46 82.71" style="fill: #3a2016;" />
                        <path d="m141.67,45.64v7.12h-6.97v6.54h6.54v7.31h-6.53v8.49h8.04c-.34,2.48-.66,4.83-.99,7.24h-15.92v-36.7h15.83m.75-.75h-17.33v38.2h17.32l.09-.65.67-4.91.32-2.33.12-.85h-8.15v-6.99h6.53v-8.81h-6.54v-5.04h6.97v-8.62h0Z" style="fill: #f0e2c5;" />

                        <path d="m82.97,82.7v-37.46h16.89v7.93h-7.29v6.42h6.82v1.92c0,1.78.01,3.46-.04,5.16-.02.52-.89.97-1.33.99-.94.03-1.89.04-2.84.04h-2.62s0,15.01,0,15.01h-9.57Z" style="fill: #3a2016;" />
                        <path d="m99.48,45.61v7.18h-7.29v7.17h6.82c0,2.31.03,4.5-.04,6.69,0,.23-.63.61-.97.62-.93.03-1.87.04-2.81.04s-1.99,0-3.02,0v15.02h-8.82v-36.71h16.14m.75-.75h-17.64v38.21h10.32v-15.02c.26,0,.52,0,.78,0,.5,0,.99,0,1.48,0,1.14,0,2.02-.01,2.84-.04.57-.02,1.67-.56,1.7-1.35.06-1.71.05-3.39.05-5.17v-1.54s0-.75,0-.75h-6.82v-5.67h7.29v-8.68h0Z" style="fill: #f0e2c5;" />

                        <polygon points="62.08 82.71 62.08 45.26 78.96 45.26 78.96 53.17 71.64 53.17 71.64 59.55 78.27 59.55 78.27 67.64 71.62 67.64 71.62 82.71 62.08 82.71" style="fill: #3a2016;" />
                        <path d="m78.59,45.64v7.16h-7.33v7.14h6.63v7.34h-6.64v15.07h-8.79v-36.7h16.13m.75-.75h-17.63v38.2h10.29v-15.07h6.64v-8.84h-6.63v-5.64h7.33v-8.66h0Z" style="fill: #f0e2c5;" />

                        <path d="m41.88,63.78c0,.41-.36.72-.72.7-.34.02-.72-.27-.71-.72,0-.43.37-.72.72-.71.35,0,.71.3.71.73Z" style="fill: #3a2016;" />
                    </g>
                    <g id="could">
                        <path d="m62.87,90.96h9.1v1.32c0,8.99,0,17.99.01,26.98,0,.5.09,1.04.3,1.47.14.29.64.63.9.57.35-.07.72-.45.89-.8.16-.33.08-.78.08-1.18,0-8.99,0-17.99,0-26.98v-1.37h9.34v1.24c0,8.83.03,17.67-.03,26.5-.01,1.47-.35,2.96-.71,4.4-.72,2.88-2.86,4.49-5.6,4.87-2.56.35-5.22.28-7.8.04-3.45-.33-5.95-3.14-6.22-6.64-.16-2.06-.24-4.12-.24-6.19-.03-8.03-.01-16.06-.01-24.23Z" style="fill: #f0e2c5;" />
                        <path d="m130.49,100.02c-.04-2.37-.66-4.62-2.42-6.45-1.94-2.01-4.41-2.53-6.98-2.63-3.31-.12-6.64-.03-9.96-.02-.3,0-.61.05-.94.08v36.72c.19.05.3.1.41.1,4.24.01,8.48.09,12.72-.04,1.15-.04,2.39-.52,3.41-1.12,2.91-1.7,3.68-4.66,3.75-7.7.16-6.31.12-12.63.01-18.94Zm-9.06,18.94c0,1.8-.47,2.24-2.36,2.12v-23.41c2.05.23,2.36.57,2.36,2.47v18.82Z" style="fill: #f0e2c5;" />
                        <path d="m57.51,99.04c-.07-3.27-1.51-5.96-4.66-7.47-2.71-1.31-5.54-1.4-8.43-.9-4.54.79-7.13,3.82-7.22,8.48-.07,3.39-.02,6.79-.02,10.19,0,3.59-.13,7.2.04,10.78.18,3.54,1.58,6.48,5.56,7.75,2.27.73,4.53.76,6.87.46,4.83-.62,7.73-3.58,7.86-8.19.2-7.03.16-14.07,0-21.1Zm-9.08,21.08c-.3.47-.73.84-1.1,1.25-.35-.35-.81-.65-1.02-1.08s-.26-.98-.26-1.48c-.02-6.3-.01-12.61-.01-18.91v-.36c.06-1.31.56-2.04,1.41-1.92,1.17.17,1.01,1.11,1.01,1.93.01,3.27,0,6.54,0,9.81v9.82c0,.32.11.71-.03.94Z" style="fill: #f0e2c5;" />
                        <path d="m32.23,104.05h-9.21c0-1.19.05-2.37-.01-3.55-.06-1.09.24-3.03-.9-3.1-1.16-.02-1.25.96-1.26,1.81-.02,6.75-.01,13.51-.01,20.26,0,.12.01.27.02.35.06,1.36.71,1.46,1.06,1.46.87,0,1.1-.86,1.1-1.66,0-1.75,0-3.51,0-5.35h9.05c.09,3.25.4,6.52-.99,9.57-.81,1.79-2.18,3.12-4.13,3.82-3.08,1.1-6.19,1.19-9.29.34-3.17-.86-4.8-3.24-5.42-6.34-.21-1.04-.25-2.12-.25-3.18-.02-6.51-.08-13.03.02-19.54.04-2.91,1.09-5.52,3.74-7.07,1.12-.65,2.44-1.18,3.72-1.3,3.14-.31,6.31-.45,9.15,1.47,1.82,1.23,2.89,2.97,3.2,5.02.34,2.26.28,4.58.41,6.99Z" style="fill: #f0e2c5;" />
                        <path d="m105.24,127.77h-16.36v-36.79h8.96v29.16h8.27c-.3,2.63-.58,5.1-.87,7.63Z" style="fill: #f0e2c5;" />
                    </g>
                    <g id="dance">
                        <path d="m58.39,152.29c.34,6.99.67,13.98,1.01,21.05h-7.97v-36.85c2.95,0,5.86-.02,8.76.04.25,0,.64.53.71.86.91,4.41,1.79,8.82,2.64,13.24.31,1.61.55,3.23.95,4.83-.43-6.26-.87-12.52-1.31-18.88h8.48v36.74h-9.93c-1.06-7.02-2.12-14.02-3.19-21.03-.05,0-.1,0-.15,0Z" style="fill: #f0e2c5;" />
                        <path d="m20.29,144.54c-.28-4.99-3.13-7.62-8.1-7.99-3.9-.29-7.83-.06-11.75-.05-.14,0-.28.08-.44.13v36.77c4.33,0,8.56.11,12.78-.05,2-.08,3.9-.75,5.35-2.36,1.97-2.18,2.38-4.89,2.41-7.57.09-6.29.11-12.6-.25-18.88Zm-8.81,20.11c0,1.48-.67,1.99-2.34,2.01v-23.41c1.62-.31,2.34.78,2.34,1.99.03,6.47.04,12.94,0,19.41Z" style="fill: #f0e2c5;" />
                        <path d="m42.87,136.55h-14.23c-1.31,12.31-2.61,24.54-3.92,36.86,2.72,0,5.31-.05,7.9.02,1.08.03,1.46-.25,1.45-1.4-.02-2.08.16-4.17.26-6.25h2.65c.17,2.54.34,5.04.51,7.58h9.27c-1.3-12.3-2.59-24.52-3.89-36.81Zm-8.17,21.48c.26-4.63.51-9.25.76-13.87.08.01.15.02.22.03.3,4.59.6,9.19.91,13.84h-1.89Z" style="fill: #f0e2c5;" />
                        <path d="m97.52,149.6h-9.21c0-1.44,0-2.87,0-4.29,0-.4.1-.84-.03-1.19-.16-.43-.37-.8-.84-.88s-.81.2-1.08.56c-.21.28-.22.74-.22,1.12-.01,6.59,0,13.18,0,19.77,0,.08-.02.16,0,.24.17.7-.1,1.74,1.08,1.76,1.19.02,1.05-1.02,1.08-1.73.07-1.75.02-3.51.02-5.36h9.1c-.1,3.79.51,7.66-1.88,11.08-1.01,1.45-2.44,2.21-4.01,2.69-2.7.81-5.48.77-8.2.15-3.32-.75-5.09-3.08-5.76-6.26-.32-1.53-.47-3.12-.49-4.69-.06-5.19-.13-10.39.03-15.58.07-2.43.14-4.91,1.46-7.18,1.31-2.26,3.34-3.3,5.69-3.77,2.45-.48,4.91-.33,7.35.38,3.1.9,4.91,3.03,5.5,6.01.45,2.3.32,4.72.44,7.15Z" style="fill: #f0e2c5;" />
                        <path d="m119.47,165.95c-.35,2.57-.68,4.94-1.01,7.38h-16.16v-36.76h15.93v7.3h-6.83v6.26h6.57v7.41h-6.54v8.41h8.05Z" style="fill: #f0e2c5;" />
                        <path d="m137.74,161.11h-8.75c-.51-3.46.22-6.63,2.01-9.6,1.15-1.9,2.55-3.69,2.83-5.99.08-.67.13-1.36.04-2.02-.04-.29-.44-.53-.68-.8-.25.24-.67.46-.71.73-.19,1.28-.27,2.59-.4,3.97h-8.2c-.17-2.39-.04-4.75.76-6.99.95-2.69,3.2-3.88,5.83-4.38,2.1-.4,4.2-.28,6.33.16,3.6.74,5.75,3.06,6.13,6.39.31,2.68.45,5.49-.91,8.02-.7,1.31-1.63,2.49-2.34,3.8-1.13,2.07-2.2,4.18-1.95,6.71Z" style="fill: #f0e2c5;" />
                        <path d="m137.73,162.7c0,3.27,0,6.45,0,9.64,0,.31,0,.62,0,1h-8.77v-10.64h8.77Z" style="fill: #f0e2c5;" />
                    </g>
                </g>

            </svg>
        </div>
        <div class="hero-section__content-container">
            <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/fresh_roasted_party_logo.svg'); ?>" alt="Hero Image" />
            <p><?= __('20 - 21 Septembrie | Romaero, București', 'espressoole') ?></p>
            <a class="hero-cta-button" href="<?= esc_url( get_permalink( pll_get_post( pll_get_post( get_page_by_path( 'bilete' )->ID, pll_current_language() ), pll_current_language() ) ) ); ?>">
                <?= __('Cumpără bilete', 'espressoole') ?>
            </a>
        </div>

    </div>
</section>
<section class="about-section section-lateral-padding">
    <div class="content-box content-centered">
        <div class="about-section__content">
            <div class="heading-container center light">
                <span><?= __('Fresh Roasted Party', 'espressoole') ?></span>
                <h2><?= __('Un nou ritual urban începe', 'espressoole') ?></h2>
            </div>
            <div class="about-section__content-main">
                <p> <?= __('Ce-ar fi dacă energia dintr-o cafea bună ar lua formă?', 'espressoole') ?></p>
                <p> <?= __('Dacă aroma s-ar transforma în beat.', 'espressoole') ?></p>
                <p> <?= __('Și dacă, pentru două zile, cafeaua chiar ar dansa?', 'espressoole') ?></p>
            </div>
            <div class="about-section__content-secondary">
                <div class="about-section__content-secondary-col">
                    <p><?= __('Când orașul merge pe pilot automat, tu cauți mai mult. Mai mult decât muzică. Mai mult decât cafea. Cauți vibe-ul. Cauți tribul tău.', 'espressoole') ?></p>
                    <p><?= __('<span>Fresh Roasted Party</span> este mai mult decât un party. E un statement. Un spațiu creat pentru vibe seekers și coffee rebels.', 'espressoole') ?></p>
                    <p><?= __('Două zile în care mixăm energia muzicii de zi cu cea a culturii cafelei de specialitate.', 'espressoole') ?></p>
                    <p><?= __('O experiență vie, autentică, cu beat-uri curate, arome tari și oameni care simt înainte să înțeleagă.', 'espressoole') ?></p>

                    <div class="featured-text">
                        <p><?= __('Pe 20-21 septembrie, la ROMAERO, redefinim ce înseamnă să ieși în oraș.', 'espressoole') ?></p>
                        <p><?= __('Nu e festival. Nu e târg.', 'espressoole') ?></p>
                        <p><?= __('E party. E <span>Ritual Urban</span>.', 'espressoole') ?></p>

                    </div>

                </div>

                <div class="about-section__content-secondary-col">
                    <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/individual-beans.png'); ?>" alt="About Section Image" />
                </div>
            </div>


        </div>

    </div>
</section>

<section class="artists-section section-lateral-padding">
    <div class="content-box content-centered">
        <div class="artists-section__content">
            <div class="heading-container left light">
                <h2><?= __('Artiști', 'espressoole') ?></h2>
            </div>
            <div class="artists-section__artists-list">
                <div class="artists-section__artist-item">
                    <div class="artists-section__artist-item-img">
                        <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/tba-artist.png'); ?>" alt="TBA" />
                    </div>
                    <h3><?= __('TBA', 'espressoole') ?></h3>
                </div>
                <div class="artists-section__artist-item">
                    <div class="artists-section__artist-item-img">
                        <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/tba-artist.png'); ?>" alt="TBA" />
                    </div>
                    <h3><?= __('TBA', 'espressoole') ?></h3>
                </div>
                <div class="artists-section__artist-item">
                    <div class="artists-section__artist-item-img">
                        <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/tba-artist.png'); ?>" alt="TBA" />
                    </div>
                    <h3><?= __('TBA', 'espressoole') ?></h3>
                </div>
                <div class="artists-section__artist-item">
                    <div class="artists-section__artist-item-img">
                        <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/tba-artist.png'); ?>" alt="TBA" />
                    </div>
                    <h3><?= __('TBA', 'espressoole') ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tickets-section section-lateral-padding">
    <div class="content-box content-centered">
        <div class="tickets-section__content">
            <div class="heading-container center light">
                <h2><?= __('Bilete', 'espressoole') ?></h2>
            </div>
            <div class="tickets-section__tickets-list">
                <div class="tickets-section__ticket-item">
                    <div class="tickets-section__ticket-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M96 128C60.7 128 32 156.7 32 192L32 256C32 264.8 39.4 271.7 47.7 274.6C66.5 281.1 80 299 80 320C80 341 66.5 358.9 47.7 365.4C39.4 368.3 32 375.2 32 384L32 448C32 483.3 60.7 512 96 512L544 512C579.3 512 608 483.3 608 448L608 384C608 375.2 600.6 368.3 592.3 365.4C573.5 358.9 560 341 560 320C560 299 573.5 281.1 592.3 274.6C600.6 271.7 608 264.8 608 256L608 192C608 156.7 579.3 128 544 128L96 128zM448 400L448 240L192 240L192 400L448 400zM144 224C144 206.3 158.3 192 176 192L464 192C481.7 192 496 206.3 496 224L496 416C496 433.7 481.7 448 464 448L176 448C158.3 448 144 433.7 144 416L144 224z" />
                        </svg>
                    </div>
                    <div class="tickets-section__ticket-item-title">
                        <h3><?= __('Acces General | 2 zile', 'espressoole') ?></h3>
                    </div>
                    <div class="tickets-section__ticket-item-price">
                        <h2>
                            <span class="price">120,00</span>
                            <span class="currency">RON</span>
                        </h2>
                        <p>
                            <span class="price">140,00</span>
                            <span class="currency">RON</span>
                        </p>
                    </div>
                    <div>
                        <a class="tickets-section__ticket-item-cta" href="<?= esc_url( get_permalink( pll_get_post( pll_get_post( get_page_by_path( 'bilete' )->ID, pll_current_language() ), pll_current_language() ) ) ); ?>"><?= __('Cumpără bilet', 'espressoole') ?></a>
                    </div>
                </div>
                <div class="tickets-section__ticket-item">
                    <div class="tickets-section__ticket-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M96 128C60.7 128 32 156.7 32 192L32 256C32 264.8 39.4 271.7 47.7 274.6C66.5 281.1 80 299 80 320C80 341 66.5 358.9 47.7 365.4C39.4 368.3 32 375.2 32 384L32 448C32 483.3 60.7 512 96 512L544 512C579.3 512 608 483.3 608 448L608 384C608 375.2 600.6 368.3 592.3 365.4C573.5 358.9 560 341 560 320C560 299 573.5 281.1 592.3 274.6C600.6 271.7 608 264.8 608 256L608 192C608 156.7 579.3 128 544 128L96 128zM448 400L448 240L192 240L192 400L448 400zM144 224C144 206.3 158.3 192 176 192L464 192C481.7 192 496 206.3 496 224L496 416C496 433.7 481.7 448 464 448L176 448C158.3 448 144 433.7 144 416L144 224z" />
                        </svg>
                    </div>
                    <div class="tickets-section__ticket-item-title">
                        <h3><?= __('Acces VIP | 2 zile', 'espressoole') ?></h3>
                    </div>
                    <div class="tickets-section__ticket-item-price">
                        <h2>
                            <span class="price">450,00</span>
                            <span class="currency">RON</span>
                        </h2>
                        <p>
                            <span class="price">500,00</span>
                            <span class="currency">RON</span>
                        </p>
                    </div>
                    <div>
                        <a class="tickets-section__ticket-item-cta" href="<?= esc_url( get_permalink( pll_get_post( pll_get_post( get_page_by_path( 'bilete' )->ID, pll_current_language() ), pll_current_language() ) ) ); ?>"><?= __('Cumpără bilet', 'espressoole') ?></a>
                    </div>
                </div>
                <div class="tickets-section__ticket-item">
                    <div class="tickets-section__ticket-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M96 128C60.7 128 32 156.7 32 192L32 256C32 264.8 39.4 271.7 47.7 274.6C66.5 281.1 80 299 80 320C80 341 66.5 358.9 47.7 365.4C39.4 368.3 32 375.2 32 384L32 448C32 483.3 60.7 512 96 512L544 512C579.3 512 608 483.3 608 448L608 384C608 375.2 600.6 368.3 592.3 365.4C573.5 358.9 560 341 560 320C560 299 573.5 281.1 592.3 274.6C600.6 271.7 608 264.8 608 256L608 192C608 156.7 579.3 128 544 128L96 128zM448 400L448 240L192 240L192 400L448 400zM144 224C144 206.3 158.3 192 176 192L464 192C481.7 192 496 206.3 496 224L496 416C496 433.7 481.7 448 464 448L176 448C158.3 448 144 433.7 144 416L144 224z" />
                        </svg>
                    </div>
                    <div class="tickets-section__ticket-item-title">
                        <h3><?= __('Acces General | 1 zi', 'espressoole') ?></h3>
                    </div>
                    <div class="tickets-section__ticket-item-price">
                        <h2>
                            <span class="price">70,00</span>
                            <span class="currency">RON</span>
                        </h2>
                        <p>
                            <span class="price">90,00</span>
                            <span class="currency">RON</span>
                        </p>
                    </div>
                    <div>
                        <a class="tickets-section__ticket-item-cta" href="<?= esc_url( get_permalink( pll_get_post( pll_get_post( get_page_by_path( 'bilete' )->ID, pll_current_language() ), pll_current_language() ) ) ); ?>"><?= __('Cumpără bilet', 'espressoole') ?></a>
                    </div>
                </div>
                <div class="tickets-section__ticket-item">
                    <div class="tickets-section__ticket-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M96 128C60.7 128 32 156.7 32 192L32 256C32 264.8 39.4 271.7 47.7 274.6C66.5 281.1 80 299 80 320C80 341 66.5 358.9 47.7 365.4C39.4 368.3 32 375.2 32 384L32 448C32 483.3 60.7 512 96 512L544 512C579.3 512 608 483.3 608 448L608 384C608 375.2 600.6 368.3 592.3 365.4C573.5 358.9 560 341 560 320C560 299 573.5 281.1 592.3 274.6C600.6 271.7 608 264.8 608 256L608 192C608 156.7 579.3 128 544 128L96 128zM448 400L448 240L192 240L192 400L448 400zM144 224C144 206.3 158.3 192 176 192L464 192C481.7 192 496 206.3 496 224L496 416C496 433.7 481.7 448 464 448L176 448C158.3 448 144 433.7 144 416L144 224z" />
                        </svg>
                    </div>
                    <div class="tickets-section__ticket-item-title">
                        <h3><?= __('Acces VIP | 1 zi', 'espressoole') ?></h3>
                    </div>
                    <div class="tickets-section__ticket-item-price">
                        <h2>
                            <span class="price">300,00</span>
                            <span class="currency">RON</span>
                        </h2>
                        <p>
                            <span class="price">350,00</span>
                            <span class="currency">RON</span>
                        </p>
                    </div>
                    <div>
                        <a class="tickets-section__ticket-item-cta" href="<?= esc_url( get_permalink( pll_get_post( pll_get_post( get_page_by_path( 'bilete' )->ID, pll_current_language() ), pll_current_language() ) ) ); ?>"><?= __('Cumpără bilet', 'espressoole') ?></a>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>

<section class="location-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6768.412888614991!2d26.085353808388934!3d44.49943946639573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b202f6325a75b9%3A0x405641d207df44d5!2sRomaero!5e0!3m2!1sen!2sro!4v1753536415124!5m2!1sen!2sro" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Maps Location"></iframe>
</section>