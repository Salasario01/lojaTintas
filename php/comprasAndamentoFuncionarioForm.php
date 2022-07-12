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
	<link rel="stylesheet" href="../style/comprasAndamentoFuncionario.css">
    <title>comprasAndamentoFuncionario</title>
</head>
<body>

<a href="../index.php">
<button id="btn1" >Voltar para o catálogo</button>
</a>
<a href="../php/cadastroFuncionarioForm.php">
<button id="btn2">Cadastro de Funcionario</button>
</a>
<a href="../php/cadastroTintasForm.php">
<button id="btn3" >Cadastro de Tintas</button>
</a>

<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Houve algum problema ao definir a compra como entregue !</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Compra definida como entrege com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>2</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==3){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>3</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==4){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>4</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==5){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<span>5</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

	<?php } ?>
</div>

<?php
require_once("conexaoBanco.php");
$comando="SELECT * FROM compras ";

$resultado=mysqli_query($conexao, $comando);
$compras = array();

while($c = mysqli_fetch_assoc($resultado)){
	array_push($compras, $c);
}
$status = "Em andamento";
foreach($compras as $c){
	if($c['status']=="1"){
		$status = "Em andamento";
	}else if($c['status']=="2"){
		$status = "Cancelado";
	}else {
		$status = "Entregue";
	}
	echo "<fieldset>
	<legend> Compra </legend>
	Status da entrega:".$status." 
	<br> CEP: ".$c['cep']." 
	<br>Método de pagamento: ".$c['metodoPagamento']." </fieldset>"; ?>
	<form action="alterarStatus2.php" method="POST">
		<input type="hidden" name="idCompra" value="<?=$c['idCompra']?>">
		<button type="submit" class="btn btn-danger">Marcar compra como enviada  </button>
	</form>	
	<?php
	}
?>
	<?php 

}else{
	echo "esta pagina esta protegida";
}

?>
