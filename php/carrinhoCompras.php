<?php
require_once("conexaoBanco.php");

$tintaCompra=array();
$tintaCompra=$_POST['tintaCompra'];
$quantidades=array();
$quantidades= $_POST['quantidades'];
$metodo=$_POST['metodo'];
$cep=$_POST['cep'];
$numero=$_POST['numero'];
$observacao=$_POST['observacao'];
$status= "1";

session_start();

$comando="INSERT INTO compras (metodoPagamento, cep,  numero, observacao, status, usuarios_idUsuario)
VALUES 
('".$metodo."', ".$cep.", ".$numero.", '".$observacao."', ".$status.", ".$_SESSION['idUsuario'].")";


$resultado=mysqli_query($conexao, $comando);
//Consultado no banco o id do compromisso que foi registrado
$compra="SELECT MAX(idCompra) as idCompra FROM compras";
$resultadoIdComp=mysqli_query($conexao, $compra);
$idCompra=mysqli_fetch_assoc($resultadoIdComp);

for($i=0; $i<sizeof($tintaCompra); $i++){
    $comando="INSERT INTO tintas_has_compras(compras_idCompra, tintas_idTinta, quantidade)
    VALUES
    (".$idCompra['idCompra']." , ".$tintaCompra[$i].",  ".$quantidades[$i]." )";
    //echo $comando "<br>"
    $resultado=mysqli_query($conexao, $comando);
}
if($resultado==true){
    header("Location: comprasAndamentoClienteForm.php?retorno=1");
}else{
    header("Location: carrinhoComprasForm?retorno=0");
}







?>