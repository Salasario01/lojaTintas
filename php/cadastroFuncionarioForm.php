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
    <title>CadastroFuncionarioForm</title>
</head>
<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Usuario com esse nome ja existe !</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
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

<a href="../index.html">
<button>Voltar ao catalogo</button>
</a>
<a href="../php/comprasAndamentoFuncionarioForm.php">
<button>Compras em andamento</button>
</a>
<a href="../php/cadastroTintasForm.php">
<button>Cadastro de tintas</button>
</a>

<main>
        <h1> Cadastro de Funcionario</h1>
        <form action="cadastroFuncionario.php" method="POST">
                     
                <label >Usuario</label>
                <input required type="text" name="nomeUsuario" >
                <br> <br>
                <label >Senha</label>
                <input required type="password" name="senha" >                
                <br>  <br>
                <label >CPF</label>
                <input required type="number" name="cpf"  maxlength="11" minlength="11"  >
                <br> <br>
                <label >Nome Completo </label>
                <input required type="text" name="nomeCompleto" >
                <br> <br>
                <button type="submit"> Cadastrar novo funcionario</button>
                <br>  <br>
        </form>
    </main>
</body>
</html>
<?php 

		}else{
			echo "esta pagina esta protegida";
		}

?>