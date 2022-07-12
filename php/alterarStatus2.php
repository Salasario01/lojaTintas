<?php
require_once("conexaoBanco.php");
$idCompra=$_POST['idCompra'];
$status="3";

$comando="UPDATE compras SET status = ".$status." WHERE idCompra = ".$idCompra;

$resultado=mysqli_query($conexao, $comando);
if($resultado){// quando da certo o cadastro !
    header("Location: comprasAndamentoFuncionarioForm.php?retorno=1");
}else{ //quando não da certo o cadastro do cliente por motivo aleatorio 
    header("Location: comprasAndamentoFuncionarioForm.php?retorno=0");
}














?>