<?php 
require_once 'bd/conexao.php'; 
include 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function($){  
      $("#data").mask("99/99/9999");
      $("#telefone").mask("(99) 9999-9999");
      $("#celular").mask("(99) 99999-9999");
      $("#indicativoTelefone").mask("+55 (99) 9999-9999");
      $("#rg").mask("9.999.999");
      $("#cpf").mask("999.999.999-99");
      $('#cep').mask('99999-999');
      $("#cnpj").mask("99.999.999/9999-99");
      $("#preco").mask("R$ 999.999.999,99");

    });

  </script>
  
</head>
<body>
  <div class="container tall">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active">
        <label class="radiobtn">
          <div class="icon"></div>
        </label>
        <a href="#tab1" role="tab" data-toggle="tab">
          Detalhes Da Empresa
        </a>
      </li>
      <li role="presentation">
        <label class="radiobtn">
          <div class="icon"></div>
        </label>
        <a href="#tab2" role="tab" data-toggle="tab">
          Detalhes Do Usuario
        </a>
      </li>
      <li role="presentation">
        <label class="radiobtn">
          <div class="icon"></div>
        </label>
        <a href="#tab3" role="tab" data-toggle="tab">
          Editar Perfil
        </a>
      </li>
    </ul>
  </div>
  <!-- Tab panes -->

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="tab1">
      <div class="row">
        <div class="col-sm-12">
         <h2>Detalhes Da Empresa</h2>
       </div>
     </div>
     <div class="row">
      <div class="col-md-6">
       <?php
       $id = $_SESSION['user_id'];
       $stmt = $conn->query("SELECT *
        FROM usuarios
        where usuario_id = '$id'");           
       $cadastro = $stmt->fetchAll();
       foreach ($cadastro as $dados) {
        $usuario_id = $dados['usuario_id'];
        $nomeEmp = $dados['nomeEmp'];
        $cnpj = $dados['cnpj'];
        $fone = $dados['fone'];
        $cel = $dados['cel'];
        $face = $dados['face'];
        $rua = $dados['rua'];
        $bairro = $dados['bairro'];
        $cidade = $dados['cidade'];
        $arquivo = $dados['ARQUIVO'];
        $entry = base64_encode($arquivo);
        ?>

        <div class="col-md-3 col-md-offset-3">
          <div class='thumbnail'>

            <img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:400%;height:auto;">            
          </div>
        </div>
        <br>
        <br>
        <div class="form-group">
          <div class="input-group mb-8">
            <div class="input-group-prepend">
            </div>

            <label>(Nome Fantasia)</label>
            <h4 class="nome-h4"><?php echo ($nomeEmp); ?></h4>

            <label>(Rua)</label>
            <h4 class="nome-h4"><?php echo ($rua); ?></h4>

            <label>(Bairro)</label>
            <h4 class="nome-h4"><?php echo ($bairro); ?></h4>

            <label>(cidade)</label>
            <h4 class="nome-h4"><?php echo ($cidade); ?></h4>

            <label>(cnpj)</label>
            <h4 class="nome-h4"><?php echo ($cnpj); ?></h4> 

            <label>(fone)</label>
            <h4 class="nome-h4"><?php echo ($fone); ?></h4>

            <label>(face)</label>
            <h4 class="nome-h4"><?php echo ($face); ?></h4>
            <?php
          }
          ?> 
          
        </div>
      </div>
    </div>
  </div>
</div>


<div role="tabpanel" class="tab-pane" id="tab2">
  <div class="row">
    <div class="col-sm-12">
     <h2><i class="fa fa-pencil-square-o"></i>Detalhes do Usuario</h2>
   </div>
 </div>
 <div class="row">
  <div class="col-md-6">
    <?php
    $id = $_SESSION['user_id'];
    $stmt = $conn->query("SELECT *
      FROM usuarios
      where usuario_id = '$id'");           
    $cadastro = $stmt->fetchAll();
    foreach ($cadastro as $dados) {
      $usuario_id = $dados['usuario_id'];
      $nomeRes = $dados['nomeRes'];
      $endereco = $dados['endereco'];
      $bairro_propietario = $dados['bairro_propietario'];
      $cidade_propietario = $dados['cidade_propietario'];
      $nascimento = $dados['nascimento'];
      $cpf = $dados['cpf'];
      $rg = $dados['rg'];
      $user = $dados['user'];
      $pw = $dados['pw'];
      $entry = base64_encode($arquivo);
      ?>

      <label>(Nome Do Propietario)</label>

      <h4 class="nome-h4"><?php echo ($nomeRes); ?></h4>

      <label>(Endereço)</label>
      <h4 class="nome-h4"><?php echo ($endereco); ?></h4>

      <label>(Bairro)</label>
      <h4 class="nome-h4"><?php echo ($bairro_propietario); ?></h4>

      <label>(Cidade)</label>
      <h4 class="nome-h4"><?php echo ($cidade_propietario); ?></h4>

      <label>(nascimento)</label>
      <h4 class="nome-h4"><?php echo ($nascimento); ?></h4>

      <label>(CPF)</label>
      <h4 class="nome-h4"><?php echo ($cpf); ?></h4>

      <label>(RG)</label>
      <h4 class="nome-h4"><?php echo ($rg); ?></h4>

      <label>(Celular)</label>
      <h4 class="nome-h4"><?php echo ($cel); ?></h4>
      <?php
    }
    ?>

  </div>
</div>
</div>

<div role="tabpanel" class="tab-pane" id="tab3">
 <div class="row">
  <div class="col-lg-12">
   <h2>Editar Perfil</h2>
 </div>
</div>
<div class="row">
  <div class="col-md-6">

    <div role="tabpanel" id="register-form" aria-hidden="true" aria-labelledby="aba3">
      <h2 tabindex="0">     
       <?php
       require_once 'bd/conexao.php';
       ?>
       <main>
        <?php
                                    // pega o ID da URL
        $id = isset($_SESSION['user_id']) ? (int) $_SESSION['user_id'] : null;

        $sql = "SELECT * FROM usuarios WHERE usuario_id = '$id'";
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
        <body>
          <h1>Editar</h1>
          <main>

            <?php if(isset($_SESSION['login'])):?>
              <script>
                alert("login já cadastrado!");
              </script>  
              <?php unset($_SESSION['cnpj']); ?>
              <script>
                alert("CNPJ já cadastrado!");
              </script>  

            <?php  endif;?>

            <form action="editar_usuario.php" id="register-form" method="post" enctype="multipart/form-data" role="form">
              <div class="form-group">
                <input value="<?php echo $resultado['file']; ?>"  type="file"  class="form-control-file" name="file" id="imgInp">
              </div>
              <div class="form-group">
                <input value="<?php echo $resultado['nomeEmp']; ?>"  type="text" placeholder="Nome da Empresa" name="nomeEmp" id="username" tabindex="1" class="form-control" value="">
              </div>
              <div class="form-group">
                <input value="<?php echo $resultado['rua']; ?>"  type="text" placeholder="Rua" name="rua" tabindex="1" class="form-control" value="">
              </div>
              <div class="form-group">
                <input value="<?php echo $resultado['bairro']; ?>"  type="text" placeholder="Bairro" name="bairro" tabindex="2" class="form-control">
              </div>
              <div class="form-group">
                <input value="<?php echo $resultado['cidade']; ?>"  type="text" placeholder="Cidade" name="cidade" class="form-control">
              </div>

              <div class="form-group">
                <label for="cnpj">CNPJ:</label>
                <input value="<?php echo $resultado['cnpj']; ?>"  type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj" required>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="fone">Telefone Da Empresa:</label>
                  <input value="<?php echo $resultado['fone']; ?>"  type="text" class="form-control" id="telefone" placeholder="Telefone da Empresa" name="fone">
                </div>

                <div class="form-group">
                  <label for="face">Facebook Da Empresa:</label>
                  <input value="<?php echo $resultado['face']; ?>"  type="text" class="form-control" id="face" placeholder="Facebook" name="face">
                </div>
              </div>
              <br>
              <div class="form-row">
                <div class="form-group">
                  <h2>Cadastro Do Propietario</h2>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="nomeRes">Nome:</label>
                  <input value="<?php echo $resultado['nomeRes']; ?>"  type="text" class="form-control" id="nomeRes" placeholder="Nome" name="nomeRes" required>
                </div>
              </div>
              <div class="form-group">
                <label for="cel">Celular Do Propietario:</label>
                <input value="<?php echo $resultado['cel']; ?>"  type="text" class="form-control" id="celular" placeholder="(DDD)número" name="cel" required>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="nomeRes">Data De Nascimento:</label>
                  <input value="<?php echo $resultado['nascimento']; ?>"  type="text" class="form-control" id="data" placeholder="Data De Nascimento" name="nascimento" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="rua">Endereço:</label>
                  <input value="<?php echo $resultado['endereco']; ?>"  type="text" class="form-control" id="rua" placeholder="endereco" name="endereco" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="bairro">Bairro:</label>
                  <input value="<?php echo $resultado['bairro_propietario']; ?>"  type="text" class="form-control" id="bairro" placeholder="Bairro Do Propietario" name="bairro_propietario" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="cpf">Cpf:</label>
                  <input value="<?php echo $resultado['cpf']; ?>"  type="text" class="form-control" id="cpf" placeholder="cpf" name="cpf" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="cpf">Rg:</label>
                  <input value="<?php echo $resultado['rg']; ?>"  type="text" class="form-control" id="rg" placeholder="rg" name="rg" required>
                </div>
              </div>
              <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input value="<?php echo $resultado['cidade_propietario']; ?>"  type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade_propietario" required>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="login">Login:</label>
                  <input value="<?php echo $resultado['user']; ?>"  type="login" class="form-control" id="login" placeholder="Login" name="user" required>
                </div>

                <div class="form-group">
                  <label for="senha">Senha:</label>
                  <input value="<?php echo $resultado['password']; ?>"  type="password" class="form-control" id="senha" placeholder="Senha" name="password"  required>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar Agora">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</main>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-1.12.0.min.js'></script><script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script><script src='https://www.jqueryscript.net/demo/jQuery-Plugin-To-Create-Responsive-Scrolling-Bootstrap-Tabs/jquery.scrolling-tabs.js'></script>
<script >$('.nav-tabs').scrollingTabs({
  enableSwiping: true  
});

$('.nav-tabs a').click(function(){
  $(".tab-content").animate({ scrollTop: 0 }, 600);
});
//# sourceURL=pen.js
</script>
<?php include 'rodape.php'; ?>
</body>
</html>