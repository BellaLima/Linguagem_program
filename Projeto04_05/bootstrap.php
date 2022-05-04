<?php

require_once __DIR__.'/vender/autoload.php';

//recupera o que o usuario digitou e qual o método HTTP q foi utilizado.
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//instanciar classe Router
$router = new \Aluno\Projeto04_05\Router($method, $path);

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
}