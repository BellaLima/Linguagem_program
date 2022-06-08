<?php


namespace Aluno\ListaComRotas\Lista1\Controller;


class Ex1
{

    public static function exibir()
    {
        require_once("../src/Controller/Ex1.php");
    }


    public static function exibirResultado()
    {
        $valorP = $_POST['valorP'];
        $preco = $_POST['preco'];
        $troco = $valorP - $preco;
        require_once("../src/View/Exercicio1.php");
    }
}