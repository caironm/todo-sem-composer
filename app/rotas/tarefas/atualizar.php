<?php

get('/atualizar/status/([0-9]+)', function($id){

    require_once "config/connection.php";

    // Consulta o status da tarefa pelo ID, vai retornar 0 ou 1
    $status = $database->select("todo", "status", [
		"id" => $id
	]);

    // Inverte o valor do status
	if ($status['0'] == 0) {
		$novoStatus = 1;
	}else
	{
		$novoStatus = 0;
	}

	// Atualiza o status
	$database->update("todo", [
		"status" => $novoStatus
	], [
		"id" => $id
	]);

	// Redireciona para a Home
	header("Location: ./../../");

});