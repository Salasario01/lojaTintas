<?php

    require_once("conexaoBanco.php");

    $nomeUsuario=$_POST['nomeUsuario'];
    $senha=$_POST['senha'];

    $comando="SELECT * FROM usuarios WHERE nomeUsuario='$nomeUsuario' AND senha='$senha'";


    $resultado=mysqli_query($conexao, $comando);

    $linhas=mysqli_num_rows($resultado);

    if($linhas==0){
        // se o login não existir no no banco
        header("location: ../index.php?retorno=1");
    }else{
        $usuario=mysqli_fetch_assoc($resultado);
        session_start();
        $_SESSION['nivel']=$usuario['nivel'];

        if($usuario['nivel']=='1'){ 
            //se ele for funcionario    
            header("Location: cadastroFuncionarioForm.php");
        }else{
            //se ele for cliente 
            header("Location: carrinhoComprasForm.php");
        }
    }

?>