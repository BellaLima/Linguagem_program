<?php

use Aluno\ListaComRotas\Lista1\Controller\Ex1;
use Aluno\ListaComRotas\Lista1\src\View\Router;

require_once __DIR__.'/vendor/autoload.php';

//recupera o que o usuario digitou e qual o método HTTP q foi utilizado.
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//instanciar classe Router
$router = new \Aluno\ListaComRotas\Lista1\Router($method, $path);

$router->get('/ola-mundo', function(){
    return 'ola mundo! <br> ola Isabela <br> Ola chico <br> ola Emerson <br>
    O Brasil registrou nesta sexta-feira (6) 176 mortes pela Covid-19 nas últimas 24 horas, totalizando 664.143 desde o início da pandemia. Com isso, a média móvel de mortes nos últimos 7 dias é de 94. Em comparação à média de 14 dias atrás, a variação foi de -2%, indicando tendência de estabilidade nos óbitos decorrentes da doença.';
});


$router->get('/Exercicio1', 'Aluno\ListaComRotas\Lista1\Controller\Ex1::exibir');

// COLOCAR AS ROTAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());