<?php

require_once "adimin/config.inc.php";

$id = $_GET["id"];
$sql = "DELETE FROM item WHERE id = '$id'";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "Registro excluido com sucesso!";
    echo "<a href='?pg=item-adimin'>Voltar</a>";
}else{
    echo "Erro ao excluir registro!";
}

mysqli_close($conexao);