<?php
    $servidor="localhost";
    $usuario="Fiber";
    $senha="hehehe achou que ia passar minha senha aq?";
    $dbname="Usuarios";

    $conexao=mysqli_connect($servidor,$usuario,$senha,$dbname);
    if(!$conexao){
        die("Ocorreu um erro".mysqli_connect_error());
    }
?>
