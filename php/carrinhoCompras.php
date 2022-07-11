<?php
require_once("conexaoBanco.php");

$tintaCompra=$_POST['tintaCompra'];
$quantidades=$_POST['quantidades'];
$metodo=$_POST['metodo'];
$cep=$_POST['cep'];
$numero=$_POST['numero'];
$observacao=$_POST['observacao'];
$status= 1;

$comando="INSERT INTO compras (tintaCompra, qunatidades, metodo, numero, observacao, status)
VALUES ('".$tintaCompra."', '".$quantidades."', '".$metodo."', '".$cep."', '".$numero."', '".$observacao."')";

echo $comando;











?>