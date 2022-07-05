<?php
require_once("conexaoBanco.php");

$nomeUsuario=$_POST['nomeUsuario'];
$senha=$_POST['senha'];
$cpf=$_POST['cpf'];
$nomeCompleto=$_POST['nomeCompleto'];
$nivel= 1;

$comando="SELECT * FROM usuarios WHERE nomeUsuario='".$nomeUsuario."'";
$resultado=mysqli_query($conexao, $comando);
$linhas=mysqli_num_rows($resultado);

if($linhas>0){ //se já tiver um usuário igual no banco
    header("Location: CadastroFuncionarioForm.php?retorno=0");
}else{

        $comando="INSERT INTO usuarios (nomeUsuario, senha, cpf, nomeCompleto, nivel )
        VALUES ('".$nomeUsuario."', '".$senha."', '".$cpf."', '".$nomeCompleto."', '".$nivel."')";

        echo $comando;

        $resultado=mysqli_query($conexao, $comando);
        if($resultado){// quando da certo o cadastro !
            header("Location: CadastroFuncionarioForm.php?retorno=1");
        }else{ //quando não da certo o cadastro do cliente por motivo aleatorio 
            header("Location: CadastroFuncionarioForm.php?retorno=2");
        }

}




?>