<?php

    require_once("Ponto.php");
    $p1 = new  Ponto(2,4);
    echo "Quantidade de objetos criados: " .Ponto::getContador();

    $p2 = new Ponto(4,6);
    echo "Distâcia entre os pontos: ". $p1->CalcularDistancia1($p2);
    echo "A diatância entre os pontos: ". $p1->CalcularDistancia2(4,6);

?>
