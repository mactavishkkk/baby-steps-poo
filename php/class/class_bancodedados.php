<?php
    class bancoDeDados{
        var $conexao;
        function __construct(){
            $this->conexao=new PDO('mysql:host=localhost; dbname=testeoo', 'root', '')
            or die ("Não conectou ao BD!");
            return $this->conexao;
        }
        function executaQuery($umSql){
            return $this->conexao->exec($umSql);
        }
    }

?>