<?php

class Laser extends Impressora{

    private $capacidadeToner;
    private $frenteVereso;

    public function __construct($marca, $modelo, $colorida, $peso, $capacidadeToner, $frenteVereso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->set($numAgulha);
        $this->setColorida($colorida);
        $this->setImprimeVias($imprimeVias);
        $this->setPeso($peso);
    }

    public function getCapacidadeToner(){
        return $this->capacidadeToner;
    }

    public function setCapacidadeToner($capacidadeToner){
        $this->capacidadeToner = $capacidadeToner;
    }

    public function getFrenteVerso(){
        return $this->frenteVereso;
    }

    public function setFrenteVerso($frenteVereso){
        $this->frenteVereso = $frenteVereso;
    }
}