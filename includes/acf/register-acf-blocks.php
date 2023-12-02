<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

function register_acf_blocks()
{
  // ACF Block Registration
  $blocks = array(
    'faq-accordion',
    'image',
    'button',
    'code',
    'hero',
    'gallery',
  );
  foreach ($blocks as $block) {
    register_block_type(get_template_directory() . '/includes/acf/blocks/' . $block);
  }
}
add_action('init', 'register_acf_blocks');

function enqueue_acf_block_assets() {
  wp_register_script('highlightjs', get_template_directory_uri() . '/includes/acf/blocks/code/highlight/highlight.min.js', array(), false, false);
  wp_register_script('code-block', get_template_directory_uri() . '/includes/acf/blocks/code/block.js', array('highlightjs'), false, false);
}
add_action( 'enqueue_block_editor_assets', 'enqueue_acf_block_assets');
