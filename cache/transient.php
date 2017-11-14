<?php
/**
 * WordPress transient cache usage example
 */

$some_data = get_transient( 'some_transient_key' );

if( empty( $some_data ) ){

	$some_data = get_posts( '...' );

	if( $some_data ) {
		set_transient( 'some_transient_key', $some_data, DAY_IN_SECONDS );
	}

}