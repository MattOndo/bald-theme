<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

function register_acf_field_groups() {
    // ACF Field Group Registration
    $groups = array(
    'faq-accordion',
    'image'
);
    foreach ($groups as $group) {
      require_once get_template_directory() . '/includes/acf/fields/' . $group . '.php';
    }
}
add_action('acf/init', 'register_acf_field_groups');