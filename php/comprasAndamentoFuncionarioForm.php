<?php
	session_start();
	
	if(isset($_SESSION['nivel']) && $_SESSION['nivel']=="1"){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprasAndamentoFuncionario</title>
</head>
<body>

<a href="../index.php">
<button>Voltar para o catálogo</button>
</a>
<a href="../php/cadastroFuncionarioForm.php">
<button>Cadastro de Funcionario</button>
</a>
<a href="../php/cadastroTintasForm.php">
<button>Cadastro de Tintas</button>
</a>

<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Houve algum problema ao cadastrar a tinta!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Tinta cadastrada com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Tinta excluída com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==3){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Não é possível excluir uma tinta associada a compromissos!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==4){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Tinta editada com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==5){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<span>Houve algum problema ao editar a tinta!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

	<?php } ?>
</div>

<h3 class="titulos">Compra</h3>  

	<form action="cadastroTintas.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		  <label class="control-label">Nome do cliente:</label>  
		<div class="col-md-8">
		<div class="form-group">
		  <label class="control-label">João Silva</label>  
		<div class="col-md-8">
		
		</div>
		</div>
		
		 <div class="form-group">
		  <label class="control-label">Compra:</label>  
		<div class="col-md-8">
		 <div class="form-group">
		  <label class="control-label">Tinta1, Tinta2</label>  
		<div class="col-md-8">
	
		</div>
		</div>

		 <div class="form-group">
		  <label class="control-label">Preço:</label>  
		<div class="col-md-8">
		 <div class="form-group">
		  <label class="control-label">R$: 00,00</label>  
		<div class="col-md-8">
	
		</div>
		</div>

        <div class="form-group">
		  <label class="control-label">Estado da entrega:</label>  
		<div class="col-md-8">
        <div class="form-group">
		  
		<div class="col-md-8">

        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option selected>Em andamento</option>
          <option value="1">Enviado</option>
          <option value="2">Cancelado</option>
          <option value="3">Entregue</option>
        </select>

        </div>
		</div>

		 <div class="form-group">
		  <label class="control-label">Endereço de entrega:</label>  
		<div class="col-md-8">
		 <div class="form-group">
		  <label class="control-label">Rua Brasil</label>  
		<div class="col-md-8">
	
		</div>
		</div>

	</form>

    <h4 class="titulos">Pesquisa</h4>
	
	<form action="#" method="GET">
		<div class="form-group">
		  <label class="control-label" for="textoPesquisa">Nome do cliente</label>  			
          </div>
		</div>

        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option selected>João Silva</option>
          <option value="1">Bruno Pereira</option>
          <option value="2">Marcos da Silva</option>
          <option value="3">Beatriz Gonçalves</option>
        </select>
			 <button type="submit" class="botaoAcao">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
				<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
				</svg>
			 </button>			 
		</div>
	</form>

	<?php 

}else{
	echo "esta pagina esta protegida";
}

?>
