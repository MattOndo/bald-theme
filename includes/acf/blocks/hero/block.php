<?php
/**
 * Block Name: image
 * Description: Display frequently asked questions as an accordion
 */

// $data is what we're going to expose to our render template
$data = array(
	'headline' => get_field('acfb_hero__headline'),
	'subheadline' => get_field('acfb_hero__subheadline'),
	'show_image' => get_field('acfb_hero__show_image'),
	'image' => get_field('acfb_hero__media'),
	'image_placement' => get_field('acfb_hero__image_placement'),
);

// Dynamic block ID
$block_id = 'hero-' . $block['id'];

// Check if a custom ID is set in the block editor
if( !empty($block['anchor']) ) {
    $block_id = $block['anchor'];
}

// Block classes
$class_name = 'hero-block';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

/** 
 * Pass the block data into the template part
 */ 
get_template_part(
	'includes/acf/blocks/hero/render',
	null,
	array(
		'block'      => $block,
		'is_preview' => $is_preview,
		'post_id'    => $post_id,
		'data'       => $data,
		'class_name' => $class_name,
		'block_id'   => $block_id,
	)
);