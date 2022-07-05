<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../style/cadastroCliente.css">
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
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Relação excluída com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==3){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Não é possível excluir uma relação associada a pessoas!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==4){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Relação editada com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==5){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<span>Houve algum problema editar a relação!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

	<?php } ?>
</div>
<body>
        <form  action="cadastroClientes.php" method="POST" class="formUser">
            <div class="info">
                <h1>Cadastro</h1>
                <br>
                <label class="label" >Usuário</label>
                <br>
                <input type="text" class="input">
                <br>
                <label class="label" >CPF</label>
                <br>
                <input type="text" class="input">
                <br>
                <label class="label" >Senha</label>
                <br>
                <input type="password" class="input">
                <br>
                <label class="label" >Nome Completo</label>
                <br>
                <input type="password" class="input">
                <br>
                </div>
                <button type="submit" class="btn">
               
                </button>
                </form>

                <p>Já tem uma conta?<a href="../php/loginForm.php"> Faça Login</a></p>
                
                

        <div class="footer">
            <footer>
                <p>Todos os direitos reservados - 2022 &copy;</p>
            </footer>
        </div>
    </html>
</body>
</html>