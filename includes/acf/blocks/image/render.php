<?php
/**
 * Block Name: image
 * Description: Display frequently asked questions as an accordion
 */

// The block attributes
$block = $args['block'];

// The block fields
$data = $args['data'];
$image = $data['image'];
$showCaption = $data['showCaption'] ? true : false;
$caption = !empty($data['caption']) ? $data['caption'] : $image['caption'];

// Alignment options
$attrs = get_block_wrapper_attributes();
$align['text'] = $block['alignText'];

// The block ID
$block_id = $args['block_id'];

// The block class names
$class_name = $args['class_name'];
?>
<!-- Our front-end template -->
<div id="<?php echo $block_id; ?>">
    <?php if ($showCaption && $caption !== false) : ?>
    <figure class="p-6 border <?= $class_name ?>">
    <?php endif; ?>
        <img src="<?php echo $image['url'] ; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
    <?php if ($showCaption && $caption !== false) : ?>
        <figcaption class="mt-6" style="text-align: <?= $align['text']  ?>"><?php echo $caption ?></figcaption>
    </figure>
    <?php endif; ?>
</div>