<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Database Connectivity Settings */
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'			=> '',
	'hostname' 		=> getenv('DB_HOST'),
	'username' 		=> getenv('DB_USERNAME'),
	'password' 		=> getenv('DB_PASSWORD'),
	'database' 		=> getenv('DB_DATABASE'),
	'dbdriver' 		=> getenv('DB_CONNECTION'),
	'dbprefix' 		=> '',
	'pconnect' 		=> FALSE,
	'db_debug' 		=> (ENVIRONMENT !== 'production'),
	'cache_on' 		=> FALSE,
	'cachedir' 		=> '',
	'char_set' 		=> 'utf8',
	'dbcollat' 		=> 'utf8_general_ci',
	'swap_pre' 		=> '',
	'encrypt' 		=> FALSE,
	'compress' 		=> FALSE,
	'stricton' 		=> FALSE,
	'failover' 		=> array(),
	'save_queries' 	=> TRUE
);
