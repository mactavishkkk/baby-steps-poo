<?php
    require_once("class_bancodedados.php");
    class pessoas{
        function novaPessoa($nome, $profissao){
            $umSql = "insert into tbpessoas values (0, '$nome', '$profissao');";
            $this->objBD = new bancoDeDados();
            return $this->objBD->executaQuery($umSql);
        }
    }
?>