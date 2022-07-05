<?php
require_once("conexaoBanco.php");

$nomeUsuario=$_POST['nomeUsuario'];
$senha=$_POST['senha'];
$cpf=$_POST['cpf'];
$nomeCompleto=$_POST['nomeCompleto'];
$nivel= 2;

$comando="INSERT INTO usuarios (nomeUsuario, senha, cpf, nomeCompleto, nivel )
 VALUES ('".$nomeUsuario."', '".$senha."', '".$cpf."', '".$nomeCompleto."', '".$nivel."')";

echo $comando;

$resultado=mysqli_query($conexao, $comando);
if($resultado){
    header("Location: loginForm.php?retorno=1");
}else{
    header("Location: cadastroClienteForm.php?retorno=0");
}


?>