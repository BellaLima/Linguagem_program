<?php 

class Matricial extends Impressora {

    private $numAgulha;
    private $imprimeVias;

    public function __construct($marca, $modelo, $numAgulha, $colorida, $imprimeVias, $peso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setNumAgulha($numAgulha);
        $this->setColorida($colorida);
        $this->setImprimeVias($imprimeVias);
        $this->setPeso($peso);
    }

    public function getNumAgulha(){
        return $this->numAgulha;
    }

    public function setNumAgulha($numAgulha){
        $this->numAgulha = $numAgulha;
    }

    public function getImprimeVias(){
        return $this->imprimeVias;
    }

    public function setImprimeVias($imprimeVias){
        $this->imprimeVias = $imprimeVias;
    }
}

?>