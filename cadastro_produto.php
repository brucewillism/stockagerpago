  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function($){  
      $("#preco").mask("R$ 999.999.999,99");
    });
  </script>

 <?php
 require_once 'menu.php';
 ?>

 <main>

  <div class="container">

    <form action="addproduto.php" method="POST" enctype="multipart/form-data">

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
          <input type="text" class="form-control" name="nome_produto" required>
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Digite a quantidade</label>
          <input type="text" class="form-control" name="quantidade">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Digite o Preço</label>
          <input type="text" class="form-control" id="preco" name="pro_preco">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Descrição</label>
          <textarea rows="10" cols="10" name="texto" class="form-control" required></textarea>
        </div>
      </div> 

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="sel2">categoria</label>
          <select multiple class="form-control" id="sel2" name="categoria" required>
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
            <p style="color:red;">Selecione "pronto" se deseja que seu Produto va para o Estoque Agora agora.</p>
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
    include 'rodape.php';
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