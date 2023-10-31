<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

function register_acf_blocks() {
    // ACF Block Registration
    $blocks = array(
    'faq-accordion',
    'image'
);
    foreach ($blocks as $block) {
        register_block_type( get_stylesheet_directory() . '/includes/acf/blocks/' . $block );
    }
}
add_action( 'init', 'register_acf_blocks' );