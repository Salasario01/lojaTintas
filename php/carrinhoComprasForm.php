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
    <title>CarrinhoComprasForm</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="../js/tintas.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/carrinhoCompras.css">
</head>
<body>

<a href="../index.php">
<button class="btn btn-danger">Voltar ao catálogo</button>
</a>
</a>
<a href="../php/comprasAndamentoClienteForm.php">
<button class="btn btn-warning">Compras em andamento</button>
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

<form  action="carrinhoCompras.php" method="POST">
<fieldset>
  <legend>Carrinho de compras</legend>
   <div id="tintas"> 
       <div class="tinta">
            <select required class="selectTintas form-control" name="tintaCompra[]">
            <option></option>
                <?php 
                    require_once("conexaoBanco.php");
                $comando = "SELECT * FROM tintas ";
                $resultado = mysqli_query($conexao, $comando);
                while($dados = mysqli_fetch_assoc($resultado)) {
                    echo '<option value="'.$dados['idTinta'].'"> '.$dados['nome'].' '.$dados['litros'].'- L - R$ '.$dados['preco'].' </option>';
                }
                ?>
            </select>
            <input required type="number" name="quantidades[]" maxlength="2" max="50" min="1">

            <button type="button" onclick="adicionarTinta()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>

            </button>
            <button type="button" onclick="removerTinta(this)">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
               </svg>

            </button>
        </div>
    </div>
    </fieldset>
    <fieldset>
     <legend>Carrinho de compras</legend>
    <div>
         <label for="metodo">Metodo de pagamento</label>

          <select required name="metodo" id="metodo">
          <option value="1">Boleto</option>
          <option value="2">Credito</option>
          </select>
          <br> <br>
          <label >Cep</label>
          <br>
          <input required type="text" name="cep" minlength="8" maxlength="8">                
          <br>  <br>
          <label >Número</label>
          <br>
          <input required type="number" name="numero" maxlength="3" minlength="1" >
          <br> <br>
          <label >Observacao </label>
          <br>
          <input required type="text" name="observacao" >
          <br> <br>


    </div>
          <button class="btn btn-success"type="submit">Finalizar compra</button>
   </fieldset>
    </form>
 

</body>
</html>
<?php 

}else{
	echo "esta pagina esta protegida";
}

?>
