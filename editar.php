<?php
require_once 'bd/conexao.php';
include 'menu.php';
?>
<main>
  <?php
// pega o ID da URL
  $id = isset($_GET['id']) ? (int) $_GET['id'] : null;
    //Valida a variavel da URL
  if (empty($id)){
    echo "ID para alteração não definido";
    exit;
  }

  $sql = "SELECT * FROM produtos WHERE pro_id = '$id'";
  $result = $conn->prepare($sql);
  $result->bindParam(':id', $id, PDO::PARAM_INT);
  $result->execute();

  $resultado = $result->fetch(PDO::FETCH_ASSOC);
  if(!is_array($resultado)){
    echo "Nunhum dado encontrado";
    exit;
  }
  $arquivo = $resultado['ARQUIVO'];
  $entry = base64_encode($arquivo);

  ?>
  <!doctype html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>Editar</title>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function($){  
        $("#preco").mask("R$ 999.999.999,99");
      });
    </script>

  </head>
  <body>
    <h1>Editar</h1>
    <main>

      <div class="container">

        <form action="editar_produto.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">

          <div class="form-row">
            <div class="form-group col-md-12">
              <h2>Cadastrar Produto</h2>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <LABEL>Cadastrar imagem para o produto</LABEL>
              <input type="file"  class="form-control-file" name="file" id="imgInp">
              <br>
              <!-- <input type="text" class="form-control" readonly> -->
              <img id='img-upload'/> 

            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Nome do Produto </label>
              <input type="text" class="form-control" name="nome_produto" value="<?php echo $resultado['pro_nome']; ?>" >
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Digite a quantidade</label>
              <input type="text" class="form-control" name="quantidade" value="<?php echo $resultado['pro_quantidade']; ?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Digite o Preço</label>
              <input type="text" class="form-control" id="preco" name="pro_preco" value="<?php echo $resultado['pro_preco']; ?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Descrição</label>
              <textarea rows="10" cols="10" name="texto" class="form-control" value="<?php echo $resultado['pro_descricao']; ?>"></textarea>
            </div>
          </div> 

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="sel2">categoria</label>
              <select multiple class="form-control" id="sel2" name="categoria">
                <?php
                include 'bd/conexao.php';
                $sql = "SELECT * FROM categorias";
                foreach ($conn->query($sql) as $registro) {
                  $cat_id = $registro['cat_id'];
                  $nome = $registro['nome_cat'];
                  echo "<option value='".$cat_id."'>".$nome."</option>";
                }
                ?>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <div class="checkbox">
                <p style="color:red;">Selecione "pronto" Se Deseja Que Seu Produto Va Para O Estoque Agora.</p>
                <label><input type="checkbox" name="publicado" value="0">Pronto</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <button id="btn" class="btn">Salvar</button>
            </div>
          </div> 
        </form>
        <div>

        </main>
        <br><br>
        <?php
        include "rodape.php";
        ?>
        <script type="text/javascript" >
          $(document).ready( function() {
            function readURL(input) {
              if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                  $('#img-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
              }
            }
            $("#imgInp").change(function(){
              readURL(this);
            });   
          });
        </script>
      </body>
      </html>