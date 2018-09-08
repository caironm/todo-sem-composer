<?php

ini_set('display_errors', 1);
error_reporting(~0);

// Define a região
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

// Coloque a base da sua URL aqui
define('URL', 'http://localhost:8888/friends/todo/semcomposer/'); 

// Carregando os requerimentos
require 'config/base.php'; // Gera Url
require 'config/functions.php'; // Em branco, pra você colocar suas funções
require 'vendor/autoload.php'; // Usa com o composer

// Carregando rotas
require 'app/rotas/home.php';
require 'app/rotas/tarefas/nova.php';
require 'app/rotas/tarefas/atualizar.php';
require 'app/rotas/tarefas/editar.php';
require 'app/rotas/tarefas/deletar.php';

require 'app/rotas/exemplo.php';

// Checa se a rota passada no navegador não tiver cadastrada ai chama o 404
if (!Base::$routeProccessed) {
    require "app/views/404.php";
}