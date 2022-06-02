<?php
    require_once("class/class_pessoas.php");
    $objPessoa = new pessoas;
    $nome = "Joao";
    $profissão = "Developer";
    $objPessoa->novaPessoa($nome, $profissão);
?>