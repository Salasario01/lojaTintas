<?php
	session_start();
	
	if(isset($_SESSION['nivel']) && $_SESSION['nivel']=="1"){


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/cadastroFuncionarios.css">
    <title>CadastroFuncionarioForm</title>
</head>
<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Usuario com esse nome ja existe !</span>
        <button type="alert" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Funcionario cadastrado com sucesso !</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Houve algum erro ao cadastrar um novo funcionario !</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    
	<?php } ?>
</div>
<body>

<a href="../index.php">
<button id="btn1">Voltar ao catalogo</button>
</a>
<a href="../php/comprasAndamentoFuncionarioForm.php">
<button id="btn2">Compras em andamento</button>
</a>
<a href="../php/cadastroTintasForm.php">
<button id="btn3">Cadastro de tintas</button>
</a>

         <h1 id="title">Cadastro De Funcionarios</h1>

        <form class="formulario" action="cadastroFuncionario.php" method="POST">

            <div class="info"> 

                <label >Usuário</label>
                <br>
                <input required type="text" name="nomeUsuario" >
                <br> <br>
                <label >Senha</label>
                <br>
                <input required type="password" name="senha" >                
                <br>  <br>
                <label >CPF</label>
                <br>
                <input required type="number" name="cpf"  maxlength="11" minlength="11"  >
                <br> <br>
                <label >Nome Completo </label>
                <br>
                <input required type="text" name="nomeCompleto" >
                <br> <br>
                <button class="btn" type="submit"> Cadastrar novo funcionario</button>
                <br>  <br>
            </div>
        </form>
    
</body>
</html>
<?php 

		}else{
			echo "esta pagina esta protegida";
		}

?>