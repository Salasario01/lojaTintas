<?php

require_once ("conexaoBanco.php")

$nome=$_POST['nome'];
$preco=$_POST['preco'];
$foto=$_POST['foto'];
$codigo=$_FILES['foto']['name'];
$litros=$_POST['litros'];

$extensao= strtolower(substr($foto, -4));
//echo "Extensão do arquivo: ".$extensao;

$nomeFoto= date("Y.m.d-H.i.s") . $extensao;
$pasta="../fotos/";

move_uploaded_file($_FILES['foto']['tmp_name'], $pasta.$nomeFoto);

$comando="INSERT INTO tintas (nome, preco, foto, codigo, litros) 
VALUES ('".$nome."', '".$preco."', '".$foto."', '".$codigo."', ".$litros." )";

echo $comando;

?>