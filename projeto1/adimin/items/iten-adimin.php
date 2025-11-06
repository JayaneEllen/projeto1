<?php

require_once "adimin/config.inc.php";

$sql = "SELECT * FROM item";

$resultado = mysqli_query($conexao, $sql);

echo "<a href='?pg=item-form'>Cadastrar Intems</a>";

echo "<h2>Lista de Intem</h2><hr>";

if(mysqli_num_rows($resultado) > 0){
    while($dados = mysqli_fetch_array($resultado)){
        echo "ID: " . $dados['id'] . "<br>";
        echo "Codigo: " . $dados['codigo'] . "<br>";
        echo "Nome: " . $dados['nome'] . "<br>";
        echo "Descrição: " . $dados['descricao'] . "<br>";
        echo "<a href='?pg=item-form-alterar&id=$dados[id]'>Editar</a>";
        echo "| <a href='?pg=item-excluir&id=$dados[id]'>Excluir</a>";
        echo "<hr>";
    }
}else{
    echo "Nenhum Intem cadastrado!";
}