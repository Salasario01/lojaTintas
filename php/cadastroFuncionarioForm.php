<!DOCTYPE html>
<html lang="en">
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
        <form action="cadastroFuncionario.php" method="GET">
                     
                <label for="nome">Usuario</label>
                <input type="text" name="nome" id="nome">
                <br> <br>
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" maxlength="14">
                <br> <br>
                <label for="senha">Senha</label>
                <input type="text" name="nome" id="nome">                
                <br>  <br>
                <label for="nome">Nome Completo </label>
                <input type="text" name="nome" id="nome">
                <br> <br>
                <button type="submit"> Cadastrar novo funcionario</button>
                <br>  <br>
        </form>
    </main>
</body>
</html>