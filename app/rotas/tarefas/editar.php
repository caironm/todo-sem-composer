<?php

// método get
get('/editar/([0-9]+)', function($id){

    require_once "config/connection.php";

    // Selecionar tudo na tabela todo onde o Id for = $id
    $datas = $database->select("todo", "*", [
		"id" => $id
	]);

	require "app/views/tarefas-editar.php"; //A leitura acontece depois da Home.
});


// método post
post('/editar', function(){

	require_once "config/connection.php";

	$id 		= $_POST['id'];
	$nome 		= $_POST['nome'];
    $detalhes	= $_POST['detalhes'];
    $status 	= $_POST['status'];
    
	// atualizando tarefa pelo ID
	$database->update("todo", [
		"nome" => $nome,
		"detalhes" => $detalhes,
		"status" => $status
	], [
		"id" => $id
	]);

	// Redireciona para a home
	header("Location: ./");
});