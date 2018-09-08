<?php

use Medoo\Medoo;

// Edite com suas credenciais

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'base',
    'server' => 'localhost',
    'username' => 'base',
    'password' => '123',

    // [optional]
	'charset' => 'utf8'
]);