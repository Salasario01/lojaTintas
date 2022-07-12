<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
</head>
<body>

  <!-- Navbar -->
<nav class="navbar navbar-light bg-primary">
  <h2>Loja de tintas</h2>
  <button id="navbarBtn" >
    <a class="btnEntrar" href="php/loginForm.php">
      Entrar
    </a>
  </button>
  
</nav>

  <h1 id="indexCat">Catálogo</h1>
  <!--Card Produtos-->
  <div class="catalogo">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="img/tintaAmarela.jpg" height="180px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tinta-Amarela Coloral</h5>
            <p class="card-text">R$ 160,00</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="img/tintaAzul.jpg" height="180px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tinta-Azul Coral </h5>
            <p class="card-text">R$ 180,00</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="img/tintaBege.jpg" height="180px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tinta-Bege Suvinil </h5>
            <p class="card-text">R$ 120,00</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="img/tintaCinza.jpg" height="180px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tinta-Cinza Coral </h5>
            <p class="card-text">R$ 135,00</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="img/tintaLaranja.jpg" height="180px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tinta-Laranja Suvinil </h5>
            <p class="card-text">R$ 159,00</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="img/tintaPreta.jpg" height="180px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tinta-Preta Novacor </h5>
            <p class="card-text">R$ 129,00</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="img/tintaVerde.jpg" height="180px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tinta-Verde-Água Suvinil </h5>
            <p class="card-text">R$ 209,00</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="img/tintaVermelha.jpg" height="180px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tinta Vermelha Novacor</h5>
            <p class="card-text">R$ 165,00</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>


</body>
</html>