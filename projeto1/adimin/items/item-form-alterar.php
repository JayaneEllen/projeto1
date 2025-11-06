<?php
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    while($dados = mysqli_fatch_array($resultado)){
        $codigo = $dados['codigo'];
        $nome = $dados['nome'];
        $descricao = $dados['descricao'];
        $id = $dados['id'];
    }
?>

<h2>Cadastro de Intem</h2>
<form action="?pg=item-alterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">

    <label>Codigo:</label>
    <input type="text" name="codigo" value="<?=$codigo?>">
<br>
    <label>Nome:</label>
    <input type="text" name="cidade" value="<?=$nome?>">
<br>
    <label>Descrição:</label>
    <input type="text" name="descricao" value="<?=$descricao?>">
<br>
    <input type="submit" value="Cadastrar Intem">
</form>

<?php
}else{
    echo "<h2>Nunhum intem encontrado!</h2>";
}
?>