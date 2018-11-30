  <?php
  require_once 'bd/conexao.php';
  require 'menu.php';
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Detalhes Do Produto</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;text-align: center">

      <!-- The Grid -->
      <!-- Left Column -->
      <div class="w3-third">


<!--               ----------------------------------------foto---------------------------------------------------------------
-->              
<body>
  <br>
  <br>
  <br>
  <h1>Detalhes Do Produto</h1>

  <?php
  if (isset($_GET['id'])){
    $usuario_id = $_GET['id'];
  }
  $stmt = $conn->query("SELECT *
    FROM produtos
    INNER JOIN categorias ON produtos.id_categoria = categorias.cat_id
    WHERE pro_id = '$usuario_id'");

  $cadastro = $stmt->fetchAll();
  foreach ($cadastro as $dados) {

    $pro_id = $dados['pro_id'];
    $nome_produto=$dados['pro_nome'];
    $quantidade=$dados['pro_quantidade'];
    $pro_descricao=$dados['pro_descricao'];
    $preco=$dados['pro_preco'];
    $categoria=$dados['nome_cat'];
    $texto = $dados['pro_descricao'];
    $arquivo = $dados['ARQUIVO'];

    $entry = base64_encode($arquivo);
    ?>

    <div class='col-sm-6 col-md-4'>

      <div class='thumbnail'>

        <img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:400%;height:auto;">            
      </div>
    </div>
    <br>
    <div class="form-group">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Nome do Produto</div>
        </div>
        <input class="form-control" value="<?php echo ($nome_produto); ?>"> 
      </div>
    </div>

    <div class="form-group">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user fa text-info"></i> Quantidade</div>
        </div>
        <input class="form-control" value="<?php echo ($quantidade); ?>">
      </div>
    </div>

    <div class="form-group">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Preço</div>
        </div>
        <input class="form-control" value="<?php echo ($preco); ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Categoria</div>
        </div>
        <input class="form-control" value="<?php echo ($dados['nome_cat']); ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user fa text-info" ></i>Descrição</div>
        </div>
        <textarea class="form-control" cols="100" rows="5"><?php echo ($pro_descricao); ?></textarea>
      </div>
    </div>
    <?php
  }
  ?>                               
</div>
</div>
</div>
<?php include 'rodape.php'; ?>
</body>
</html>