<?php

require_once "adimin/config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];

    $sql = "INSERT INTO item (codigo, nome, descricao) VALUES ('$codigo', '$nome', '$descricao')";

    if(mysqli_query($conexao, $sql)){
        echo "<h3>Intem cadastrado com sucesso!</h3>";
        echo "<a href='?pg=iten-adimin'>Voltar</a>";
    }else{
        echo "<h3>Erro ao cadastrar intem!</h3>";
    }
}else{
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='?pg=item-adimin'>Voltar</a>";
}

 mysqli_close($conexao);