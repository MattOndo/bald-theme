<?php
/**
 * Block Name: image
 * Description: Display frequently asked questions as an accordion
 */

// $data is what we're going to expose to our render template
$data = array(
	'showCaption' => get_field('acfb_image__show_caption'),
	'caption' => get_field('acfb_image__caption'),
	'image' => get_field('acfb_image__media'),
);

// Dynamic block ID
$block_id = 'image-' . $block['id'];

// Check if a custom ID is set in the block editor
if( !empty($block['anchor']) ) {
    $block_id = $block['anchor'];
}

// Block classes
$class_name = 'image-block';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

/** 
 * Pass the block data into the template part
 */ 
get_template_part(
	'includes/acf/blocks/image/render',
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