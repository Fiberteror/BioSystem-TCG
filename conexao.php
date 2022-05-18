<?php
    $servidor="localhost";
    $usuario="Fiber";
    $senha="pastel&carneA2";
    $dbname="Usuarios";

    $conexao=mysqli_connect($servidor,$usuario,$senha,$dbname);
    if(!$conexao){
        die("Ocorreu um erro".mysqli_connect_error());
    }
?>
