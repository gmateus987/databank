<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
    <title>Cadastro</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class= "container-fluid">
  <a class="navbar-brand" href="#">Cadastro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=novo">Novo Usuário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=listar">Listar Usuários</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="row">
        <div class="col mt-5">
        <?php
        include("config.php");
    switch(@$_REQUEST["page"]){
        case "novo":
            include("novo-usuario.php");
            break;
            case "listar":
                include ("listar-usuario.php");
                break;
                case "salvar":
                include("salvar-usuario.php");
                break;
                default:
                print "<h1>Seja Bem-vindo!</h1>";
     }
?>
            </div>
            </div>
            </div>



<script src="js/bootstrap.bundle.min.js"></script>


  </body>
</html>