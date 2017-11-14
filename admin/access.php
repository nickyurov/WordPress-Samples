<?php
/**
 * How to access WP Admin without password
 */

// Option 1 - reset password for existing user
$user_id  = 1;
$password = '123';
wp_set_password( $password, $user_id );

// Option 2 - create new user with administrator privileges
$userdata = array(
	'user_login' => 'dev-admin',
	'role'       => 'administrator',
	'user_pass'  => '123',
);
$user_id = wp_insert_user( $userdata );