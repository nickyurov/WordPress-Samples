<?php
/**
 * Custom cron event example
 */

// Scheduled Action Hook
function custom_cron_action() {
	// do something
	die();
}

add_action( 'custom_cron_action', 'custom_cron_action' );

// Schedule Cron Job Event
function add_custom_cron() {
	if ( ! wp_next_scheduled( 'custom_cron_action' ) ) {
		wp_schedule_event( current_time( 'timestamp' ), 'hourly', 'custom_cron_action' );
	}
}

add_action( 'wp', 'add_custom_cron' );