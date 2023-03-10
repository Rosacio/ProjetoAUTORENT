<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-Rent lda</title>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet" />
    <link href="/FontAwesome/css/fontawesome.css" rel="stylesheet">
    <link href="/FontAwesome/css/brands.css" rel="stylesheet">
    <link href="/FontAwesome/css/regular.css" rel="stylesheet">
    <link href="/FontAwesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-info border-4 sticky-top bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"> <img src="Imagens/Vector_Auto.webp" alt="Bootstrap" width="60" height="48" class="rounded"></a>
          <a class="navbar-brand" href="home.php">Auto-Rent Lda</a>
          <button class="navbar-toggler collapse d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar "></span>
            <span class="toggler-icon middle-bar "></span>
            <span class="toggler-icon bottom-bar "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Veículos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Fale connosco!
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/lojas.html">As nossas lojas</a></li>
                  <li><a class="dropdown-item" href="#">Contactos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Opinião dos nossos clientes</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Procura um veículo para alugar? Prepare-se para o encontrar!</a>
              </li>
            </ul>
            <div class="d-flex">
              <a href="criarConta.php" class="registar px-3 py-2">Criar conta</a>
              <a href="entrar.php"><button class="btn btn-outline-info" type="submit">Entrar</button></a>
            </div>
          </div>
        </div>
      </nav>

      <div id="main_img" class="container-fluid p-0 d-flex align-items-center justify-content-center" style="background-image: url('Imagens/Travel.jpg');">
        <div class="h-50 w-50 justify-content-center">
            <form action="php/registar.php"  method="post" class="row g-3 needs-validation bg-white rounded p-4" novalidate>
                <div class="col-md-12">
                    <h2>Crie a sua conta</h2>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Nome</label>
                  <input type="text" name="Nome" class="form-control" id="validationCustom01" placeholder="Joaquim" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Apelido</label>
                  <input type="text" name="Apelido" class="form-control" id="validationCustom02" placeholder="Moreira" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Telefone</label>
                    <input type="text" name="Telefone" class="form-control" id="validationCustom01" placeholder="xxx-xxx-xxx" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                <div class="mb-12">
                   <label for="exampleInputEmail1" class="form-label">Email</label>
                   <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                   <div id="emailHelp" class="form-text">Este email nunca será partilhado com terceiros</div>
                </div>
                <div class="mb-12">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="Pass" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-md-12">
                  <label for="validationCustomUsername" class="form-label">Morada</label>
                  <div class="input-group has-validation">
                    <input type="text" name="Morada" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Cidade</label>
                  <input type="text" name="Cidade" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Por favor, coloque uma cidade.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">Código Postal</label>
                  <input type="text" name="CodigoPostal" class="form-control" id="validationCustom05" required>
                  <div class="invalid-feedback">
                    Coloque um código de postal válido.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">País</label>
                  <input type="text" name="Pais" class="form-control" id="validationCustom05" required>
                  <div class="invalid-feedback">
                    Coloque um código de postal válido.
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit" value="Criar Conta" name="register">Criar conta</button>
                </div>
              </form>
        </div>
      </div>

<footer class="text-center text-lg-start bg-white text-muted">
  <div class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom border-info border-4">
    <div class="me-5 d-none d-lg-block">
      <span>Entre em contacto connosco:</span>
    </div>
  </div>
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3 justify-content-center">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 justify-content-center">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-car me-3 text-secondary"></i>Auto-Rent Lda
          </h6>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Vero, distinctio nostrum. Magnam, dignissimos? 
            Enim odio doloremque, soluta sapiente eum deserunt! 
            Voluptas dolores ut iusto? Nisi consectetur mollitia maxime modi id.
          </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 align-items-center">
          <h6 class="text-uppercase fw-bold mb-4"><i class="fas fa-circle-info me-3 text-secondary"></i>
            Produtos
          </h6>
          <p>
            <a href="#!" class="text-reset text-decoration-none ">Carros</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none  font-italic">Carrinhas</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none  font-italic">Motos</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Contactos</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i>Lisboa, Campo Grande</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@auto-rent.pt
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 351 214 567 388</p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 911 214 567 839</p>
        </div>
      </div>
    </div>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.035);">
    © 2022 Copyright
  </div>
</footer>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>
</html>