<?php

$config['db_host']='localhost';
$config['db_user']='root';
$config['db_pass']='';
$config['db_name']='project-finder';

foreach ($config as $key => $value) {
	define(strtoupper($key), $value);
}