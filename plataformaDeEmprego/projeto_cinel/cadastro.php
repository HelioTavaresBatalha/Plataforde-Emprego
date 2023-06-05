<?php 
  include_once('config.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = $_POST["nome"];
      $apelido = $_POST["apelido"];
      $email = $_POST["email"];
      $senha = $_POST["senha"];

      if (cadastrar_usuario($nome, $apelido, $email, $senha)) {
          // usuário cadastrado com sucesso, redirecionar para a página de login
          header("Location: login.php");
          exit();
      } else {
          // erro ao cadastrar usuário, exibir mensagem de erro
          echo "Erro ao cadastrar usuário.";
      }
  }
?>
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
        <a class="navbar-brand" href="index.php">
          HB<span class="text-primary">JOB</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
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
              <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contatos</a>
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
    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
     body{
      background-color:LightGray;
      
    }
      bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px); 
      }
    </style>
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            HB JOB<br />
            <span style="color: hsl(218, 81%, 75%)">A melhor plataforma de</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(219, 74%, 34%)">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Temporibus, expedita iusto veniam atque, magni tempora mollitia
            dolorum consequatur nulla, neque debitis eos reprehenderit quasi
            ab ipsum nisi dolorem modi. Quos?
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <!-- Register buttons -->
          <div class="card bg-glass" >
            <div class="card-body px-4 py-5 px-md-5">
              <form action="cadastro.php" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="nome" type="text" id="form3Example1" class="form-control" required>
                      <label class="form-label">Nome</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="apelido" type="name" id="form3Example2" class="form-control" required>
                      <label class="form-label" >Apelido</label>
                    </div>
                  </div>
                </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input name="email" type="email" id="form3Example3" class="form-control" required>
                  <label class="form-label">Email</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input name="senha" type="password" id="form3Example4" class="form-control" required>
                  <label  class="form-label" for="form3Example4">Password</label>
                </div>
             <!-----Fim Formulario--------------->
  
  
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subescreva na nossa  newsletter
                  </label>
                </div>
  
                <!-- Submit button -->
                <button name="submit" type="submit" class="btn btn-success btn-block mb-4">
                  Registar
                </button>

                <div class="text-center">
                  <p>Login com:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
               <!-- Register buttons -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Design Block -->

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

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
   </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
 </body>
 </html>