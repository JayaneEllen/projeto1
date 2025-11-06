<?php

require_once "adimin/config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $id = $_POST["id"];

    $sql = "UPDATE clientes SET
            codigo = '$codigo'
            nome = '$nome'
            descricao = '$descricao'
            WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h3>Intem alterado com sucesso!</h3>";
        echo "<a href='?pg=item-adimin'>Voltar</a>";
    }else{
        echo "<h3>Erro ao alterar cadastro do intem!</h3>";
    }
}else{
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='pg=item-adimin'>Voltar</a>";
}

mysqli_close($conexao);