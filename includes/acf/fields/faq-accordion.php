<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

acf_add_local_field_group(array(
  'key' => 'acfb_faq_accordion',
  'title' => 'Block: FAQ Accordion',
  'fields' => array(
		array(
			'key' => 'acfb_faq_accordion__headline',
			'label' => 'Headline',
			'name' => 'faq-headline',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'acfb_faq_accordion__faq',
			'label' => 'Questions & Answers',
			'name' => 'faq',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add FAQ',
			'sub_fields' => array(
				array(
					'key' => 'acfb_faq_accordion__faq__question',
					'label' => 'Question',
					'name' => 'faq-question',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'acfb_faq_accordion__faq__answer',
					'label' => 'Answer',
					'name' => 'faq-answer',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
  'location' => array (
      array (
          array (
              'param' => 'block',
              'operator' => '==',
              'value' => 'acf/faq-accordion',
          ),
      ),
  ),
  "active" => 1,
  'show_in_graphql' => 1,
  "graphql_field_name" => "acfBlockFaqAccordion",
  "map_graphql_types_from_location_rules" => 1,
));