<?php

acf_add_local_field_group(array(
  'key' => 'acfb_hero',
  'title' => 'Block: Hero',
  'fields' => array(
    array(
      'key' => 'acfb_hero__content_tab',
      'label' => 'Content',
      'name' => '',
      'aria-label' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => [
        'width' => '',
        'class' => '',
        'id' => '',
      ],
      'placement' => 'top',
      'endpoint' => 0,
    ),
		array(
			'key' => 'acfb_hero__headline',
			'label' => 'Headline',
			'name' => 'headline',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' =>  0,
			'wrapper' => array(
				'width' => '',
				'class' => 'headline_field',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'acfb_hero__subheadline',
			'label' => 'Subheadline',
			'name' => 'subheadline',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' =>  0,
			'wrapper' => array(
				'width' => '',
				'class' => 'subheadline_field',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
      'show_in_graphql' => 1,
		),
		array(
			'key' => 'acfb_hero__show_image',
			'label' => 'Display Image?',
			'name' => 'show_image',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'image_toggle_field',
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
      'show_in_graphql' => 1,
		),
    array(
      'key' => 'acfb_hero__image_tab',
      'label' => 'Image',
      'name' => '',
      'aria-label' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 1,
      'conditional_logic' => array(
        array(
          array(
            'field' => 'acfb_hero__show_image',
            'operator' => '==',
            'value' => 1,
          ),
        ),
      ),
      'wrapper' => [
        'width' => '',
        'class' => '',
        'id' => '',
      ],
      'placement' => 'top',
      'endpoint' => 0,
    ),
		array(
			'key' => 'acfb_hero__media',
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
      'return_format' => 'array',
      'preview_size' => 'large',
      'library' => 'all',
      'min_width' => 0,
      'min_height' => 0,
      'min_size' => 0,
      'max_width' => 0,
      'max_height' => 0,
      'max_size' => 0,
      'mime_types' => '',
      'show_in_graphql' => 1,
		),
		array(
			'key' => 'acfb_hero__image_placement',
			'label' => 'Image Placement',
			'name' => 'image_placement',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'image_placement_field',
				'id' => '',
			),
      'choices' => [
        'left' => 'Left',
        'right' => 'Right'
      ],
      'default_value' => 'left',
      'return_format' => 'value',
      'allow_null' => 0,
      'layout' => 'horizontal',
      'show_in_graphql' => 1,
		),
	),
  'location' => array (
      array (
          array (
              'param' => 'block',
              'operator' => '==',
              'value' => 'acf/hero',
          ),
      ),
  ),
  "active" => 1,
  'show_in_graphql' => 1,
  "graphql_field_name" => "acfBlockHero",
  "map_graphql_types_from_location_rules" => 1,
));