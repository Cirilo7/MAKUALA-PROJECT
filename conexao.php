<?php

$servidor = "127.0.0.1";
$usuario="root";
$senha="";
$banco = "makuala foundation";
$con = mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$con) {
    echo "Erro: Nao foi possivel connectar ao banco de dados.";
    exit;
}
?>