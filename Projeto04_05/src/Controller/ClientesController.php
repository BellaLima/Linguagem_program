<?php

namespace Aluno\Projeto0405\Controller;

use Aluno\Projeto0405\Model\Entity\Clientes;
use Aluno\Projeto0405\Model\DAO\ClientesDAO;


class ClientesController{
    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_cliente.php";
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $dao = new ClientesDAO();
        if ($dao->inseir($cliente)){
            return "Inserido com sucesso";
        }
        else
            "Erro ao inserir";
    }
}