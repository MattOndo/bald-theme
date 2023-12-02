<?php
/**
 * Block Name: faq-accordion
 * Description: Display frequently asked questions as an accordion
 */

// The block attributes
$block = $args['block'];

// The block data
$data = $args['data'];

// The block ID
$block_id = $args['block_id'];

// The block class names
$class_name = $args['class_name'];
?>

<!-- Our front-end template -->
<div id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
    <?php
        echo '<h3>' . $data['headline'] . '</h3>';
        foreach ($data['faqs'] as $faq) {
            echo "<div class='faq-row'>";
            echo '<strong>' . $faq['faq-question'] . '</strong>';
            echo '<p>' . $faq['faq-answer'] . '</p>';
            echo "</div>";
       }
    ?>
</div>