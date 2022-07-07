<?php

require_once("conexaoBanco.php");

$idTinta=$_POST['idTinta'];

$vercadastro="SELECT * FROM tintas_has_compras WHERE tintas_idTinta=".$idTinta;

$resultadocadastro = mysqli_query($conexao, $vercadastro);
$linhas=mysqli_num_rows($resultadocadastro);

if($linhas==0){
    $comandoFoto="SELECT foto FROM tintas WHERE idTinta=".$idTinta;
    $resultadoFoto=mysqli_query($conexao, $comandoFoto);
    $foto=mysqli_fetch_assoc($resultadoFoto);
    if($foto['foto']!=""){ //se a tinta tem foto...
        unlink("../fotos/".$foto['foto']);    
    }    
    $comandoExclusao="DELETE FROM tintas WHERE idTinta=".$idTinta;
    $resultadoExclusao=mysqli_query($conexao,$comandoExclusao);

    if($resultadoExclusao){
        header("Location: cadastroTintasForm.php?retorno=2");
    }
}else{
    //a tinta não pode ser excluída
    header("Location: cadastroTintasForm.php?retorno=3");
}


?>