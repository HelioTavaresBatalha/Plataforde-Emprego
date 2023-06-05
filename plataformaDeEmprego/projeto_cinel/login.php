<?php 
include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (verificar_login($email, $senha)) {
        // login bem sucedido, redirecionar para a página inicial
        header("Location: index.php");
        exit();
    } else {
        // login inválido, exibir mensagem de erro
        echo "Email ou senha inválidos.";
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
              <a class="nav-link" href="sobre.php">Sobre-HBJOB</a>
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
     
    <section class="vh-100" style="background: rgb(177, 175, 166)">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="imagens/login.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
          <!-------------------------------Inico Formulário Login--------------->

                      
                      <form action="config.php" method="post">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #03480c;"></i>
                          <span class="h1 fw-bold mb-0">HB JOB</span>
                        </div>
      
                        <h5 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">Faça Login na sua conta </h5>
      
                        <div class="form-outline mb-0">
                          <input name="email" type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Digite o seu email " required>
                          <label class="form-label" >Email</label>
                        </div>
      
                        <div class="form-outline mb-0">
                          <input name="senha" type="password" class="form-control form-control-lg" placeholder="Digite a sua senha" required>
                          <label  class="form-label">Password</label>
                        </div>
      
                        <div class="pt-1 mb-2">
                          <button name="submit" value="Enviar" class="btn btn-success btn-lg btn-block" type="submit">Login</button>
                        </div>
      
                        <a class="small text-muted" href="recuperarpassword.html">Esqueceu password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Não tem uma conta? <a href="cadastro.html"
                            style="color: #393f81;">Registe - se aqui</a></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
               <!-------------------------------Fim Formulário Login--------------->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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