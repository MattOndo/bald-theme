<?php

function bald_child_disable_blocks( $allowed_blocks ) {
	$blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

	unset( $blocks[ 'core/image' ] );

	return array_keys( $blocks );
}
add_filter( 'allowed_block_types_all', 'bald_child_disable_blocks' );
