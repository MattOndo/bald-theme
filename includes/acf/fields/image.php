<?php

acf_add_local_field_group(array(
  'key' => 'acfb_image',
  'title' => 'Block: Image',
  'fields' => array(
		array(
			'key' => 'acfb_image__media',
			'label' => 'Image',
			'name' => 'image',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'image_field',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
      /* (string) Specify the type of value returned by get_field(). Defaults to 'array'.
      Choices of 'array' (Image Array), 'url' (Image URL) or 'id' (Image ID) */
      'return_format' => 'array',
      
      /* (string) Specify the image size shown when editing. Defaults to 'thumbnail'. */
      'preview_size' => 'large',
      
      /* (string) Restrict the image library. Defaults to 'all'.
      Choices of 'all' (All Images) or 'uploadedTo' (Uploaded to post) */
      'library' => 'all',
      
      /* (int) Specify the minimum width in px required when uploading. Defaults to 0 */
      'min_width' => 0,
      
      /* (int) Specify the minimum height in px required when uploading. Defaults to 0 */
      'min_height' => 0,
      
      /* (int) Specify the minimum filesize in MB required when uploading. Defaults to 0 
      The unit may also be included. eg. '256KB' */
      'min_size' => 0,
      
      /* (int) Specify the maximum width in px allowed when uploading. Defaults to 0 */
      'max_width' => 0,
      
      /* (int) Specify the maximum height in px allowed when uploading. Defaults to 0 */
      'max_height' => 0,
      
      /* (int) Specify the maximum filesize in MB in px allowed when uploading. Defaults to 0
      The unit may also be included. eg. '256KB' */
      'max_size' => 0,
      
      /* (string) Comma separated list of file type extensions allowed when uploading. Defaults to '' */
      'mime_types' => '',
		),
		array(
			'key' => 'acfb_image__show_caption',
			'label' => 'Display Caption?',
			'name' => 'show_caption',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'caption_toggle_field',
				'id' => '',
			),
			'default_value' => 0,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'ui_on_text' => 'Yes',
			'ui_off_text' => 'No',
			'ui' => 1,
		),
		array(
			'key' => 'acfb_image__caption',
			'label' => 'Caption',
			'name' => 'Caption',
			'type' => 'text',
			'instructions' => 'If blank, will use default caption from media library.',
			'required' => 0,
			'conditional_logic' =>  array(
				array(
					array(
						'field' => 'acfb_image__show_caption',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => 'caption_field',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Optional',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
  'location' => array (
      array (
          array (
              'param' => 'block',
              'operator' => '==',
              'value' => 'acf/image',
          ),
      ),
  ),
  "active" => 1,
  'show_in_graphql' => 1,
  "graphql_field_name" => "acfBlockImage",
  "map_graphql_types_from_location_rules" => 1,
));