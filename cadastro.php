<?php

    require_once('conexao.php');

    $nome=$_POST['nome'];
    $senha=$_POST['senha'];

    echo $nome;

    $sql="INSERT INTO Usuario (nome,senha, coins) VALUES ('$nome', '$senha', 100)";
    $cadastrar = mysqli_query($conexao, $sql);
    if($cadastrar){
        echo"usuario cadastrado";
}
    else{
        echo"nao foi".mysqli_connect_errno();
}

?>
