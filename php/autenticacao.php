<?php

    require_once("conexaoBanco.php");

    $nomeUsuario=$_POST['nomeUsuario'];
    $senha=$_POST['senha'];

    $comando="SELECT * FROM usuarios WHERE nomeUsuario='$nomeUsuario' AND senha='$senha'";


    $resultado=mysqli_query($conexao, $comando);

    $linhas=mysqli_num_rows($resultado);

    if($linhas==0){
        header("location: ../index.php?retorno=1");
    }else{
        $usuario=mysqli_fetch_assoc($resultado);
        session_start();
        $_SESSION['nivel']=$usuario['nivel'];

        if($usuario['nivel']=='1'){    
            header("Location: principalsecretaria.php");
        }else{
            header("Location: principalExecutivo.php");
        }
    }

?>