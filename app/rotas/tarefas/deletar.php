<?php

get('/deletar/([0-9]+)', function($id){

	require_once "config/connection.php";

    $database->delete("todo", [
		"AND" => [
			"id" => $id
			]
	]);

    // Redireciona voltando 2 pastas para a home porque estamos em /delete/id/
	header("Location: ./../");
});
