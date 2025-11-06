<?php

echo "<h1>Painel adminstrativo</h1>";

echo "<a href='?pg=clientes-adimin'>Listar Clientes</a> | ";

echo "<a href='?pg=item-adimin'>Listar Intem</a> | ";

// Área de conteúdo
if(empty($_SERVER['QUERY_STRING'])){
    echo "<h3>Bem-vindo ao painel adimin.";
}else {
    $pg = "$_GET[pg]";
    include_once "$pg.php";
}