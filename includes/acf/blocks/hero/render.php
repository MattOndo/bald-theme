<?php
/**
 * Block Name: image
 * Description: Display frequently asked questions as an accordion
 */

// The block attributes
$block = $args['block'];

// The block fields
$data = $args['data'];
$headline = $data['headline'];
$subheadline = $data['subheadline'];
$show_image = $data['show_image'] ? true : false;
$image = $data['image'];
$image_placement = $data['image_placement'];

// Alignment options
$attrs = get_block_wrapper_attributes();

// The block ID
$block_id = $args['block_id'];

// The block class names
$class_name = $args['class_name'];

$content_styles = '';
$image_syles = '';

if ($image_placement === 'left') {
    $content_styles .= 'order:2;';
    $image_syles .= 'order:1;';
} else {
    $content_styles .= 'order:1;';
    $image_syles .= 'order:2;';
}

if (!$show_image) {
    $content_styles .= 'text-align:center;';
}
?>
<!-- Our front-end template -->
<div id="<?php echo $block_id; ?>" style="display: flex; align-items: center;">
    <div style="width: 100%;<?php echo $content_styles; ?>">
        <h1><?php echo $headline; ?></h1>
        <p><?php echo $subheadline; ?></p>
    </div>
    <?php if ($show_image) : ?>
    <div style="width: 100%;<?php echo $image_syles; ?>">
        <img src="<?php echo $image['url'] ; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
    </div>
    <?php endif; ?>
</div>