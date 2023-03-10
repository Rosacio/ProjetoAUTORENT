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
            <a class="navbar-brand" href="#"> <img src="Imagens/Vector_Auto.webp" alt="Bootstrap" width="60" height="48" class="rounded"></a>
          <a class="navbar-brand" href="#">Auto-Rent Lda</a>
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
              <a href="/criarConta.html" class="registar px-3 py-2">Criar conta</a>
              <a href="/entrar.html"><button class="btn btn-outline-info" type="submit">Entrar</button></a>
            </div>
          </div>
        </div>
      </nav>

      <div id="main_img" class="container-fluid p-0 d-flex flex-column justify-content-center" style="background-image: url('Imagens/Travel.jpg');"> 
                <div class="d-flex flex-row bd-hilight align-items-center">
                    <h2>adsda</h2>
                </div>
                <div class="d-flex flex-row justify-content-around">
                    <div class="col">
                        <h2>Lista de Clientes</h2>
                        <table id="tba" class="table table-light table-striped-columns table-hover border border-dark border-3">
                            <thead>
                                    <th>Nome</th>
                                    <th>Apelido</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Morada</th>
                                    <th>Cidade</th>
                                    <th>Codigo Postal</th>
                                    <th>País</th>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-light table-striped-columns table-hover border border-dark border-3">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
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

    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <script src="js/app.js"></script>
</body>
</html>