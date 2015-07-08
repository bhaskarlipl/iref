<?php

$_SERVER['REQUEST_SCHEME'] = 'https';
$_SERVER['SCRIPT_URI'] = str_replace('http://','https://',$_SERVER['SCRIPT_URI']);
$_ENV['SCRIPT_URI'] = $_SERVER['SCRIPT_URI'];
$_ENV['REQUEST_SCHEME'] = 'https';
apache_setenv('REQUEST_SCHEME','https');
apache_setenv('SCRIPT_URI',$_SERVER['SCRIPT_URI']);

?>
