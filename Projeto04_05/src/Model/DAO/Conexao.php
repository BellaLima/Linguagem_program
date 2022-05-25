<?php

namespace Aluno\Projeto0405\Model\DAO;

use PDO;

class Conexao{

    public static function conectar(){
        return
            new PDO("mysql:host=localhost; dbname=banco", "root", "");
    }
}