<?php
    require_once "pdoConexao.php";

    $query = "CREATE TABLE if not exists usuario(
            nome varchar (50) not null,
            idade varchar (3) not null,
            sexo varchar (2)
            )";

    $conexao = novaConexao();
    $retorno = $conexao -> exec($query);
    echo $retorno;
?>