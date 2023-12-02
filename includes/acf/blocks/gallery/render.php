<?php
/**
 * Block Name: image
 * Description: Display frequently asked questions as an accordion
 */

// The block attributes
$block = $args['block'];

// The block fields
$data = $args['data'];
$images = $data['images'];

// Alignment options
$attrs = get_block_wrapper_attributes();

// The block ID
$block_id = $args['block_id'];

// The block class names
$class_name = $args['class_name'];
?>
<!-- Our front-end template -->
<div id="<?php echo $block_id; ?>" class="acfGalleryBlock">
    <?php foreach ($images as $image) : ?>
        <img src="<?php echo $image['url'] ; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
    <?php endforeach; ?>
</div>