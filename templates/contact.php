<section
    class="contact-section first-section-padding single-section-page section-lateral-padding">
    <div class="content-box content-centered">
        <div class="contact-section__content">
            <div class="contact-section__content-row">
                <div class="contact-section__info-container">
                    <div class="heading-container left light">
                        <h2><?= __("Contact", "espressoole") ?></h2>
                    </div>
                    <div class="contact-section__info-content">
                        <p class="contact-section__info-text">
                            <?= __("Pentru orice întrebări sau informații suplimentare, nu ezitați să ne contactați folosind formularul de contact.", "espressoole") ?>
                        </p>
                        <div class="contact-details">
                            <div class="contact-details__item">
                                <a href="mailto: office@espressoole.com">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z" />
                                    </svg>
                                    <span>office@espressoole.com</span>
                                </a>
                            </div>
                            <div class="contact-details__item">
                                <a href="tel:0123456789">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">>
                                        <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                    </svg>
                                    <span>+40 123 456 789</span>
                                </a>
                            </div>

                        </div>
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6768.412888614991!2d26.085353808388934!3d44.49943946639573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b202f6325a75b9%3A0x405641d207df44d5!2sRomaero!5e0!3m2!1sen!2sro!4v1753536415124!5m2!1sen!2sro" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Maps Location"></iframe>
                        </div>

                    </div>

                </div>
                <div class="contact-section__form-container">
                    <form id="contact-form">
                        <div class="form-content">
                            <div class="form-row">
                                <div class="form-input-container">
                                    <label for="name"><?= __("Nume", "espressoole") ?></label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="form-input-container">
                                    <label for="email"><?= __("Adresa de email", "espressoole") ?></label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-input-container">
                                <label for="subject"><?= __("Subiect", "espressoole") ?></label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                            <div class="form-input-container">
                                <label for="message"><?= __("Mesaj", "espressoole") ?></label>
                                <textarea id="message" name="message" rows="4" required></textarea>
                            </div>
                            <div class="form-checkbox-container">
                                <label>
                                    <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
                                    <?= __("Sunt de acord cu ", "espressoole") ?>
                                    <a href="<?= get_permalink(pll_get_post(123)) ?>" target="_blank"><?= __("Politica de confidențialitate", "espressoole") ?></a>
                                </label>
                            </div>
                            <div class="form-submit-container">
                                <button type="submit" class="btn btn-primary"><?= __("Trimite", "espressoole") ?></button>
                                
                                <div class="form-notice">
                                    <p class="form-notice-success">
                                        <?= __("Mesajul a fost trimis cu succes!", "espressoole") ?>
                                    </p>
                                    <p class="form-notice-error">
                                        <?= __("A apărut o eroare. Vă rugăm să încercați din nou.", "espressoole") ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-map-mobile">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6768.412888614991!2d26.085353808388934!3d44.49943946639573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b202f6325a75b9%3A0x405641d207df44d5!2sRomaero!5e0!3m2!1sen!2sro!4v1753536415124!5m2!1sen!2sro" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Maps Location"></iframe>
            </div>
        </div>
    </div>
</section>


<script>
    const contactForm = document.getElementById('contact-form');
    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const submitButton = contactForm.querySelector('button[type="submit"]');
        submitButton.disabled = true; 
        submitButton.textContent = '<?= __("Se încarcă", "espressoole") ?>';
        const noticeContainer = contactForm.querySelector('.form-notice');
        const noticeSuccess = noticeContainer.querySelector('.form-notice-success');
        const noticeError = noticeContainer.querySelector('.form-notice-error');

        const formData = new FormData(contactForm);
        formData.append('action', 'contact-form-submit');
        formData.append('nonce', '<?= wp_create_nonce('contact_form_nonce') ?>');
        
        fetch('<?= admin_url('admin-ajax.php') ?>', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                noticeSuccess.style.display = "block";
                noticeError.style.display = "none";
                noticeContainer.style.padding = "10px 20px";
                noticeContainer.style.marginTop = "10px";
                noticeContainer.style.height = (noticeContainer.scrollHeight + 20) + "px";
                noticeContainer.classList.add('success');
                noticeContainer.classList.remove('error');
                
                contactForm.reset();
            } else {
                noticeError.style.display = "block";
                noticeSuccess.style.display = "none";
                noticeContainer.style.padding = "10px 20px";
                noticeContainer.style.marginTop = "10px";
                noticeContainer.style.height = (noticeContainer.scrollHeight + 20) + "px";
                noticeContainer.classList.add('error');
                noticeContainer.classList.remove('success');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('<?= __("A apărut o eroare. Vă rugăm să încercați din nou.", "espressoole") ?>');
        }).finally(()=>{
            submitButton.disabled = false; 
            submitButton.textContent = '<?= __("Trimite", "espressoole") ?>';
        });
    });
</script>