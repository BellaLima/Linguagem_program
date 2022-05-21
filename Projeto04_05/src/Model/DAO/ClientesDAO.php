<?php

namespace Aluno\Projeto0405\Model\DAO;

use Aluno\Projeto0405\Model\Entity\Clientes;

class ClientesDAO{

    public function inserir(Clientes $c){
        try{
            $sql = "INSERT INTO `clientes`( `nome`, `email`, `idade`) VALUES (:nome, :email, :idade)";
            $p = Conexao :: conectar()->prepare($sql);
            $p->bindvalue(":nome", $c->getNome());
            $p->bindvalue(":email", $c->getEmail());
            $p->bindvalue(":idade", $c->getIdade());
            return $p->execute();
            

        } catch(\Exception $e){
            return false;
        }//catch

    }//public

    public function alterar(Clientes $c){

        try{
            $sql = "UPDATE `clientes` SET `nome`=:nome,`email`=:email,`idade`=:idade WHERE id = :id";
            $p = Conexao :: conectar()->prepare($sql);
            $p->bindvalue(":nome", $c->getNome());
            $p->bindvalue(":email", $c->getEmail());
            $p->bindvalue(":idade", $c->getIdade());
            $p->bindvalue(":id", $c->getId());
            return $p->execute();

        }catch(\Exception $e){
            return false;
        }

    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `clientes` WHERE id = :id";
            $p = Conexao :: conectar()->prepare($sql);
            $p->bindvalue(":id", $id);
            return $p->execute();

        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM clientes";
            return Conexao::conectar()->query($sql);

        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM clientes WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);

        } catch(\Exception $e){
            return false;
        }
    }
}

?>