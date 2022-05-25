<?php

namespace Aluno\Projeto0405\Controller;

use Aluno\Projeto0405\Model\Entity\Clientes;
use Aluno\Projeto0405\Model\DAO\ClientesDAO;


class ClientesController{
    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_cliente.php";
    }

    public static function abrirListaClientes(){
        require_once "../src/View/Listar_clientes.php";
    }


    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)){
            $resposta = true;
        }
        else{
            $resposta = false;
        }
        require("../src/View/Listar_clientes.php");
        
    }

}