<?php

wp_enqueue_script('espressoole-gsap-st', ESPRESSOOLE_URL . '/assets/js/gsap/minified/ScrollTrigger.min.js', ['espressoole-gsap']);
wp_enqueue_script('espressoole-homepage', ESPRESSOOLE_URL . '/assets/js/homepage.js', ['espressoole-gsap', 'espressoole-gsap-st']);

wp_enqueue_script('espressoole-map', ESPRESSOOLE_URL . '/assets/js/map.js', ['espressoole-gsap']);
wp_localize_script('espressoole-map', 'espressooleMap', [
    'modal' => [
        'main-stage' => [
            'title' => __('Scena Principală', 'espressoole'),
            'content' => __('Pregătește-te pentru un spectacol de neuitat pe <strong>Scena Principală</strong> Espressoole! Aici vei fi martorul unor demonstrații live susținute de barista de top, vei învăța secretele cafelei perfecte de la experți recunoscuți internațional și te vei bucura de sesiuni de degustare interactive. Pe parcursul zilei, scena va prinde viață cu muzică live, panouri de discuții despre cele mai noi tendințe din lumea cafelei și momente surpriză care te vor ține conectat la inima evenimentului. Nu rata ocazia de a fi inspirat și de a-ți extinde orizonturile cafelei!', 'espressoole'),
        ],
        'vip-lounge' => [
            'title' => __('VIP Lounge', 'espressoole'),
            'content' => __('Relaxează-te și bucură-te de o experiență exclusivistă în <strong>VIP Lounge</strong>. Acest spațiu elegant este dedicat oaspeților noștri speciali, oferind un refugiu liniștit departe de agitația evenimentului. Te vei delecta cu cafea de specialitate preparată personalizat, gustări rafinate și o selecție premium de băuturi. Este locul ideal pentru networking, întâlniri de afaceri sau pur și simplu pentru a te bucura de confort sporit, într-o atmosferă intimă. Accesul este limitat, asigurând o experiență de neuitat și servicii impecabile.', 'espressoole'),
        ],
        'cafenele' => [
            'title' => __('Cafenele', 'espressoole'),
            'content' => __('Descoperă o varietate impresionantă de arome și stiluri în zona noastră dedicată <strong>Cafenelelor</strong>. Aici, vei găsi o selecție curată a celor mai inovatoare și apreciate cafenele din țară, fiecare aducând propria viziune și pasiune pentru cafea. De la espresso-uri clasice la băuturi inovatoare cu lapte, ai ocazia să explorezi noi gusturi, să interacționezi cu barista talentați și să îți găsești următoarea cafea preferată. Fiecare stand este o poartă către o nouă poveste a cafelei.', 'espressoole'),
        ],
        'coffee-village' => [
            'title' => __('Coffee Village', 'espressoole'),
            'content' => __('Pășește în inima culturii cafelei la <strong>Coffee Village</strong>! Acest sat vibrant reunește producători de cafea, prăjitori, distribuitori de echipamente și accesorii, oferindu-ți o panoramă completă a industriei. Vei putea degusta boabe rare, învăța despre procesul de prăjire, descoperi cele mai noi inovații în materie de echipamente și chiar achiziționa produse unice. Este locul perfect pentru a te scufunda în universul cafelei, a face networking și a descoperi noi afaceri și parteneriate.', 'espressoole'),
        ],
        'food-trucks' => [
            'title' => __('Food Trucks', 'espressoole'),
            'content' => __('Completează-ți experiența Espressoole cu delicii culinare variate, disponibile la zona noastră de <strong>Food Trucks</strong>. De la gustări rapide și savuroase la mese complete, vei găsi o gamă diversă de opțiuni care să-ți satisfacă orice poftă. Descoperă bucătării internaționale, specialități locale și deserturi tentante, perfecte pentru a-ți reîncărca bateriile între sesiunile de degustare de cafea. Indiferent de preferințele tale, vei găsi ceva delicios care să-ți încânte papilele gustative.', 'espressoole'),
        ],
        'brunch' => [
            'title' => __('Brunch', 'espressoole'),
            'content' => __('Răsfață-te cu un <strong>Brunch</strong> delicios, conceput special pentru a completa perfect aromele bogate ale cafelei. Zona de brunch oferă o selecție rafinată de preparate dulci și sărate, de la patiserii proaspete și sandvișuri gourmet, la salate revigorante și opțiuni vegane. Este locul ideal pentru a te bucura de o masă relaxată alături de prieteni, într-o atmosferă primitoare. Începe-ți ziua la eveniment cu energie și savoare, combinând cafeaua de calitate cu o masă pe măsură.', 'espressoole'),
        ],
        'bar' => [
            'title' => __('Bar', 'espressoole'),
            'content' => __('După o zi plină de arome și descoperiri, relaxează-te la <strong>Barul</strong> nostru, unde vei găsi o selecție excelentă de băuturi. De la cocktailuri clasice cu infuzii de cafea și băuturi răcoritoare, la o gamă variată de beri artizanale și vinuri selectate, barul este locul perfect pentru a te destinde. Bucură-te de o băutură într-o atmosferă vibrantă, alături de ceilalți participanți, și încheie-ți ziua de eveniment într-o notă relaxantă și plină de voie bună.', 'espressoole'),
        ],
        'restrooms' => [
            'title' => __('Toalete', 'espressoole'),
            'content' => __('Confortul tău este important pentru noi. Am asigurat facilități <strong>Toalete</strong> curate și bine întreținute, amplasate strategic în incinta evenimentului, pentru a-ți asigura o experiență cât mai plăcută și lipsită de griji. Semnalizarea clară te va ghida rapid către cele mai apropiate toalete, iar personalul nostru va asigura igienizarea constantă pe tot parcursul zilei. Ne dorim să te simți confortabil și relaxat pe durata vizitei tale la Espressoole.', 'espressoole'),
        ],
        'parcare' => [
            'title' => __('Activări Auto-Moto', 'espressoole'),
            'content' => __('Pregătește-te pentru o doză de adrenalină la zona de <strong>Activări Auto-Moto</strong>! Aici, vei fi martorul unor demonstrații spectaculoase cu mașini și motociclete, vei admira modele clasice și de ultimă generație și vei putea interacționa cu experți din domeniu. Descoperă cele mai noi tehnologii, participă la concursuri tematice și simte pulsul inovației pe două sau patru roți. Această zonă aduce un plus de energie și acțiune evenimentului, transformând pasiunea pentru cafea într-o experiență completă, ce include și motoarele.', 'espressoole'),

        ],
        'family-corner' => [
            'title' => __('Family Corner', 'espressoole'),
            'content' => __('Evenimentul Espressoole este o experiență pentru întreaga familie! În <strong>Family Corner</strong>, cei mici se vor bucura de activități creative și distractive, într-un spațiu sigur și supravegheat. De la ateliere de desen la jocuri interactive, am pregătit momente memorabile pentru copii, permițând părinților să se bucure în liniște de eveniment. Este locul ideal pentru ca familiile să se relaxeze și să creeze amintiri frumoase împreună.', 'espressoole'),
        ],
        'sponsors' => [
            'title' => __('Sponsori', 'espressoole'),
            'content' => __('Mulțumim partenerilor și <strong>Sponsorilor</strong> noștri, fără de care evenimentul Espressoole nu ar fi posibil. Vă invităm să vizitați standurile acestora pentru a descoperi produse și servicii inovatoare, oferte speciale și pentru a interacționa direct cu reprezentanții lor. Sprijinul lor ne permite să oferim o experiență de înaltă calitate și să aducem la un loc comunitatea pasionaților de cafea. Aflați mai multe despre companiile care cred în viziunea noastră!', 'espressoole'),
        ],
    ]
]);

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
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 162.74 108.75">
                <g>
                    <g>
                        <g class="hero-section__logo_disc-group">
                            <path d="m110.45,35.09c-1.4,0-2.76.16-4.08.44v37.52c1.32.28,2.68.44,4.08.44,10.61,0,19.2-8.6,19.2-19.21s-8.6-19.2-19.2-19.2" style="fill: #ff5c00;" />

                            <path d="m158.75,34.27C149.43,11.78,126.12-.77,103.05,2.52c1.96.9,3.32,2.87,3.32,5.16v27.86c3.7-.81,7.66-.54,11.42,1.01,9.8,4.06,14.45,15.28,10.4,25.08-3.61,8.72-12.91,13.35-21.82,11.4v28.02c0,2.18-1.22,4.06-3.02,5.02,8.9,1.24,18.23.21,27.12-3.48,26.64-11.04,39.33-41.7,28.29-68.33" style="fill: #f0e2c5;" />
                            <path d="m112.54,55.16c.48-1.16-.07-2.48-1.23-2.96-1.16-.48-2.49.07-2.96,1.23-.48,1.16.07,2.49,1.23,2.96,1.16.48,2.49-.07,2.96-1.23" style="fill: #f0e2c5;" />
                        </g>
                        <g class="hero-section__logo_text-group">

                            <path d="m39.93,32.18l2.23-10.48h-1.54l.5-2.31h1.52l.27-1.26c.5-2.33,1.37-3.67,3.81-3.67.42,0,1.17.11,1.39.19l-.51,2.31c-.18-.03-.41-.08-.66-.08-.82,0-1.01.49-1.2,1.36l-.25,1.15h1.78l-.5,2.31h-1.76l-2.23,10.48h-2.86Z" style="fill: #f0e2c5;" />
                            <path d="m50.14,23.72c.44-2.1.73-3.43.88-4.33h2.72c-.07.54-.13.95-.35,2.08.83-1.59,2.06-2.27,3.75-2.27l-.68,3.12c-2.13-.14-3.3.78-3.88,3.46l-1.36,6.41h-2.88l1.8-8.46Z" style="fill: #f0e2c5;" />
                            <path d="m62.1,26.49c-.11.58-.17,1.12-.17,1.58,0,1.21.39,1.97,1.35,1.97,1.11,0,1.57-.73,1.87-1.49h2.79c-.5,1.67-1.9,3.83-4.91,3.83-4.03,0-4.21-3.63-3.61-6.74.63-3.15,2.36-6.45,5.82-6.45,3.83,0,4.27,3.34,3.48,6.37l-.24.94h-6.38Zm4.02-2.09c.09-.41.17-.83.17-1.21,0-.96-.29-1.68-1.35-1.68-1.26,0-2,1.41-2.38,2.89h3.56Z" style="fill: #f0e2c5;" />
                            <path d="m74.68,28.4c0,.82.25,1.82,1.49,1.82.78,0,1.33-.32,1.49-1.05.21-.98-.1-1.62-1.68-2.6-2.44-1.51-2.9-2.78-2.53-4.49.35-1.6,1.56-2.89,3.9-2.89,3.26,0,4.1,2.19,3.9,3.89h-2.64c0-.97-.26-1.73-1.28-1.73-.5,0-1.01.18-1.17.9-.19.82.1,1.3,1.35,2.07,2.77,1.69,3.28,3,2.92,4.93-.37,1.97-1.97,3.13-4.45,3.13-3.39,0-4.07-2.24-4-3.98h2.68Z" style="fill: #f0e2c5;" />
                            <path d="m90.68,14.63l-1.27,5.94c.6-.75,1.56-1.37,2.96-1.37,2.04,0,3.11,1.34,2.56,3.95l-1.92,9.03h-2.84l1.81-8.55c.26-1.25.05-2.03-1.09-2.03-1.25,0-1.91,1.11-2.28,2.8l-1.66,7.78h-2.88l3.73-17.55h2.88Z" style="fill: #f0e2c5;" />
                        </g>
                        <g class="hero-section__logo_text-group">

                            <path d="m14.22,53.37c.44-2.1.73-3.43.88-4.33h2.72c-.07.54-.13.95-.35,2.08.83-1.59,2.06-2.27,3.75-2.27l-.68,3.12c-2.13-.14-3.3.78-3.88,3.46l-1.36,6.41h-2.88l1.8-8.46Z" style="fill: #f0e2c5;" />
                            <path d="m32.98,55.68c-.66,3.33-2.26,6.34-5.78,6.34-3.33,0-4.57-2.51-3.69-6.81.79-3.95,2.95-6.37,5.73-6.37,3.69,0,4.52,2.99,3.75,6.84m-6.65-.14c-.59,2.9-.19,4.13,1.12,4.13,1.23,0,2.12-1.58,2.69-4.21.5-2.3.61-4.25-1.09-4.25-1.37,0-2.31,2.25-2.72,4.33" style="fill: #f0e2c5;" />
                            <path d="m45.31,58.7c-.23,1.14-.53,2.4-.63,3.13h-2.77c.03-.24.08-.74.17-1.11-.64.87-1.4,1.31-2.77,1.31-2.55,0-3.15-2.19-2.75-4.19.5-2.44,2.2-3.26,4.4-3.65.82-.15,1.67-.22,2.56-.29l.21-.95c.21-1,.2-2.02-1.17-2.02-.96,0-1.34.64-1.59,1.57h-2.71c.46-2,1.57-3.66,4.55-3.66s4.31,1.38,3.66,4.39l-1.16,5.47Zm-2.23-2.71c-.6.05-1.17.1-1.68.23-1.02.25-1.79.69-2.01,1.71-.21.96.03,1.82,1.14,1.82,1.3,0,2-1.01,2.39-2.94l.16-.81Z" style="fill: #f0e2c5;" />
                            <path d="m52.27,58.05c0,.82.25,1.82,1.49,1.82.78,0,1.33-.32,1.49-1.05.21-.98-.1-1.62-1.68-2.6-2.44-1.51-2.91-2.78-2.53-4.49.35-1.6,1.56-2.89,3.9-2.89,3.26,0,4.1,2.19,3.9,3.89h-2.64c0-.97-.26-1.73-1.28-1.73-.5,0-1.01.18-1.17.9-.19.82.1,1.3,1.35,2.07,2.77,1.69,3.28,3,2.92,4.93-.37,1.97-1.97,3.13-4.45,3.13-3.39,0-4.07-2.24-4-3.98h2.68Z" style="fill: #f0e2c5;" />
                            <path d="m62.95,49.04h1.62l.7-3.17h2.86l-.7,3.17h1.88l-.48,2.31h-1.9l-1.59,7.25c-.16.76-.1,1.21.82,1.21.33,0,.72-.03.96-.08l-.42,2.08c-.58.19-1.41.2-1.89.2-2.01,0-2.92-.78-2.44-3.09l1.69-7.57h-1.62l.5-2.31Z" style="fill: #f0e2c5;" />
                            <path d="m74.26,56.14c-.11.58-.17,1.12-.17,1.58,0,1.21.39,1.97,1.35,1.97,1.11,0,1.57-.73,1.87-1.49h2.79c-.5,1.67-1.9,3.83-4.91,3.83-4.03,0-4.21-3.63-3.61-6.74.63-3.15,2.36-6.45,5.82-6.45,3.83,0,4.27,3.34,3.48,6.37l-.24.94h-6.38Zm4.02-2.09c.09-.41.17-.83.17-1.21,0-.96-.29-1.68-1.35-1.68-1.26,0-2,1.41-2.38,2.89h3.56Z" style="fill: #f0e2c5;" />
                            <path d="m96.77,44.28l-2.98,13.99c-.33,1.51-.58,2.8-.7,3.55h-2.83c.05-.32.1-.8.21-1.33-.74,1.02-1.55,1.54-2.96,1.54-2.31,0-3.55-2.17-2.5-6.94.96-4.37,3.01-6.25,5.28-6.25,1.32,0,2.09.54,2.39,1.19l1.24-5.76h2.86Zm-8.91,11.09c-.64,3.08-.15,4.31,1.05,4.31,1.52,0,2.18-1.58,2.82-4.58.52-2.49.48-3.86-1.06-3.86-1.18,0-2.22,1.39-2.8,4.13" style="fill: #f0e2c5;" />
                        </g>
                        <g class="hero-section__logo_text-group">

                            <path d="m40.52,90.3l-1.23,5.79h-2.88l2.91-13.72c.37-1.73.59-2.88.74-3.69h2.81c-.02.36-.13.86-.21,1.34.63-.91,1.46-1.54,2.96-1.54,2.13,0,3.64,1.99,2.6,6.79-.98,4.5-2.92,6.4-5.2,6.4-1.35,0-2.26-.65-2.5-1.38m4.86-5.19c.65-3.25.12-4.23-1.07-4.23-1.26,0-2.2,1.5-2.67,3.77-.73,3.4-.45,4.65,1.01,4.65,1.2,0,2.12-1.19,2.73-4.19" style="fill: #ff5c00;" />
                            <path d="m60.57,88.35c-.23,1.14-.53,2.4-.63,3.13h-2.77c.03-.24.08-.74.17-1.11-.64.87-1.4,1.31-2.77,1.31-2.55,0-3.15-2.19-2.75-4.19.5-2.44,2.2-3.26,4.4-3.65.82-.15,1.67-.22,2.56-.29l.21-.95c.21-1,.2-2.02-1.17-2.02-.96,0-1.34.64-1.59,1.57h-2.71c.46-2,1.57-3.66,4.55-3.66s4.31,1.38,3.66,4.39l-1.16,5.47Zm-2.23-2.71c-.6.05-1.17.1-1.68.23-1.02.25-1.79.69-2.01,1.71-.21.96.03,1.82,1.14,1.82,1.3,0,2-1.01,2.39-2.94l.16-.81Z" style="fill: #ff5c00;" />
                            <path d="m66.67,83.02c.44-2.1.73-3.43.88-4.33h2.72c-.07.54-.13.95-.35,2.08.83-1.59,2.06-2.27,3.75-2.27l-.68,3.12c-2.13-.14-3.3.78-3.88,3.46l-1.36,6.41h-2.88l1.8-8.46Z" style="fill: #ff5c00;" />
                            <path d="m77.11,78.69h1.62l.7-3.17h2.86l-.7,3.17h1.88l-.48,2.31h-1.9l-1.59,7.25c-.16.76-.1,1.21.82,1.21.33,0,.72-.03.96-.08l-.42,2.08c-.58.19-1.41.2-1.89.2-2.01,0-2.92-.78-2.44-3.09l1.69-7.57h-1.62l.5-2.31Z" style="fill: #ff5c00;" />
                            <path d="m89.86,78.69c.12,2.41-.1,8.67-.15,9.94h.03c.68-1.85,2.6-6.36,4.2-9.94h2.89l-6.34,13.52c-1.87,4-3.13,4.06-5.03,4.06-.35,0-.97-.08-1.36-.17l.53-2.4c.23.05.65.1.95.1.92,0,1.51-.31,2.06-1.64l-.67-13.47h2.91Z" style="fill: #ff5c00;" />
                        </g>
                        <path d="m100.69,108.75H7.68c-4.23,0-7.68-3.44-7.68-7.68V7.68C0,3.44,3.44,0,7.68,0h93.01c4.23,0,7.68,3.44,7.68,7.68v93.39c0,4.23-3.44,7.68-7.68,7.68M7.68,4c-2.03,0-3.68,1.65-3.68,3.68v93.39c0,2.03,1.65,3.68,3.68,3.68h93.01c2.03,0,3.68-1.65,3.68-3.68V7.68c0-2.03-1.65-3.68-3.68-3.68H7.68Z" style="fill: #f0e2c5;" />
                    </g>
                </g>
            </svg>

            <p><?= __('20 - 21 Septembrie | Romaero, București', 'espressoole') ?></p>
            <!-- <a class="hero-cta-button" href="<?= esc_url(get_permalink(pll_get_post(pll_get_post(get_page_by_path('bilete')->ID, pll_current_language()), pll_current_language()))); ?>">
                <?= __('Cumpără bilete', 'espressoole') ?>
            </a> -->
        </div>

    </div>
</section>
<section class="about-section section-lateral-padding">
    <div class="content-box content-centered">
        <div class="about-section__content">
            <div class="heading-container center light">
                <h2><?= __('Un Ritual Urban începe', 'espressoole') ?></h2>
            </div>
            <div class="about-section__content-secondary">
                <div class="about-section__content-secondary-col">
                    <p><?= __('<span class="text-orange text-big">Fresh Roasted Party</span> un statement, un spațiu creat pentru vibe seekers și coffee rebels.', 'espressoole') ?></p>
                    <p><?= __('Când orașul merge pe pilot automat, tu cauți mai mult. Cauți vibe-ul. Cauți tribul tău. <span class="text-italic">Beat-uri</span> curate, arome tari și oameni care simt înainte să înțeleagă.', 'espressoole') ?></p>

                    <div class="featured-text">
                        <p><?= __('Romaero // 20-21 septembrie // <span class="text-orange text-big">Party</span><br>Mai mult decat un festival, e <span class="text-orange text-big">Ritual Urban</span>', 'espressoole') ?></p>

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
            <div class="artists-section__background-overlay">
                <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/airplane.svg'); ?>" alt="Artists Section Background" />
            </div>
            <div class="heading-container left light">
                <h2><?= __('Line-up', 'espressoole') ?></h2>

            </div>
            <div class="artists-section__artists-list">
                <div class="artists-section__artist-item">
                    <div class="artists-section__artist-item-img">
                        <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/artist-tba.png'); ?>" alt="TBA" />
                    </div>
                    <h3><?= __('TBA', 'espressoole') ?></h3>
                </div>
                <!-- <div class="artists-section__artist-item">
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
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="tickets-section section-lateral-padding">
    <div class="content-box content-centered">
        <div class="tickets-section__content">
            <div class="heading-container center light">
                <span><?= __('Find your tribe', 'espressoole') ?></span>
                <h2><?= __('Ia bilet', 'espressoole') ?></h2>
            </div>
            <div class="tickets-section__tickets-list">
                <div class="tickets-section__ticket-item">
                    <div class="tickets-section__ticket-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M96 128C60.7 128 32 156.7 32 192L32 256C32 264.8 39.4 271.7 47.7 274.6C66.5 281.1 80 299 80 320C80 341 66.5 358.9 47.7 365.4C39.4 368.3 32 375.2 32 384L32 448C32 483.3 60.7 512 96 512L544 512C579.3 512 608 483.3 608 448L608 384C608 375.2 600.6 368.3 592.3 365.4C573.5 358.9 560 341 560 320C560 299 573.5 281.1 592.3 274.6C600.6 271.7 608 264.8 608 256L608 192C608 156.7 579.3 128 544 128L96 128zM448 400L448 240L192 240L192 400L448 400zM144 224C144 206.3 158.3 192 176 192L464 192C481.7 192 496 206.3 496 224L496 416C496 433.7 481.7 448 464 448L176 448C158.3 448 144 433.7 144 416L144 224z" />
                        </svg>
                        <span>
                            Presale
                        </span>
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
                    <!-- <div class="tickets-section__ticket-item-details">
                        <ul>
                            <li></li>
                        </ul>
                    </div> -->
                    <div>
                        <!-- <a class="tickets-section__ticket-item-cta" href="<?= esc_url(get_permalink(pll_get_post(pll_get_post(get_page_by_path('bilete')->ID, pll_current_language()), pll_current_language()))); ?>"><?= __('Cumpără bilet', 'espressoole') ?></a> -->
                        <a class="tickets-section__ticket-item-cta disabled" href=""><?= __('Disponibil în curând', 'espressoole') ?></a>
                    </div>
                </div>
                <div class="tickets-section__ticket-item">
                    <div class="tickets-section__ticket-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M96 128C60.7 128 32 156.7 32 192L32 256C32 264.8 39.4 271.7 47.7 274.6C66.5 281.1 80 299 80 320C80 341 66.5 358.9 47.7 365.4C39.4 368.3 32 375.2 32 384L32 448C32 483.3 60.7 512 96 512L544 512C579.3 512 608 483.3 608 448L608 384C608 375.2 600.6 368.3 592.3 365.4C573.5 358.9 560 341 560 320C560 299 573.5 281.1 592.3 274.6C600.6 271.7 608 264.8 608 256L608 192C608 156.7 579.3 128 544 128L96 128zM448 400L448 240L192 240L192 400L448 400zM144 224C144 206.3 158.3 192 176 192L464 192C481.7 192 496 206.3 496 224L496 416C496 433.7 481.7 448 464 448L176 448C158.3 448 144 433.7 144 416L144 224z" />
                        </svg>
                        <span>
                            Presale
                        </span>
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
                    <!-- <div class="tickets-section__ticket-item-details">
                        <ul>
                            <li></li>
                        </ul>
                    </div> -->
                    <div>
                        <!-- <a class="tickets-section__ticket-item-cta" href="<?= esc_url(get_permalink(pll_get_post(pll_get_post(get_page_by_path('bilete')->ID, pll_current_language()), pll_current_language()))); ?>"><?= __('Cumpără bilet', 'espressoole') ?></a> -->
                        <a class="tickets-section__ticket-item-cta disabled" href=""><?= __('Disponibil în curând', 'espressoole') ?></a>
                    </div>
                </div>
                <div class="tickets-section__ticket-item">
                    <div class="tickets-section__ticket-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M96 128C60.7 128 32 156.7 32 192L32 256C32 264.8 39.4 271.7 47.7 274.6C66.5 281.1 80 299 80 320C80 341 66.5 358.9 47.7 365.4C39.4 368.3 32 375.2 32 384L32 448C32 483.3 60.7 512 96 512L544 512C579.3 512 608 483.3 608 448L608 384C608 375.2 600.6 368.3 592.3 365.4C573.5 358.9 560 341 560 320C560 299 573.5 281.1 592.3 274.6C600.6 271.7 608 264.8 608 256L608 192C608 156.7 579.3 128 544 128L96 128zM448 400L448 240L192 240L192 400L448 400zM144 224C144 206.3 158.3 192 176 192L464 192C481.7 192 496 206.3 496 224L496 416C496 433.7 481.7 448 464 448L176 448C158.3 448 144 433.7 144 416L144 224z" />
                        </svg>
                        <span>
                            Presale
                        </span>
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
                    <!-- <div class="tickets-section__ticket-item-details">
                        <ul>
                            <li></li>
                        </ul>
                    </div> -->
                    <div>
                        <!-- <a class="tickets-section__ticket-item-cta" href="<?= esc_url(get_permalink(pll_get_post(pll_get_post(get_page_by_path('bilete')->ID, pll_current_language()), pll_current_language()))); ?>"><?= __('Cumpără bilet', 'espressoole') ?></a> -->
                        <a class="tickets-section__ticket-item-cta disabled" href=""><?= __('Disponibil în curând', 'espressoole') ?></a>
                    </div>
                </div>
                <div class="tickets-section__ticket-item">
                    <div class="tickets-section__ticket-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M96 128C60.7 128 32 156.7 32 192L32 256C32 264.8 39.4 271.7 47.7 274.6C66.5 281.1 80 299 80 320C80 341 66.5 358.9 47.7 365.4C39.4 368.3 32 375.2 32 384L32 448C32 483.3 60.7 512 96 512L544 512C579.3 512 608 483.3 608 448L608 384C608 375.2 600.6 368.3 592.3 365.4C573.5 358.9 560 341 560 320C560 299 573.5 281.1 592.3 274.6C600.6 271.7 608 264.8 608 256L608 192C608 156.7 579.3 128 544 128L96 128zM448 400L448 240L192 240L192 400L448 400zM144 224C144 206.3 158.3 192 176 192L464 192C481.7 192 496 206.3 496 224L496 416C496 433.7 481.7 448 464 448L176 448C158.3 448 144 433.7 144 416L144 224z" />
                        </svg>
                        <span>
                            Presale
                        </span>
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
                    <!-- <div class="tickets-section__ticket-item-details">
                        <ul>
                            <li></li>
                        </ul>
                    </div> -->
                    <div>
                        <!-- <a class="tickets-section__ticket-item-cta" href="<?= esc_url(get_permalink(pll_get_post(pll_get_post(get_page_by_path('bilete')->ID, pll_current_language()), pll_current_language()))); ?>"><?= __('Cumpără bilet', 'espressoole') ?></a> -->
                        <a class="tickets-section__ticket-item-cta disabled" href=""><?= __('Disponibil în curând', 'espressoole') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="map-section section-lateral-padding">
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

<section class="partners-section section-lateral-padding">
    <div class="content-box content-centered">
        <div class="partners-section__content">
            <div class="heading-container center light">
                <h2><?= __('Parteneri', 'espressoole') ?></h2>
            </div>
            <div class="partners-section__partners-list">
                <div class="partners-section__partner-item">
                    <img src="<?= ESPRESSOOLE_URL ?>/assets/img/partners/seqbyte.svg" alt="Seqbyte Solutions" />
                </div>
                <div class="partners-section__partner-item">
                    <img src="<?= ESPRESSOOLE_URL ?>/assets/img/partners/inventive.png" alt="Inventive+" />
                </div>

            </div>
        </div>
    </div>

</section>

<section class="location-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6768.412888614991!2d26.085353808388934!3d44.49943946639573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b202f6325a75b9%3A0x405641d207df44d5!2sRomaero!5e0!3m2!1sen!2sro!4v1753536415124!5m2!1sen!2sro" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Maps Location"></iframe>
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