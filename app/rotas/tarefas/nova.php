<?php

post('/nova', function(){

    require_once "config/connection.php";

    $nome 	     = $_POST['nome'];
    $detalhes 	 = $_POST['detalhes'];
    $status      = $_POST['status'];
    
    // Insere
    $database->insert("todo", [
		"nome" 		=> $nome,
		"detalhes"  => $detalhes,
		"status" 	=> $status
	]);

    // Redireciona
	header("Location: ./");
});