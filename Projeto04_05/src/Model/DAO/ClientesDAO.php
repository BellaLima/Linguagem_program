<?php

namespace Aluno\Projeto0405\Model\DAO;

use Aluno\Projeto0405\Model\Entity\Clientes;

class ClientesDAO{

    public function inserir(Clientes $c){
        try{
            $sql = "INSERT INTO `clientes`( `nome`, `email`, `idade`) VALUES (:nome, :email, :idade)";

        } catch(\Exception $e){
            return false;
        }//catch

    }//public

    public function alterar(Clientes $c){

        try{
            $sql = "UPDATE `clientes` SET `nome`=:nome,`email`=:email,`idade`=:idade WHERE id = :id";
        }catch(\Exception $e){
            return false;
        }

    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `clientes` WHERE id = :id";
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM clientes";
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM clientes WHERE id = :id";
        } catch(\Exception $e){
            return false;
        }
    }
}

?>