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
                  <li><a class="dropdown-item" href="lojas.php">As nossas lojas</a></li>
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

      <div id="main_img" class="container-fluid p-0 d-flex flex-column align-items-center justify-content-center" style="background-image: url('Imagens/Travel.jpg');">
        <div class="h-70 w-70 justify-content-center table-responsive">        
			    <table id="jquery-datatable-ajax-php" class="table table-bordered table-striped bg-white rounded mb-0" style="margin-top:20px;">
            <thead>
              <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Quilometragem</th>
                <th>Preço</th>
                <th>Opções</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require_once 'php\connection.php';
                $stmt = $pdo->query('SELECT * FROM carro');

                if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
                  // Apagar carro
                  $stmt = $pdo->prepare('DELETE FROM carro WHERE id = :id');
                  $stmt->execute(['id' => $_GET['id']]);
                  echo '<script>alert("Carro deletado com sucesso!");</script>';
                  echo '<script>window.location.href = "home.php";</script>';
              }
                //Mostrar tabela
                while ($row = $stmt->fetch())
                {
                  echo '<tr>';
                  echo '<td>' . $row['make'] . '</td>';
                  echo '<td>' . $row['model'] . '</td>';
                  echo '<td>' . $row['year'] . '</td>';
                  echo '<td>' . $row['mileage'] . '</td>';
                  echo '<td>' . $row['price'] . '</td>';
                  echo '<td>';
                  echo '<button type="button" class="btn btn-info m-1 edit-car-btn" data-bs-toggle="modal" data-bs-target="#editCarModal" data-car-id="' . $row['id'] . '">Editar</button>';
                  echo '<a class="btn btn-outline-secondary m-1" href="?action=delete&id=' . $row['id'] . '">Apagar</a>';
                  echo '</td>';
                  echo '</tr>';
                }
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="5"></td>
                <td class="text-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertCarModal">Novo Carro</button>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div id="Container_Cards" class="container mt-5 mb-5">
        <div class="row justify-content-around margin-top-5">
            <div class="col p-3">
                <div class="card" style="width: 20rem;">
                    <img src="Imagens/pexels-pixabay-237195.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">A nossa frota</h5>
                      <p class="card-text">Conheça todos os nossos veículos à sua disposição e as suas condições.</p>
                      <a href="#" class="btn btn-primary">Ver frota</a>
                    </div>
                  </div>
            </div>
            <div class="col p-3">
                <div class="card" style="width: 20rem;">
                    <img src="Imagens/pexels-maria-geller-2127039.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">As nossas lojas</h5>
                      <p class="card-text">Conheça os nossos colaboradores o mais perto de si.</p>
                      <a href="/lojas.html" class="btn btn-primary">Visitar loja</a>
                      
                    </div>
                  </div>
            </div>
            <div class="col p-3">
                <div class="card" style="width: 20rem;">
                    <img src="Imagens/pexels-oziel-gómez-845405.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">As nossas parcerias</h5>
                      <p class="card-text">Veja o que os nossos clientes tem a dizer sobre nós.</p>
                      <a href="#" class="btn btn-primary">Saber mais</a>
                    </div>
                  </div>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <script src="js/jquery-min.js"></script>
    <script src="js/tabela.js"></script>
    <!-- Modal -->
<div class="modal fade" id="editCarModal" tabindex="-1" role="dialog" aria-labelledby="editCarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editCarModalLabel">Editar carro</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form to edit car -->
        <form id="edit-car-form" method="post" action="php/edit-car.php">
          <input type="hidden" id="car-id" name="car-id">
          <div class="form-group">
            <label for="make">Marca</label>
            <input type="text" class="form-control" id="make" name="make" required>
          </div>
          <div class="form-group">
            <label for="model">Modelo</label>
            <input type="text" class="form-control" id="model" name="model" required>
          </div>
          <div class="form-group">
            <label for="year">Ano</label>
            <input type="number" class="form-control" id="year" name="year" required>
          </div>
          <div class="form-group">
            <label for="mileage">Quilometragem</label>
            <input type="number" class="form-control" id="mileage" name="mileage" required>
          </div>
          <div class="form-group">
            <label for="price">Preço</label>
            <input type="number" class="form-control" id="price" name="price" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="edit-car-submit" class="btn btn-primary" form="edit-car-form">Guardar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="insertCarModal" tabindex="-1" role="dialog" aria-labelledby="insertCarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="insertCarModalLabel">Adicionar um carro</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form to insert car -->
        <form id="insert-car-form" method="post" action="php/insert-car.php">
          <input type="hidden" id="car-id" name="car-id">
          <div class="form-group">
            <label for="make">Marca</label>
            <input type="text" class="form-control" id="make" name="make" required>
          </div>
          <div class="form-group">
            <label for="model">Modelo</label>
            <input type="text" class="form-control" id="model" name="model" required>
          </div>
          <div class="form-group">
            <label for="year">Ano</label>
            <input type="number" class="form-control" id="year" name="year" required>
          </div>
          <div class="form-group">
            <label for="mileage">Quilometragem</label>
            <input type="number" class="form-control" id="mileage" name="mileage" required>
          </div>
          <div class="form-group">
            <label for="price">Preço</label>
            <input type="number" class="form-control" id="price" name="price" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="insert-car-submit" class="btn btn-primary" form="insert-car-form" value="Criar Carro" name="inserir">Guardar</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
