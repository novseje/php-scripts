<?php 
$redis=new Redis() or die("Can not load Redis.");
$redis->connect('127.0.0.1'); 
$redis->set('Redis test_key', 1);