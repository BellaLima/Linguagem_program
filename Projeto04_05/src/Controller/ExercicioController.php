<?php

namespace Aluno\Projeto0405\Controller;

class ExercicioController
{
    public static function exibir(){
        require_once("../src/View/Exemplo.php");
    }

    public static function exibir_resultado(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $soma = $valor1 + $valor2;
        require_once("../src/View/exemplo.php");
    }
}

