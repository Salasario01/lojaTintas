<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastroFuncionarioForm</title>
</head>
<body>

<a href="../index.html">
<button>Voltar ao catalogo</button>
</a>
<a href="../php/comprasAndamentoFuncionarioForm.php">
<button>Compras em andamento</button>
</a>
<a href="../php/cadastroTintasForm.php">
<button>Cadastro de tintas</button>
</a>

<main>
        <h1> Cadastro de Funcionario</h1>
        <form action="cadastroFuncionario.php" method="POST">
                     
                <label >Usuario</label>
                <input type="text" name="nomeUsuario" >
                <br> <br>
                <label >Senha</label>
                <input type="text" name="senha" >                
                <br>  <br>
                <label >CPF</label>
                <input type="number" name="cpf"  maxlength="14">
                <br> <br>
                <label >Nome Completo </label>
                <input type="text" name="nomeCompleto" >
                <br> <br>
                <button type="submit"> Cadastrar novo funcionario</button>
                <br>  <br>
        </form>
    </main>
</body>
</html>