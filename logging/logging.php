<?php
/**
 * Log to file
 */

function custom_log( $message, $file = 'debug.log' ) {
	$t     = microtime( true );
	$micro = sprintf( "%06d", ( $t - floor( $t ) ) * 1000000 );
	$d     = new DateTime( date( 'Y-m-d H:i:s.' . $micro, $t ) );

	error_log( $d->format( "Y-m-d H:i:s.u" ) . ' ' . $message . PHP_EOL, 3, ABSPATH . $file );
}