<?php

wp_enqueue_script('espressoole-map', ESPRESSOOLE_URL . '/assets/js/map.js', ['espressoole-gsap']);
wp_localize_script('espressoole-map', 'espressooleMap', [
    'modal' => [
        'main-stage' => [
            'title' => __('Scena Principală','espressoole'),
            'content' => __('Pregătește-te pentru un spectacol de neuitat pe <strong>Scena Principală</strong> Espressoole! Aici vei fi martorul unor demonstrații live susținute de barista de top, vei învăța secretele cafelei perfecte de la experți recunoscuți internațional și te vei bucura de sesiuni de degustare interactive. Pe parcursul zilei, scena va prinde viață cu muzică live, panouri de discuții despre cele mai noi tendințe din lumea cafelei și momente surpriză care te vor ține conectat la inima evenimentului. Nu rata ocazia de a fi inspirat și de a-ți extinde orizonturile cafelei!','espressoole'),
        ],
        'vip-lounge' => [
            'title' => __('VIP Lounge','espressoole'),
            'content' => __('Relaxează-te și bucură-te de o experiență exclusivistă în <strong>VIP Lounge</strong>. Acest spațiu elegant este dedicat oaspeților noștri speciali, oferind un refugiu liniștit departe de agitația evenimentului. Te vei delecta cu cafea de specialitate preparată personalizat, gustări rafinate și o selecție premium de băuturi. Este locul ideal pentru networking, întâlniri de afaceri sau pur și simplu pentru a te bucura de confort sporit, într-o atmosferă intimă. Accesul este limitat, asigurând o experiență de neuitat și servicii impecabile.','espressoole'),
        ],
        'cafenele' => [
            'title' => __('Cafenele','espressoole'),
            'content' => __('Descoperă o varietate impresionantă de arome și stiluri în zona noastră dedicată <strong>Cafenelelor</strong>. Aici, vei găsi o selecție curată a celor mai inovatoare și apreciate cafenele din țară, fiecare aducând propria viziune și pasiune pentru cafea. De la espresso-uri clasice la băuturi inovatoare cu lapte, ai ocazia să explorezi noi gusturi, să interacționezi cu barista talentați și să îți găsești următoarea cafea preferată. Fiecare stand este o poartă către o nouă poveste a cafelei.','espressoole'),
        ],
        'coffee-village' => [
            'title' => __('Coffee Village','espressoole'),
            'content' => __('Pășește în inima culturii cafelei la <strong>Coffee Village</strong>! Acest sat vibrant reunește producători de cafea, prăjitori, distribuitori de echipamente și accesorii, oferindu-ți o panoramă completă a industriei. Vei putea degusta boabe rare, învăța despre procesul de prăjire, descoperi cele mai noi inovații în materie de echipamente și chiar achiziționa produse unice. Este locul perfect pentru a te scufunda în universul cafelei, a face networking și a descoperi noi afaceri și parteneriate.','espressoole'),
        ],
        'food-trucks' => [
            'title' => __('Food Trucks','espressoole'),
            'content' => __('Completează-ți experiența Espressoole cu delicii culinare variate, disponibile la zona noastră de <strong>Food Trucks</strong>. De la gustări rapide și savuroase la mese complete, vei găsi o gamă diversă de opțiuni care să-ți satisfacă orice poftă. Descoperă bucătării internaționale, specialități locale și deserturi tentante, perfecte pentru a-ți reîncărca bateriile între sesiunile de degustare de cafea. Indiferent de preferințele tale, vei găsi ceva delicios care să-ți încânte papilele gustative.','espressoole'),
        ],
        'brunch' => [
            'title' => __('Brunch','espressoole'),
            'content' => __('Răsfață-te cu un <strong>Brunch</strong> delicios, conceput special pentru a completa perfect aromele bogate ale cafelei. Zona de brunch oferă o selecție rafinată de preparate dulci și sărate, de la patiserii proaspete și sandvișuri gourmet, la salate revigorante și opțiuni vegane. Este locul ideal pentru a te bucura de o masă relaxată alături de prieteni, într-o atmosferă primitoare. Începe-ți ziua la eveniment cu energie și savoare, combinând cafeaua de calitate cu o masă pe măsură.','espressoole'),
        ],
        'bar' => [
            'title' => __('Bar','espressoole'),
            'content' => __('După o zi plină de arome și descoperiri, relaxează-te la <strong>Barul</strong> nostru, unde vei găsi o selecție excelentă de băuturi. De la cocktailuri clasice cu infuzii de cafea și băuturi răcoritoare, la o gamă variată de beri artizanale și vinuri selectate, barul este locul perfect pentru a te destinde. Bucură-te de o băutură într-o atmosferă vibrantă, alături de ceilalți participanți, și încheie-ți ziua de eveniment într-o notă relaxantă și plină de voie bună.','espressoole'),
        ],
        'restrooms' => [
            'title' => __('Toalete','espressoole'),
            'content' => __('Confortul tău este important pentru noi. Am asigurat facilități <strong>Toalete</strong> curate și bine întreținute, amplasate strategic în incinta evenimentului, pentru a-ți asigura o experiență cât mai plăcută și lipsită de griji. Semnalizarea clară te va ghida rapid către cele mai apropiate toalete, iar personalul nostru va asigura igienizarea constantă pe tot parcursul zilei. Ne dorim să te simți confortabil și relaxat pe durata vizitei tale la Espressoole.','espressoole'),
        ],
        'parcare' => [
            'title' => __('Activări Auto-Moto','espressoole'),
           'content' => __('Pregătește-te pentru o doză de adrenalină la zona de <strong>Activări Auto-Moto</strong>! Aici, vei fi martorul unor demonstrații spectaculoase cu mașini și motociclete, vei admira modele clasice și de ultimă generație și vei putea interacționa cu experți din domeniu. Descoperă cele mai noi tehnologii, participă la concursuri tematice și simte pulsul inovației pe două sau patru roți. Această zonă aduce un plus de energie și acțiune evenimentului, transformând pasiunea pentru cafea într-o experiență completă, ce include și motoarele.','espressoole'),

        ],
        'family-corner' => [
            'title' => __('Family Corner','espressoole'),
            'content' => __('Evenimentul Espressoole este o experiență pentru întreaga familie! În <strong>Family Corner</strong>, cei mici se vor bucura de activități creative și distractive, într-un spațiu sigur și supravegheat. De la ateliere de desen la jocuri interactive, am pregătit momente memorabile pentru copii, permițând părinților să se bucure în liniște de eveniment. Este locul ideal pentru ca familiile să se relaxeze și să creeze amintiri frumoase împreună.','espressoole'),
        ],
        'sponsors' => [
            'title' => __('Sponsori','espressoole'),
            'content' => __('Mulțumim partenerilor și <strong>Sponsorilor</strong> noștri, fără de care evenimentul Espressoole nu ar fi posibil. Vă invităm să vizitați standurile acestora pentru a descoperi produse și servicii inovatoare, oferte speciale și pentru a interacționa direct cu reprezentanții lor. Sprijinul lor ne permite să oferim o experiență de înaltă calitate și să aducem la un loc comunitatea pasionaților de cafea. Aflați mai multe despre companiile care cred în viziunea noastră!','espressoole'),
        ],
    ]
]);



?>

<section class="map-section first-section-padding single-section-page section-lateral-padding">
    <div class="content-box content-centered">
        <div class="heading-container center light">

            <h2><?= __('Urban Ritual Map', 'espressoole') ?></h2>
        </div>

        <div class="map-section__content">
            <svg class="party-map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 819.84 579.01">
                <defs>
                    <clipPath id="clippath">
                        <rect x="419.28" y="155.88" width="171.28" height="171.29" transform="translate(-4.84 10.39) rotate(-1.17)" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-1">
                        <rect x="419.28" y="155.88" width="171.29" height="171.28" transform="translate(-4.84 10.39) rotate(-1.17)" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-2">
                        <polygon points="53.54 209.36 52.68 349.77 175.88 285.08 176.74 144.67 53.54 209.36" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-3">
                        <polygon points="52.68 349.77 175.88 285.08 176.74 144.67 53.54 209.36 52.68 349.77" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-4">
                        <polygon points="516.84 228.2 515.98 368.61 639.18 303.92 640.04 163.51 516.84 228.2" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-5">
                        <polygon points="515.98 368.61 639.18 303.92 640.04 163.51 516.84 228.2 515.98 368.61" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-6">
                        <polygon points="337.3 374.02 339.34 528.48 476.44 467.16 474.4 312.69 337.3 374.02" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-7">
                        <polygon points="339.34 528.48 476.44 467.16 474.4 312.69 337.3 374.02 339.34 528.48" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-8">
                        <polygon points="209.99 157.19 210.31 300.08 338.13 234.21 337.8 91.32 209.99 157.19" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-9">
                        <polygon points="210.31 300.08 338.13 234.21 337.8 91.32 209.99 157.19 210.31 300.08" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-10">
                        <polygon points="387.96 0 280.14 57.46 280.84 195.7 398.94 132.75 398.27 0 387.96 0" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-11">
                        <polygon points="280.83 195.7 398.94 132.75 398.25 -5.48 280.14 57.46 280.83 195.7" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-12">
                        <polygon points="295.71 455.44 296.88 527.09 366.04 504.79 364.87 433.13 295.71 455.44" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-13">
                        <polygon points="296.88 527.09 366.04 504.78 364.87 433.13 295.71 455.44 296.88 527.09" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-14">
                        <rect x="686.2" y="491.85" width="133.63" height="87.15" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-15">
                        <rect x="686.2" y="491.85" width="133.63" height="87.15" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-16">
                        <polygon points="91.76 80.48 91.89 239.6 248.95 197.46 248.82 38.34 91.76 80.48" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-17">
                        <polygon points="91.89 239.6 248.95 197.46 248.82 38.34 91.76 80.48 91.89 239.6" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-18">
                        <polygon points="433.62 423.45 422.76 565.9 555.62 554.78 566.47 412.34 433.62 423.45" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-19">
                        <polygon points="422.76 565.9 555.62 554.78 566.47 412.34 433.61 423.45 422.76 565.9" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-20">
                        <polygon points="664.51 304.62 664.51 404.89 757.95 370.86 757.95 270.59 664.51 304.62" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-21">
                        <polygon points="757.95 370.86 664.5 404.89 664.5 304.62 757.95 270.59 757.95 370.86" style="fill: none;" />
                    </clipPath>
                    <clipPath id="clippath-22">
                        <rect x="248.39" y="320.21" width="100.96" height="100.96" style="fill: none;" />
                    </clipPath>
                </defs>
                <g>
                    <g>
                        <polygon points="805.85 367.07 315.23 89.55 0 270.57 487.49 550.87 805.85 367.07" style="fill: #ffecda;" />
                        <polygon points="487.49 550.87 .08 270.59 0 290.21 487.44 570.59 805.79 386.79 805.85 367.07 487.49 550.87" style="fill: #eec2a3;" />
                        <polygon points="550.71 222.76 233.57 404.89 0 270.58 315.23 89.55 550.71 222.76" style="fill: #ccbeb4;" />
                        <polygon points="593.1 246.95 471.09 317.02 381.22 265.35 502.5 195.7 593.1 246.95" style="fill: #d4a1c9;" />
                        <polygon points="683.75 298.26 561.23 368.61 471 316.73 592.78 246.79 683.75 298.26" style="fill: #deb787;" />
                        <polygon points="771.42 347.57 691.73 393.35 640.04 363.61 719.31 318.08 771.42 347.57" style="fill: #d0e4a2;" />
                        <polygon points="365.07 389.01 285.47 434.73 247.04 412.62 326.31 367.09 365.07 389.01" style="fill: #fbd4de;" />
                        <polygon points="547.18 493.97 467.58 539.69 429.14 517.58 508.42 472.05 547.18 493.97" style="fill: silver;" />
                        <polygon points="706.26 447 706.26 466.67 624.04 514.13 604.57 502.93 604.57 483.2 604.59 483.2 623.98 494.35 624.09 494.43 670.22 467.79 670.47 467.66 706.16 447.04 706.26 447" style="fill: #eec2a3;" />
                        <polygon points="706.25 447.1 623.95 494.38 604.57 483.23 686.71 436.05 706.25 447.1" style="fill: #aed8e6;" />
                        <polygon points="203.17 178.16 158.59 203.75 137.54 191.64 181.95 166.14 203.17 178.16" style="fill: #b73026;" />
                        <polygon points="321.04 249.77 284.77 270.59 223.53 235.39 259.36 214.82 321.04 249.77" style="fill: wheat;" />
                        <g>
                            <polygon points="84.2 256.01 51.6 274.72 36.21 265.87 68.69 247.22 84.2 256.01" style="fill: #8c5d3e;" />
                            <polygon points="106.65 268.57 74.06 287.28 58.66 278.43 91.14 259.78 106.65 268.57" style="fill: #8c5d3e;" />
                            <polygon points="128.86 281.31 96.26 300.02 80.86 291.17 113.34 272.52 128.86 281.31" style="fill: #8c5d3e;" />
                            <polygon points="151.46 294 118.86 312.71 103.46 303.86 135.94 285.21 151.46 294" style="fill: #8c5d3e;" />
                            <polygon points="173.7 306.67 141.1 325.38 125.71 316.53 158.19 297.88 173.7 306.67" style="fill: #8c5d3e;" />
                            <polygon points="196.25 319.29 163.65 338 148.25 329.15 180.73 310.5 196.25 319.29" style="fill: #8c5d3e;" />
                        </g>
                        <g>
                            <polygon points="330.88 113.23 298.28 131.94 282.88 123.09 315.36 104.44 330.88 113.23" style="fill: #e57760;" />
                            <polygon points="353.33 125.8 320.73 144.51 305.33 135.66 337.81 117.01 353.33 125.8" style="fill: #e57760;" />
                            <polygon points="375.53 138.53 342.93 157.24 327.54 148.39 360.02 129.74 375.53 138.53" style="fill: #e57760;" />
                            <polygon points="398.13 151.22 365.53 169.93 350.14 161.08 382.62 142.43 398.13 151.22" style="fill: #e57760;" />
                        </g>
                        <polygon points="420.47 508.99 369.33 538.71 240.99 464.71 291.96 435.11 420.47 508.99" style="fill: #ffecda;" />
                        <polygon points="417.54 510.64 417.54 530.32 369.23 558.21 240.99 484.46 240.99 464.71 369.29 538.49 417.54 510.64" style="fill: #eec2a3;" />
                        <g>
                            <polygon points="292.79 462.5 302.05 467.83 295.63 471.5 286.37 466.18 292.79 462.5" style="fill: #4c763b;" />
                            <polygon points="302.96 468.37 312.21 473.7 305.8 477.37 296.54 472.05 302.96 468.37" style="fill: #4c763b;" />
                            <polygon points="313.12 474.24 322.38 479.57 315.97 483.24 306.71 477.92 313.12 474.24" style="fill: #4c763b;" />
                            <polygon points="323.29 480.11 332.55 485.44 326.13 489.12 316.88 483.79 323.29 480.11" style="fill: #4c763b;" />
                            <polygon points="333.46 485.98 342.72 491.31 336.3 494.99 327.04 489.66 333.46 485.98" style="fill: #4c763b;" />
                            <polygon points="343.63 491.85 352.88 497.18 346.47 500.86 337.21 495.53 343.63 491.85" style="fill: #4c763b;" />
                            <polygon points="353.79 497.72 363.05 503.05 356.64 506.73 347.38 501.4 353.79 497.72" style="fill: #4c763b;" />
                            <polygon points="363.96 503.59 373.22 508.92 366.8 512.6 357.55 507.27 363.96 503.59" style="fill: #4c763b;" />
                            <polygon points="374.13 509.47 383.39 514.79 376.97 518.47 367.71 513.14 374.13 509.47" style="fill: #4c763b;" />
                            <polygon points="384.3 515.34 393.56 520.66 387.14 524.34 377.88 519.01 384.3 515.34" style="fill: #4c763b;" />
                            <polygon points="283.62 467.95 292.88 473.27 286.46 476.95 277.2 471.63 283.62 467.95" style="fill: #4c763b;" />
                            <polygon points="293.79 473.82 303.05 479.14 296.63 482.82 287.37 477.5 293.79 473.82" style="fill: #4c763b;" />
                            <polygon points="303.95 479.69 313.21 485.01 306.8 488.69 297.54 483.37 303.95 479.69" style="fill: #4c763b;" />
                            <polygon points="314.12 485.56 323.38 490.88 316.97 494.56 307.71 489.24 314.12 485.56" style="fill: #4c763b;" />
                            <polygon points="324.29 491.43 333.55 496.76 327.13 500.43 317.87 495.11 324.29 491.43" style="fill: #4c763b;" />
                            <polygon points="334.46 497.3 343.72 502.63 337.3 506.3 328.04 500.98 334.46 497.3" style="fill: #4c763b;" />
                            <polygon points="344.62 503.17 353.88 508.5 347.47 512.17 338.21 506.85 344.62 503.17" style="fill: #4c763b;" />
                            <polygon points="354.79 509.04 364.05 514.37 357.64 518.04 348.38 512.72 354.79 509.04" style="fill: #4c763b;" />
                            <polygon points="364.96 514.91 374.22 520.24 367.8 523.92 358.54 518.59 364.96 514.91" style="fill: #4c763b;" />
                            <polygon points="375.13 520.78 384.39 526.11 377.97 529.79 368.71 524.46 375.13 520.78" style="fill: #4c763b;" />
                            <polygon points="274.78 472.87 284.04 478.2 277.63 481.88 268.37 476.55 274.78 472.87" style="fill: #4c763b;" />
                            <polygon points="284.95 478.74 294.21 484.07 287.79 487.75 278.54 482.42 284.95 478.74" style="fill: #4c763b;" />
                            <polygon points="295.12 484.61 304.38 489.94 297.96 493.62 288.7 488.29 295.12 484.61" style="fill: #4c763b;" />
                            <polygon points="305.29 490.48 314.54 495.81 308.13 499.49 298.87 494.16 305.29 490.48" style="fill: #4c763b;" />
                            <polygon points="315.45 496.36 324.71 501.68 318.3 505.36 309.04 500.03 315.45 496.36" style="fill: #4c763b;" />
                            <polygon points="325.62 502.23 334.88 507.55 328.46 511.23 319.21 505.9 325.62 502.23" style="fill: #4c763b;" />
                            <polygon points="335.79 508.1 345.05 513.42 338.63 517.1 329.37 511.77 335.79 508.1" style="fill: #4c763b;" />
                            <polygon points="345.96 513.97 355.21 519.29 348.8 522.97 339.54 517.64 345.96 513.97" style="fill: #4c763b;" />
                            <polygon points="356.12 519.84 365.38 525.16 358.97 528.84 349.71 523.52 356.12 519.84" style="fill: #4c763b;" />
                            <polygon points="366.29 525.71 375.55 531.03 369.14 534.71 359.88 529.39 366.29 525.71" style="fill: #4c763b;" />
                        </g>
                        <g>
                            <polygon points="411.39 447.85 369.78 471.74 353.88 462.6 395.47 438.71 411.39 447.85" style="fill: #e9bfbb;" />
                            <polygon points="436.99 462.72 395.38 486.61 379.49 477.47 421.08 453.58 436.99 462.72" style="fill: #e9bfbb;" />
                            <polygon points="463.55 477.91 421.94 501.8 406.04 492.66 447.63 468.77 463.55 477.91" style="fill: #e9bfbb;" />
                        </g>
                        <g class="party-map__button" id="main-stage">
                            <g style="clip-path: url(#clippath-16);">
                                <g style="clip-path: url(#clippath-17);">
                                    <image width="2048" height="2048" transform="translate(91.76 80.48) rotate(-15.02) scale(.08) skewX(-14.19)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map9.png" />
                                </g>
                            </g>
                        </g>
                        <g class="party-map__button" id="vip-lounge">
                            <g style="clip-path: url(#clippath);">
                                <g style="clip-path: url(#clippath-1);">
                                    <image width="2048" height="2048" transform="translate(417.54 157.65) rotate(-1.17) scale(.08)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map1.png" />
                                </g>
                            </g>
                        </g>
                        <g class="party-map__button" id="cafenele">
                            <g style="clip-path: url(#clippath-2);">
                                <g style="clip-path: url(#clippath-3);">
                                    <image width="2048" height="2048" transform="translate(53.54 209.36) rotate(-27.71) scale(.07) skewX(-25.39)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map2.png" />
                                </g>
                            </g>
                        </g>
                        <g class="party-map__button" id="coffee-village">
                            <g style="clip-path: url(#clippath-4);">
                                <g style="clip-path: url(#clippath-5);">
                                    <image width="2048" height="2048" transform="translate(516.84 228.2) rotate(-27.71) scale(.07) skewX(-25.39)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map3.png" />
                                </g>
                            </g>
                        </g>
                        <g class="party-map__button" id="food-trucks">
                            <g style="clip-path: url(#clippath-6);">
                                <g style="clip-path: url(#clippath-7);">
                                    <image width="2048" height="2048" transform="translate(337.3 374.02) rotate(-24.1) scale(.07) skewX(-22.17)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map4.png" />
                                </g>
                            </g>
                        </g>
                        <g class="party-map__button" id="brunch">
                            <g style="clip-path: url(#clippath-8);">
                                <g style="clip-path: url(#clippath-9);">
                                    <image width="2048" height="2048" transform="translate(209.99 157.19) rotate(-27.26) scale(.07) skewX(-24.38)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map5.png" />
                                </g>
                            </g>
                        </g>
                        <g class="party-map__button" id="bar">
                            <g style="clip-path: url(#clippath-10);">
                                <g style="clip-path: url(#clippath-11);">
                                    <image width="2048" height="2048" transform="translate(280.14 57.46) rotate(-28.06) scale(.07) skewX(-25.7)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map6.png" />
                                </g>
                            </g>
                        </g>
                        <g class="party-map__button" id="restrooms">
                            <g style="clip-path: url(#clippath-12);">
                                <g style="clip-path: url(#clippath-13);">
                                    <image width="2048" height="2048" transform="translate(295.71 455.44) rotate(-17.88) scale(.04) skewX(-16.03)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map7.png" />
                                </g>
                            </g>
                        </g>
                        <g style="clip-path: url(#clippath-14);">
                            <g style="clip-path: url(#clippath-15);">
                                <image width="1357" height="885" transform="translate(686.2 491.85) scale(.1)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map8.png" />
                            </g>
                        </g>

                        <g class="party-map__button" id="parcare">
                            <g style="clip-path: url(#clippath-18);">
                                <g style="clip-path: url(#clippath-19);">
                                    <image width="2048" height="2048" transform="translate(433.61 423.45) rotate(-4.78) scale(.07) skewX(-9.66)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map10.png" />
                                </g>
                            </g>
                        </g>
                        <g class="party-map__button" id="family-corner">
                            <g style="clip-path: url(#clippath-20);">
                                <g style="clip-path: url(#clippath-21);">
                                    <image width="2048" height="2048" transform="translate(757.95 270.59) rotate(159.99) scale(.05 -.05) skewX(19.03)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map11.png" />
                                </g>
                            </g>
                        </g>
                        <g class="party-map__button" id="sponsors">
                            <g style="clip-path: url(#clippath-22);">
                                <image width="2048" height="2048" transform="translate(248.39 320.21) scale(.05)" xlink:href="<?= ESPRESSOOLE_URL ?>/assets/img/map/espressoole_map12.png" />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>

            <div class="map-section__legend">
                <div class="heading-container left light">
                    <h3><?= __('Legendă', 'espressoole') ?></h3>
                </div>
                <div class="map-section__legend-list">
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background: #b73026"></div>
                        <p>
                            <?= __('Main Stage', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background: #deb787"></div>
                        <p>
                            <?= __('Coffee Village', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background: #d4a1c9"></div>
                        <p>
                            <?= __('VIP Lounge', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background: #aed8e6 "></div>
                        <p>
                            <?= __('Check-in', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background: #f5deb3 "></div>
                        <p>
                            <?= __('Brunch', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background: #8c5d3e"></div>
                        <p>
                            <?= __('Cafenele', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background: #e9bfbb"></div>
                        <p>
                            <?= __('Food Trucks', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background:#e57760 "></div>
                        <p>
                            <?= __('Bar', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background:#d0e4a2 "></div>
                        <p>
                            <?= __('Family Corner', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background:#fbd4de "></div>
                        <p>
                            <?= __('Sponsori', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background:#c0c0c0 "></div>
                        <p>
                            <?= __('Activări Auto-Moto', 'espressoole') ?>
                        </p>
                    </div>
                    <div class="map-section__legend-item">
                        <div class="map-section__legend-item-color" style="background: #4c763b"></div>
                        <p>
                            <?= __('Toalete', 'espressoole') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal__map-info" id="modal__map-info">
    <div class="modal_map-info-box">
        <div class="modal_map-info__header">
            <h2><?= __('Informații despre hartă', 'espressoole') ?></h2>
            <button class="modal_map-info__close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                </svg></button>
        </div>
        <div class="modal_map-info__content">

        </div>
    </div>
</div>