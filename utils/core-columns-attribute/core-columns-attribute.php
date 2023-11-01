<?php

add_action('enqueue_block_editor_assets', function() {
	wp_enqueue_script('core-columns-attribute', get_template_directory_uri() . '/utils/core-columns-attribute/build/index.js', ['wp-edit-post'], null);
});

add_action( 'graphql_register_types', 'example_extend_wpgraphql_schema' );
function example_extend_wpgraphql_schema() {
	register_graphql_field( 'CoreColumnsAttributes', 'isContained', [
		'type' => 'Boolean',
		'description' => __('Whether or not the column content is contained', 'awp-container-setting'),
    'resolve' => function( $root, $args, $context, $info ) {
			$value = $root['attrs']['isContained'];
			if ( is_null( $value ) || false === $value ) {
				return false;
			}
			return true;
    },
	] );
};

