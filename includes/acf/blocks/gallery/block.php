<?php
/**
 * Block Name: image
 * Description: Display frequently asked questions as an accordion
 */

// $data is what we're going to expose to our render template
$data = array(
	'images' => get_field('acfb_gallery__images'),
);

// Dynamic block ID
$block_id = 'gallery-' . $block['id'];

// Check if a custom ID is set in the block editor
if( !empty($block['anchor']) ) {
    $block_id = $block['anchor'];
}

// Block classes
$class_name = 'gallery-block';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

/** 
 * Pass the block data into the template part
 */ 
get_template_part(
	'includes/acf/blocks/gallery/render',
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