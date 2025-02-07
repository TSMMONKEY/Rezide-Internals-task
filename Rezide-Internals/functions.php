<?php
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function theme_slug_enqueue_styles()
{
    wp_enqueue_style(
        'theme-slug-style',
        get_stylesheet_uri()
    );

    wp_enqueue_style(
        'theme-slug-primary',
        get_parent_theme_file_uri('assets/css/main.css')
    );

    // New styles added
    wp_enqueue_style(
        'theme-slug-bootstrap',
        get_parent_theme_file_uri('assets/css/bootstrap/bootstrap.min.css')
    );

    wp_enqueue_style(
        'theme-slug-fonts',
        'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap'
    );
}
add_action('wp_enqueue_scripts', 'theme_slug_enqueue_styles');

function enable_featured_images()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'enable_featured_images');

function handle_property_valuation_form()
{
    // Ensure all required fields are set
    if (! isset($_POST['postcode']) || ! isset($_POST['property_type']) || ! isset($_POST['bedrooms']) || ! isset($_POST['bathrooms']) || ! isset($_POST['reception_rooms']) || ! isset($_POST['property_description'])) {
        wp_send_json(['success' => false, 'message' => 'Missing required fields.']);
        wp_die();
    }

    // Sanitize all inputs
    $postcode             = sanitize_text_field($_POST['postcode']);
    $property_type        = sanitize_text_field($_POST['property_type']);
    $property_description = sanitize_text_field($_POST['property_description']);
    $bedrooms             = isset($_POST['bedrooms']) ? intval($_POST['bedrooms']) : 0;
    $bathrooms            = isset($_POST['bathrooms']) ? intval($_POST['bathrooms']) : 0;
    $reception_rooms      = isset($_POST['reception_rooms']) ? intval($_POST['reception_rooms']) : 0;

                                                                                                                               // Add any additional fields you want to use for calculation
    $garage_size        = isset($_POST['garage_size']) ? intval($_POST['garage_size']) : 0;                                    // Example field
    $property_condition = isset($_POST['property_condition']) ? sanitize_text_field($_POST['property_condition']) : 'Average'; // Example field

                                   // Sample Valuation Formula (Modify as needed)
    $base_value           = 50000; // Base price
    $bedroom_value        = $bedrooms * 15000;
    $bathroom_value       = $bathrooms * 10000;
    $reception_value      = $reception_rooms * 8000;
    $garage_value         = $garage_size * 5000; // Example value per garage size
    $condition_multiplier = ($property_condition === 'Excellent') ? 1.2 : ($property_condition === 'Poor' ? 0.8 : 1);

    // Final valuation calculation considering all fields
    $valuation = ($base_value + $bedroom_value + $bathroom_value + $reception_value + $garage_value) * $condition_multiplier;

    // Send JSON response with the calculated valuation
    wp_send_json(['success' => true, 'valuation' => $valuation]);
    wp_die();
}

// Register the function for both logged-in and logged-out users
add_action('wp_ajax_property_valuation', 'handle_property_valuation_form');
add_action('wp_ajax_nopriv_property_valuation', 'handle_property_valuation_form');

add_action('admin_post_submit_contact_form', 'handle_contact_form_submission'); // For logged-in users
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission'); // For non-logged-in users

function handle_contact_form_submission() {
    if (isset($_POST['submit'])) {
        // Sanitize and process form inputs
        $name    = sanitize_text_field($_POST['name']);
        $email   = sanitize_email($_POST['email']);
        $phone   = sanitize_text_field($_POST['phone']);  // Keep this as text to store special characters
        $message = sanitize_textarea_field($_POST['message']);

        // Store form data in the database
        global $wpdb;
        $table_name = $wpdb->prefix . 'contact';

        $data = [
            'name'         => $name,
            'email'        => $email,
            'phone'        => $phone,
            'message'      => $message,
            'terms_and_conditions' => 'yes',
        ];

        $format = ['%s', '%s', '%s', '%s', '%s'];

        // Insert data into the database
        $inserted = $wpdb->insert($table_name, $data, $format);

        if ($inserted === false) {
            error_log('Error inserting data into the database.');
            wp_redirect(home_url('/error/')); // Redirect to error page if insertion fails
            exit;
        } else {
            error_log('Data inserted successfully into the database.');
        }

        // Redirect to the thank-you page with a success flag
        wp_redirect(home_url('/?success=true'));
        exit;
    } else {
        wp_redirect(home_url('/error/'));
        exit;
    }
}


