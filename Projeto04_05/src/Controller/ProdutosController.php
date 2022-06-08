<?php

namespace Aluno\Projeto0405\Controller;

use Aluno\Projeto0405\Model\Entity\Produto;
use Aluno\Projeto0405\Model\DAO\ProdutoDAO;

class ProdutosController{
    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function abrirListarProdutos()
    {
        $dao = new ProdutoDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_produtos.php";
    }

    public static function inserirProduto(){
        $produto = new Produto();
        $produto -> setDescricao($_POST['descricao']);
        $produto -> setValor($_POST['valor']);
        $produto -> setNome($_POST['nome']);
        $dao = new ProdutoDAO();
        if ($dao->inserir($produto)) {
            $resposta = true;
        } else {
            $resposta = false;
        }
        
    }    
    public static function editarProduto($params){
        $produto = new Produto();
        $produto->setNome($_POST['nome']);
        $produto->setDescricao($_POST['descricao']);
        $produto->setValor($_POST['valor']);
        $produto->setId($params[1]);
        $dao = new ProdutoDAO();
        if ($dao->alterar($produto)){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ProdutosController::abrirListarProdutos();
    }

    public static function excluirProduto($params){
        $dao = new ProdutoDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ProdutosController::abrirListarProdutos();
    }

}
