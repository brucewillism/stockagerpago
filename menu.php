<?php 
require_once'bd/conexao.php';
if(!isset($_SESSION['logado'])){
  $_SESSION['logado'] = [];
}
if(isset($_SESSION["user"]) && isset($_SESSION["pw"])){
  $llogin = $_SESSION['user'];
  $ssenha = $_SESSION['pw'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stockager</title>
  <link rel="shortcut icon" href="imagem/Stokage.png" type="image/x-png">
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
  <div class="site-branding-area">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="logo">
            <h1><a href="index.php">S<span>Tockager</span></a></h1>
          </div>
        </div>

        <div class="col-sm-6">
          <?php   require_once 'bd/conexao.php';
          if($_SESSION['logado'] == True):
            $llogin = $_SESSION['user'];
            ?>
            <div class="shopping-item">
              <a href="logout.php"><i class='fa fa-sign-out' aria-hidden='true'></i>Sair</a>

            </div>
            <?php  echo "Bem vindo(A): $llogin";?>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div> <!-- End site branding area -->

  <div class="mainmenu-area">
    <div class="container">
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><i class="glyphicon glyphicon-home"></i>Inicio</a></li>
            <?php if (isset($_SESSION['user'])): ?>
              <li><a href="cadastro_produto.php"><i class="glyphicon glyphicon-list-alt"></i>Cadastrar Itens</a></li>
              <li><a href="quantidade_estoque.php"><i class="glyphicon glyphicon-list"></i>Produtos</a></li>
              <li><a href="cadastro_clientes.php"><i class="glyphicon glyphicon-list-alt"></i>Cadastrar Clientes</a></li>
              <li><a href="cliente_list.php"><i class="glyphicon glyphicon-list"></i>Clientes</a></li>
              <li><a href="cadastro_fornecedores.php"><i class="glyphicon glyphicon-list-alt"></i>Cadastrar fornecedores</a></li>
              <li><a href="fornecedores_list.php"><i class="glyphicon glyphicon-list"></i>Fornecedores</a></li>
              <li><a href="perfil.php"><i class="fa fa-user"></i> Minha conta</a></li>
              <?php else: ?>
                <li><a href="login.php"><i class="glyphicon glyphicon-user"></i>Login</a></li>
                <li><a href="contatos.php"><i class="glyphicon glyphicon-list-alt"></i>Contatos</a></li>
                <li><a href="sobre.php"><i class="fa fa-users"></i>Quem somos</a></li>
              <?php endif ?>
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- End mainmenu area -->