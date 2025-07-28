<section
 class="faq-section first-section-padding single-section-page section-lateral-padding"
>
    <div class="content-box content-centered">
        <div class="heading-container center light">
            <h2><?= __("FAQ", "espressoole") ?></h2>
        </div>
        <!-- <div class="faq-section__content"> -->
        <div class="tickets-section__buy">
              <h3>
                    <?= __("FAQ vor fi disponibile în curând.", "espressoole") ?>
                </h3>

                    <img src="<?php echo esc_url(ESPRESSOOLE_URL . '/assets/img/fresh_roasted_party_logo.svg'); ?>" alt="Hero Image" />
            <!-- <div class="faq-section__accordion-list">
                <div class="faq-section__accordion-item">
                    <div class="faq-section__accordion-heading"><h3><?= __("Question 1", "espressoole") ?></h3></div>
                    <div 
                    style="height: 0px; padding-top:0px"
                    class="faq-section__accordion-content"><?= __("Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.", "espressoole") ?></div>
                    

                </div>

          
                <div class="faq-section__accordion-item">
                    <div class="faq-section__accordion-heading"><h3><?= __("Question 2", "espressoole") ?></h3></div>
                    <div 
                    style="height: 0px; padding-top:0px"
                    class="faq-section__accordion-content"><?= __("Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.", "espressoole") ?></div>

                </div>

                <div class="faq-section__accordion-item">
                    <div class="faq-section__accordion-heading"><h3><?= __("Question 3", "espressoole") ?></h3></div>
                    <div 
                    style="height: 0px; padding-top:0px"
                    class="faq-section__accordion-content"><?= __("Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.", "espressoole") ?></div>

                </div>

                <div class="faq-section__accordion-item">
                    <div class="faq-section__accordion-heading"><h3><?= __("Question 4", "espressoole") ?></h3></div>
                    <div 
                    style="height: 0px; padding-top:0px"
                    class="faq-section__accordion-content"><?= __("Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eius placeat, nesciunt magnam maiores esse eligendi tenetur aperiam. Impedit odio suscipit aspernatur maiores nulla quas assumenda, pariatur in tenetur voluptas.", "espressoole") ?></div>

                </div>

            </div> -->

        </div>
    
</div>
</section>

<script>
    const faqAccordionItems = document.querySelectorAll('.faq-section__accordion-item');
    faqAccordionItems.forEach(item => {
        const heading = item.querySelector('.faq-section__accordion-heading');
        const content = item.querySelector('.faq-section__accordion-content');

        heading.addEventListener('click', () => {
            const isActive = content.style.height !== '0px';
            if(!isActive){
                faqAccordionItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        const otherContent = otherItem.querySelector('.faq-section__accordion-content');
                        otherContent.style.height = '0px';
                        otherContent.style.paddingTop = '0px';
                        otherContent.style.paddingBottom = '0px';
                    }
                });
            }
            content.style.height = isActive ? '0px' : `${content.scrollHeight + 40}px`;
            content.style.paddingTop = isActive ? '0px' : '20px';
            content.style.paddingBottom = isActive ? '0px' : '20px';
        });
    });
</script>