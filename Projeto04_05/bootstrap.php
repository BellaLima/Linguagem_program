<?php

require_once __DIR__.'/vendor/autoload.php';

//recupera o que o usuario digitou e qual o método HTTP q foi utilizado.
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//instanciar classe Router
$router = new \Aluno\Projeto0405\Router($method, $path);

$router->get('/ola-mundo', function(){
    return 'ola mundo! <br> ola Isabela <br> Ola chico <br> ola Emerson';
});

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
}

echo $result($router->getParams());