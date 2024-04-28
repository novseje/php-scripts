<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    $from = "Sender <info@testdomain.com>";

	$to = "myemail@gmail.com";
	$returnpath = "<info@testdomain.com>";

    $subject = "PHP Mail Test script";
    $message = "<p>This is a <b>test to check</b> the PHP Mail functionality.</p> <p><i>В кодировке UTF-8</i></p>";
    $headers = "From:" . $from;
    $headers .= "\r\n". "Content-type: text/html; charset=utf-8";
    $headers .= "\r\n". "Return-Path: info@testdomain.com";
	$additional = "-f$returnpath";
    $b_ok = mail($to,$subject,$message, $headers, $additional);

    if($b_ok)
    {
        echo "Test email sent";
    }
    else{
        echo "Error";
    }
