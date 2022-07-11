<?php
	session_start();
	
	if(isset($_SESSION['nivel']) && $_SESSION['nivel']=="2"){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprasAndamentoCliente</title>
</head>
<body>

<a href="../index.html">
<button>Voltar para o catálogo</button>
</a>
<a href="../php/comprasAndamentoFuncionarioForm.php">
<button>Ir para carrinho de compras</button>
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
		  <label class="control-label">Em andamento</label>  
		<div class="col-md-8">

		</div>
		</div>

        <div class="form-group">
		<label class="control-label"></label>
		<div class="col-md-8">
			<button  class="btn btn-danger" type="reset">Cancelar compra</button>		
		</div>
		</div>

	</form>
	<?php 

}else{
	echo "esta pagina esta protegida";
}

?>
