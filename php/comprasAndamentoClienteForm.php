<?php
	session_start();
	
	if(isset($_SESSION['nivel']) && $_SESSION['nivel']=="2"){


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style/comprasAndamentoCliente.css">
    <title>comprasAndamentoCliente</title>
</head>
<body>

<a href="../index.php">
<button class="btn btn-success" >Voltar para o catálogo</button>
</a>
<a href="../php/carrinhoComprasForm.php">
<button class="btn btn-warning">Ir para carrinho de compras</button>
</a>

<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Houve algum problema ao  cancelar a compra!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>compra cancelada com sucesso!</span>
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
<fieldset>
<h3 class="titulos">Compras efetuadas</h3>  

<?php
require_once("conexaoBanco.php");
$comando="SELECT * FROM compras WHERE usuarios_idUsuario = ".$_SESSION["idUsuario"];
//echo $comando;
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
	<form action="alterarStatus.php" method="POST">
		<input type="hidden" name="idCompra" value="<?=$c['idCompra']?>">
		<button type="submit" class="btn btn-danger">Cancelar compra </button>
	</form>	
	<?php
	}
?>

	<body>
</html>	
	<?php 

}else{
	echo "esta pagina esta protegida";
}

?>
