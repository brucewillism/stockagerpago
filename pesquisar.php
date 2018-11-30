<?php
include "menu.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="imagem/Stokage.png">
  <!--<link rel="stylesheet" type="text/css" href="itens.css">-->
  <title></title>
</head>
<body>

    <form action="pesquisar.php" method="POST" id='form-contato' class="form-horizontal col-md-10">
        <label class="col-md-2 control-label" for="termo">Pesquisar</label>
        <div class='col-md-7'>
            <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Infome o Nome do produto" required/>
        </div>
        <button type="submit" class="btn btn-primary">Pesquisar</button>
        <a href='quantidade_estoque.php' class="btn btn-primary">Ver Todos</a>
    </form>

    <a href='cadastro_produto.php' class="btn btn-success pull-right">Cadastrar Novo Produtos</a>
    <div class='clearfix'></div>

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

    <!-- listagem -->

    <?php
// Monta outra consulta MySQL para a busca
    $buscar = $_POST['pesquisa'];    

    $id_user = $_SESSION['UsuarioID'];
    $stmt = $conn->query("SELECT *
        FROM produtos
        INNER JOIN categorias ON produtos.id_categoria = categorias.cat_id where id_user = '$id_user' AND  pro_nome LIKE '%".$buscar."%'");

    $produtos = $stmt->fetchAll();
    foreach ($produtos as $dados) {

        $pro_id = $dados['pro_id'];
        $pro_nome=$dados['pro_nome'];
        $pro_quantidade = $dados['pro_quantidade'];
        $pro_preco = $dados['pro_preco'];
        $categoria = $dados['nome_cat'];

    echo "
        <div class='row-group'>
        <div class='col-sm-2 col-md-3'>
        <div class='thumbnail'>
        <img class='card-img-top' src='img/product-1.jpg/300x300' alt='Card image cap'>
        <div class='caption'>
        <h1 class='card-title'><a href='single-product.php'>$pro_nome</a></h1>
        Preço
        <h3>R$:$pro_preco</h3>
        Quantidade Em Estoque
        <h3>$pro_quantidade</h3>
        <a href='detalhes_produtos.php?id=".$pro_id."'>Ver Detalhes</a>
        <a href='editar.php?id=".$pro_id."'>Editar</a>
        <a href='bd/excluir.php?id=".$pro_id."'>Excluir</a>
        </div>
        </div>
        </div>
        </div>
        </div>

        ";

    }
    ?>

    <br><br><br><br><br><br><br><br><br><br>
    
</body>
</html>
    
    <?php
    include "rodape.php";
    ?>

