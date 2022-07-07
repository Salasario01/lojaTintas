<!DOCTYPE html>
<html lang="pt-br">
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
        <span>alerta 1</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>alerta 2</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==3){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>alerta 3</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==4){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>alerta 4</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==5){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<span>alerta 5!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

	<?php } ?>
</div>
<fieldset>
  <legend>Carrinho de compras</legend>
    <select name="nomeProduto">
     <?php
      require_once("conexaoBanco.php");
      $comando="SELECT * FROM tintas ORDER BY name ASC";
      $resultado=mysql_query($comando, $conexao);
      while($dados=mysql_fetch_array($resultado)){
          $nome=$dados['nome'];
          $preco=$dados['preco'];
          echo"<option value='$preco'>$nome</option>";
      };
     ?>
    </select>
 </fieldset>
</body>
</html>