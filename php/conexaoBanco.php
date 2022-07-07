<?php

    $usuario="root";
    $senha="";
    $local="localhost";
    $banco="lojatintas";

    $conexao=mysqli_connect($local, $usuario, $senha, $banco);

    mysqli_set_charset($conexao, "utf8");

?>