<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HB JOB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
   
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="col navbar-brand" href="index.php">
          HB<span class="text-primary"> JOB</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Encontrar Emprego
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Emprego em Engenharia</a></li>
                <li><a class="dropdown-item" href="#">Emprego em TI</a></li>
                <li><a class="dropdown-item" href="#">Emprego em Saúde e Ciências</a></li>
                <li><a class="dropdown-item" href="#">Emprego em Finanças e Contabilidade</a></li>
                <li><a class="dropdown-item" href="#">Emprego em Recursos Humanos</a></li>
                <li><a class="dropdown-item" href="#">Emprego em Idiomas</a></li>
              </ul>
            </li>
            <div class="btn-group">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Candidaturas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Emprego em Engenharia</a></li>
                <li><a class="dropdown-item" href="#">Emprego em TI</a></li>
                <li><a class="dropdown-item" href="#">Emprego em Saúde e Ciências</a></li>
                <li><a class="dropdown-item" href="#">Emprego em Finanças e Contabilidade</a></li>
                <li><a class="dropdown-item" href="#">Emprego em Recursos Humanos</a></li>
                <li><a class="dropdown-item" href="#">Emprego em Idiomas</a></li>
              </ul>
            </li>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php">Sobre-HBJOB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.php">Contatos</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-light mx-3" href="login.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-light" href="cadastro.php">Registrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner py-5">
    <div class="carousel-item active">
      <img src="imagens/primeiro.jpg"  alt="" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="imagens/segundo.jpg" alt="" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="imagens/terceiro.jpg" alt="" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<section id="home">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mt-5 text-center">
        <h1 class="banner">HB JOB</h1>
        <div class="col-md-6 offset-3">
          <form class="d-flex" method="post" action="">
            <input name="termo_busca" class="form-control me-2 py-2" type="text" placeholder="Procurar emprego" style="text-align: center;">
            <button name="btn_pesquisar" class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form> 
        </div>    
      </div>
    </div>
  </div>     
</section>

<div class="container-fluid p-5 bg-green text-black text-center mt-5">
  <h1 class="text">Já ativou os seus alertas de emprego, personalizados?</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card" style="width:300px">
        <img class="card-img-top" src="imagens/felicidade-trabalho.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Como ser feliz no seu trabalho</h4>
          <p class="card-text">Para uns, o trabalho é apenas uma parte da vida, para outros... é a sua vida. Seja como for, passamos algum tempo considerável no trabalho, em média até 1/3 das nossas vidas são </p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card" style="width:300px">
        <img class="card-img-top" src="imagens/trabalho-remoto.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Como encontrar o melhor trabalho remoto</h4>
          <p class="card-text">O trabalho remoto pode ser gratificante e, com o empregador certo, pode oferecer-lhe um futuro brilhante num mundo onde mais de 50% das pessoas procuram trabalhar remotamente.  </p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card" style="width:300px">
        <img class="card-img-top" src="imagens/recrutamento.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Como tornar o processo de recrutamento mais eficiente</h4>
          <p class="card-text">Os melhores candidatos estão fora do mercado ao fim de 10 dias. Os seus parceiros de recrutamento dão-lhe essa vantagem competitiva? Eis algumas dicas a ter em conta </p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card" style="width:300px">
        <img class="card-img-top" src="imagens/felicidade-trabalho.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Como ser feliz no seu trabalho</h4>
          <p class="card-text">Para uns, o trabalho é apenas uma parte da vida, para outros... é a sua vida. Seja como for, passamos algum tempo considerável no trabalho, em média até 1/3 das nossas vidas são </p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card" style="width:300px">
        <img class="card-img-top" src="imagens/trabalho-remoto.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Como encontrar o melhor trabalho remoto</h4>
          <p class="card-text">O trabalho remoto pode ser gratificante e, com o empregador certo, pode oferecer-lhe um futuro brilhante num mundo onde mais de 50% das pessoas procuram trabalhar remotamente.  </p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card" style="width:300px">
        <img class="card-img-top" src="imagens/recrutamento.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Como tornar o processo de recrutamento mais eficiente</h4>
          <p class="card-text">Os melhores candidatos estão fora do mercado ao fim de 10 dias. Os seus parceiros de recrutamento dão-lhe essa vantagem competitiva? Eis algumas dicas a ter em conta </p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark text-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-4">
        <h5>HB JOB</h5>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae aut fugiat!</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="bi bi-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Newsletter</h5>
        <form>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Inscreva-se na nossa newsletter">
          </div>
          <button type="submit" class="btn btn-primary">Inscreva-se</button>
        </form>
      </div>
      <div class="col-md-4">
        <h5>Contato</h5>
        <p class="text-muted">Endereço: Rua Lorem Ipsum, 123</p>
        <p class="text-muted">Telefone: (11) 1234-5678</p>
        <p class="text-muted">Email: contato@hbjob.com.br</p>
      </div>
    </div>
  </div>
  <div class="bg-secondary text-center py-2">
    <p class="text-muted mb-0">© 2023 HB JOB. Todos os direitos reservados.</p>
  </div>
</footer>

<ul class="pagination center">
  <li class="page-item"><a class="page-link" href="index.html">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="contato.html">2</a></li>
  <li class="page-item"><a class="page-link" href="candidatura.html">3</a></li>
  <li class="page-item"><a class="page-link" href="registo.html">Next</a></li>
</ul>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>