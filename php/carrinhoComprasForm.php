<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarrinhoComprasForm</title>
</head>
<body>

<a href="../index.html">
<button>Voltar ao catálogo</button>
</a>
<a href="../php/comprasAndamentoFuncionarioForm.php">
<button>Finalizar compra</button>
</a>
<a href="../php/cadastroTintasForm.php">
<button>Compras em andamento</button>
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
<fieldset >
<legend>Carrinho de compras </legend>

	<form action="cadastroTintas.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		  <label class="control-label">Tinta 1 </label>  
		<div class="col-md-8">
		 <input type="text" name="nome" accept="image/*" class="form-control" >
	
     <label for="points"></label>
  <input type="number"  name="preco1" step="1" min="1" max="50">
  <input type="submit">
		
		 <div class="form-group">
		  <label class="control-label">Tinta 2 </label>  
		<div class="col-md-8">
		 <input type="text" name="preco" class="form-control" >

     <label for="points"></label>
  <input type="number"  name="preco2" step="1" min="1" max="50">
  <input type="submit">
        </fieldset>
<h3 class="titulos">Informações de entrega e Pagamento</h3>  

	<form action="cadastroTintas.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		  <label class="control-label">Tintas </label>  
		<div class="col-md-8">
		 <input type="text" name="nome" accept="image/*" class="form-control" >
		</div>
		</div>
		
		 <div class="form-group">
		  <label class="control-label">Quantidades </label>  
		<div class="col-md-8">
		 <input type="text" name="preco" class="form-control" >
		</div>
		</div>

        <div class="form-group">
		  <label class="control-label">Endereço de entrega </label>  
		<div class="col-md-8">
		 <input type="text" name="codigo" class="form-control" >
		</div>
		</div>
		
		<div class="form-group">
		  <label class="control-label">Método de pagamento </label>  
		<div class="col-md-8">

        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option selected>Escolha a forma de pagamento</option>
          <option value="1">Boleto</option>
          <option value="2">Cartão de Débito</option>
          <option value="3">Cartão de Crédito</option>
        </select>

	</form>