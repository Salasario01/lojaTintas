<?php

require_once ("conexaoBanco.php");

$nome=$_POST['nome'];
$preco=$_POST['preco'];
$codigo=$_POST['codigo'];
$foto=$_FILES['foto']['name'];
$litros=$_POST['litros'];


$extensao= strtolower(substr($foto, -4));
//echo "Extensão do arquivo: ".$extensao;

$novoNomeFoto= date("Y.m.d-H.i.s") . $extensao;
$pasta="../fotos/";

move_uploaded_file($_FILES['foto']['tmp_name'], $pasta.$novoNomeFoto);

$comando="INSERT INTO tintas (foto, nome, preco, codigo, litros) 
VALUES ('".$idTinta."', '"$foto"', ".$nome.", '".$novoNomeFoto."', '".$codigo."', ".$litros." )";

echo $comando;
/*
$resultado=mysqli_query($conexao, $comando);
if($resultado){
    header("Location: tintaForm.php?retorno=1");
}else{
    header("Location: tintaForm.php?retorno=0");
}
*/

?>