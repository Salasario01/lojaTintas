<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Houve algum problema em se cadastrar ! porfavor tente novamente! </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Cadastro realizado com sucesso ! </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  
    <?php } else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>U</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    
	<?php } ?>
</div>

<body>
    <form class="formUser" action="php/autenticacao.php" method="POST">
        <div class="info">
            <h1>Login</h1>
            <br>
            <label class="label" >Usuário</label>
            <br>
            <input type="text" name="nomeUsuario" class="input">
            <br>
            <label class="label" >Senha</label>
            <br>
            <input type="password" name="senha" class="input">
            <br>
            <p>Ainda não tem uma conta?<a href="../php/cadastroClienteForm.php"> Cadastre-se</a></p>
            <button type="submit" class="btn">
                <a class="btnEntrar" href="/index.php">
                    Entrar
                </a>
            </button>
            
            

    </div>
    </form>

    <div class="footer">
        <footer>
            <p>Todos os direitos reservados - 2022 &copy;</p>
        </footer>
    </div>
</body>
</html>