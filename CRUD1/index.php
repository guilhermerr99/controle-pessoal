<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/f9091929de.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>CRUD</title>
</head>

<body>
  <!--Barra de navegação -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <i class="fa-solid fa-vial fa-3x"></i>
        <a class="navbar-brand" id="menu" href="#">TESTE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuário
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="?page=cadastrar">Cadastrar novo contato</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="?page=listar">Listar</a></li>
              </ul>
              <li class="nav-item">
          <a class="nav-link disabled">Guilherme Ramos</a>
        </li>
        </div>
      </div>
  </nav>
  <div class="background">
    <div class="padron">
              <?php
              include("config.php");

              switch (@$_REQUEST["page"]) {

                  //cadastrar
                case 'cadastrar':
                  include("cadastrar.php");
                  break;

                  //listar
                case 'listar':
                  include("listar.php");
                  break;
                  //salvar
                case 'salvar':
                  include("salvar.php");
                  break;
                  //editar
                case 'editar':
                  include("editar.php");
                  break;
                  //excluir
                case 'excluir':
                  include("excluir.php");
                  break;
                case 'editar-act':
                  include("editar-act.php");
                  break;

                default:
                  include("main.php");
              }
              ?>
    </div>
  </div>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>

</body>

</html>