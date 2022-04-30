<?php

class Ponto{
    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
        self::setContador();
    }

    //calcular a distancia de um ponto a outro qualquer
    public function CalcularDistancia1(Ponto $p){
        $valorX = pow(($p->getX()- $this->x), 2); //potencia de x no expoente 2
        $valorY = pow(($p->getY()- $this->y), 2); //potencia de y no expoenteb 2
        return sqrt($valorX + $valorY);
    }

    public function CalcularDistancia2($x2, $y2){
        $valorX = pow(($x2-> $this->x), 2); //potencia de x no expoente 2
        $valorY = pow(($y2-> $this->y), 2); //potencia de y no expoenteb 2
        return sqrt($valorX + $valorY);
    }

    //passar os quatro objetos por parametros
    public function CalcularDistancia3($x1, $x2, $y1, $y2){
        $valorX = pow($x2 - $x1, 2) + pow($y1 - $y2, 2);
        return sqrt($valorX);
    }
    
    // o contador é privado para que não seja acessado em outra classe sem que esteja criado
    //um objeto para ele.

    private static function setContador(){
        self::$contador++;
    }
    // self é para acessar propriedades e métodos statc dentro da classe

    public static function getContador(){
        return self::$contador;
    }

    public function getX(){
        return $this->x;
    }

    public function setX($x){
        $this->x = $x;
    }

    public function getY(){
        return $this->y;
    }

    public function setY($y){
        $this->y = $y;
    }

}// ponto