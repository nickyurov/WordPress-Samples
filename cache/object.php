<?php
/**
 * WordPress object cache usage example
 */
// Setup cache
wp_cache_set( 'some_data_cache', $some_data );

// ...

// Retrieve cache
$some_data = wp_cache_get( 'some_data_cache' );

// ...

// Delete cache
wp_cache_delete( 'some_data_cache' );