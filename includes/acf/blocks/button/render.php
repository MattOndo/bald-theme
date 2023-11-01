<?php
/**
 * Block Name: image
 * Description: Display frequently asked questions as an accordion
 */

// The block attributes
$block = $args['block'];

// The block fields
$data = $args['data'];

// The block ID
$block_id = $args['block_id'];

// The block class names
$class_name = $args['class_name'];

$baseClassNames = [
    'inline-block', 
    'rounded', 
    'text-center', 
    'no-underline',
    'transition', 
    'duration-300', 
    'ease-in-out', 
    'hover:opacity-75',
    'cursor-pointer',
];
  
  switch ($data['size']) {
    case 'small':
        $sizeClasses = array('text-xs', 'px-2', 'py-1');
      break;
    case 'large':
        $sizeClasses = array('text-lg', 'px-6', 'py-3');
      break;
    default:
        $sizeClasses = array('px-4', 'py-2');
      break;
  }

  switch ($data['style']) {
    case 'blue':
        $styleClasses = array('bg-blue', 'text-white');
      break;
    case 'red':
        $styleClasses = array('bg-red', 'text-white');
      break;
    default:
        $styleClasses = array('bg-black', 'text-white');
      break;
  }

  $classNames = array_merge($baseClassNames, $sizeClasses, $styleClasses);

  $target = $data['link']['target'] ? '_blank' : '_self';
?>
<!-- Our front-end template -->
<div id="<?php echo $block_id; ?>">
    <a class="<?php echo implode(' ', $classNames); ?>"
        data-href="<?php echo $data['link']['url']; ?>"
        target="<?php echo $target; ?>"
    ><?php echo $data['link']['title']; ?></a>
</div>