<?php

namespace Espressoole;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Contact
{
    public function __construct()
    {
        add_action('wp_ajax_contact-form-submit', [$this, 'handle_contact_form_submit']);
        add_action('wp_ajax_nopriv_contact-form-submit', [$this, 'handle_contact_form_submit']);
    }

    public function handle_contact_form_submit()
    {
        // Verify nonce for security
        if (!wp_verify_nonce($_POST['nonce'], 'contact_form_nonce')) {
            wp_die('Security check failed');
        }
        
        global $wpdb;

        // Sanitize form data
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        $wpdb->insert(
            $wpdb->prefix . 'contact_form_submissions',
            [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
                'created_at' => current_time('mysql'),
            ]
        );

        // Return JSON response
        wp_send_json_success(['message' => 'Form submitted successfully']);
    }
}
