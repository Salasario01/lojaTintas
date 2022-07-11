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
        <span>esse login não existe, ou algum campo esta incompleto !</span>
        <button type="alert" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    
	<?php } ?>
</div>

<body>
    <form class="formUser" action="autenticacao.php" method="POST">
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
            <button type="submit" class="btn"> Entrar
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
             <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
             <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
             </svg>
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