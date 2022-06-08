<?php

namespace Aluno\Projeto0405\Model\DAO;

use Produto;

class ProdutoDAO{

    public function inserir(Produto $c){
        try {
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome,:descricao,:valor)";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $c->getNome());
            $p->bindValue(":descricao", $c->getDescricao());
            $p->bindValue(":valor", $c->getValor());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function alterar(Produto $c){
        try {
            $sql = "UPDATE `produtos` SET `nome`=:nome,`descricao`=:descricao,`valor`=:valor 
                        WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $c->getNome());
            $p->bindValue(":descricao", $c->getDescricao());
            $p->bindValue(":valor", $c->getValor());
            $p->bindValue(":id", $c->getId());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function excluir($id){
        try {
            $sql = "DELETE FROM `produtos` 
                        WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function consultar(){
        try {
            $sql = "SELECT * FROM produtos";
            return Conexao::conectar()->query($sql);
        } catch (\Exception $e) {
            return false;
        }
    }

}