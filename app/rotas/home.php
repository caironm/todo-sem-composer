<?php

get('/', function(){

	require_once "config/connection.php";

	$tarefas = $database->select('todo',[
			"id",
			"nome",
			"detalhes",
			"status"
		],
		[
			"ORDER" => ["id" => "DESC"]
		]);
	
    require "app/views/home.php";
});