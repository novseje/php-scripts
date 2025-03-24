<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$redis=new Redis() or die("Can not load Redis.");
$redis->auth('redis_password'); 
$redis->connect('127.0.0.1'); 
$redis->set('Redis test_key', 1);