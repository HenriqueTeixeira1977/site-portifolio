<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db ="orm_orcamento-github";
    $conexao=mysqli_connect("$servidor, $usuario, $senha, $dbname");
    
    if(!$conexao) {
        die("Houve um erro: " . mysqli_connect_error());
    }
?>