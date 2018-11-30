  <?php 
  require_once "bd/conexao.php";
  include 'menu.php';
  ?>
  <br><br>
  <form action="pesquisar.php" method="POST" id='form-contato' class="form-horizontal col-md-10">
    <label class="col-md-2 control-label" for="termo">Pesquisar</label>
    <div class='col-md-7'>
      <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Infome o Nome do produto" required/>
    </div>
    <button type="submit" class="btn btn-primary">Pesquisar</button>
    <a href='quantidade_estoque.php' class="btn btn-primary">Ver Todos</a>
  </form>

  <a href='cadastro_produto.php' class="btn btn-success pull-right">Cadastrar Novo Produtos</a>
  <div class='clearfix'>

  </div>

  <!-- End menu area -->
  <br><br>


  <body>
    <div class="product-big-title-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="product-bit-title text-center">
              <h2>Estoque</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <?php
    $id = $_SESSION['user_id'];
    $stmt = $conn->query("SELECT * 
      FROM produtos
      INNER JOIN categorias ON produtos.id_categoria = categorias.cat_id
      WHERE id_user = '$id'");

    $res = $stmt->execute();
    $rows = $stmt->rowCount();

    if ($rows <=0) {
      echo "<h1>AINDA NÃO EXISTEM PRODUTOS EM SEU ESTOQUE </h1>";
    } else{         

      ?>
      <div class="roll">
        <?php  
        while ($campos = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $pro_id = $campos['pro_id'];
          $pro_nome = $campos['pro_nome'];
          $arquivo = $campos['ARQUIVO'];
          $texto = $campos['pro_descricao'];
          $quantidade = $campos['pro_quantidade'];
          $preco = $campos['pro_preco'];

          
          $entry = base64_encode($arquivo);
          ?>
        </div>    




        <div class="maincontent-area">
          <div class="zigzag-bottom"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="latest-product">                    
                  <h2><a href="detalhes_produtos.php"><?php echo $pro_nome ?></a></h2>

                  <div class="product-carousel-price">
                    <ins><?php echo $preco ?></ins> <!-- <del><?php echo $preco ?></del> -->
                  </div>
                </div>
                <div class="single-product">
                  <div class="product-f-image">
                    <img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive"  style="height:250px;" alt="Imagem Responsiva">                                
                    <div class="product-hover">
                      <a href="editar.php?id=<?=$pro_id?>" class="add-to-cart-link"><i class="
                        glyphicon glyphicon-pencil"></i>Editar</a>
                        <a href="excluir.php?id=<?=$pro_id?>" class="view-details-link"><i class="glyphicon glyphicon-trash"></i>Excluir</a>
                      </div>
                    </div>
                    <h4 class="nome-h4"><?php echo $rest = substr($texto, 0, 50); ?></h4>
                    <!-- </div> -->
                    <?php
                  }
                  echo "</div>";
                }
                ?>


                <!-- ---------------------------------------------paginacao------------------------------------------- -->

                <div class="row">
                 <div class="col-md-12">
                   <div class="product-pagination text-center">
                     <nav>
                       <ul class="pagination">
                         <li>
                           <a href="#" aria-label="Previous">
                             <span aria-hidden="true">&laquo;</span>
                           </a>
                         </li>
                         <li><a href="#">1</a></li>
                         <li><a href="#">2</a></li>
                         <li><a href="#">3</a></li>
                         <li><a href="#">4</a></li>
                         <li><a href="#">5</a></li>
                         <li>
                           <a href="#" aria-label="Next">
                             <span aria-hidden="true">&raquo;</span>
                           </a>
                         </li>
                       </ul>
                     </nav>
                   </div>
                 </div>
               </div>
               <!-- ---------------------------------------------paginacao------------------------------------------- -->

               <?php
               include 'rodape.php';
               ?>
             </body>
             </html>