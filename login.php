<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
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
  });
</script>

<!------ Include the above in your HEAD tag ---------->

<?php
include 'menu.php';
?>
<!DOCTYPE html>
<body>

  <main>

    <div class="container">

      <?php if(isset($_SESSION['sucess-cadastrado'])):?>
        <center><span class="sucess-editado"> Usuario cadastrado com sucesso!!! </span></center> 
        <?php unset($_SESSION['sucess-cadastrado']); ?>
      <?php  endif;?>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <a href="#" class="active" id="login-form-link">Login</a>
                  </div>
                  <div class="col-xs-6">
                    <a href="#" id="register-form-link">Register</a>
                  </div>
                </div>
                <hr>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                    <form action="login_autenticacao.php"  id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
                      <div class="form-group">
                        <label for="login">Login:</label>
                        <input type="text" name="user" id="username" tabindex="1" class="form-control" placeholder="Login" value="">
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Senha">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Logar">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="text-center">
                              <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Esqueceu Sua Senha</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>

                    <?php if(isset($_SESSION['login'])):?>
                      <script>
                        alert("login já cadastrado!");
                      </script>  
                      <?php unset($_SESSION['cnpj']); ?>
                      <script>
                        alert("CNPJ já cadastrado!");
                      </script>  

                    <?php  endif;?>

                    <form id="register-form" action="addusuario.php" method="post" enctype="multipart/form-data" role="form" style="display: none;">
                      <div class="form-group">
                        <input type="file"  class="form-control-file" name="file" id="imgInp">
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Nome da Empresa" name="nomeEmp" id="username" tabindex="1" class="form-control" value="">
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Rua" name="rua" tabindex="1" class="form-control" value="">
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Bairro" name="bairro" tabindex="2" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Cidade" name="cidade" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="cnpj">CNPJ:</label>
                        <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj" required>
                      </div>

                      <div class="form-row">
                        <div class="form-group">
                          <label for="fone">Telefone Da Empresa:</label>
                          <input type="text" class="form-control" id="telefone" placeholder="Telefone da Empresa" name="fone">
                        </div>

                        <div class="form-group">
                          <label for="face">Facebook Da Empresa:</label>
                          <input type="text" class="form-control" id="face" placeholder="Facebook" name="face">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                          <h2>Cadastro Do Propietario</h2>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                          <label for="nomeRes">Nome:</label>
                          <input type="text" class="form-control" id="nomeRes" placeholder="Nome" name="nomeRes" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cel">Celular Do Propietario:</label>
                        <input type="text" class="form-control" id="celular" placeholder="(DDD)número" name="cel" required>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                          <label for="nomeRes">Data De Nascimento:</label>
                          <input type="text" class="form-control" id="data" placeholder="Data De Nascimento" name="nascimento" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                          <label for="rua">Endereço:</label>
                          <input type="text" class="form-control" id="rua" placeholder="endereco" name="endereco" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                          <label for="bairro">Bairro:</label>
                          <input type="text" class="form-control" id="bairro" placeholder="Bairro Do Propietario" name="bairro_propietario" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                          <label for="cpf">Cpf:</label>
                          <input type="text" class="form-control" id="cpf" placeholder="cpf" name="cpf" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                          <label for="cpf">Rg:</label>
                          <input type="text" class="form-control" id="rg" placeholder="rg" name="rg" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade_propietario" required>
                      </div>

                      <div class="form-row">
                        <div class="form-group">
                          <label for="login">Login:</label>
                          <input type="login" class="form-control" id="login" placeholder="Login" name="user" required>
                        </div>

                        <div class="form-group">
                          <label for="senha">Senha:</label>
                          <input type="password" class="form-control" id="senha" placeholder="Senha" name="password"  required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar Agora">
                          </div>
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
</form>
</div>

</main>
<script>
  $(function() {

    $('#login-form-link').click(function(e) {
      $("#login-form").delay(100).fadeIn(100);
      $("#register-form").fadeOut(100);
      $('#register-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
      $("#register-form").delay(100).fadeIn(100);
      $("#login-form").fadeOut(100);
      $('#login-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });

  });

</script>
<?php
include 'rodape.php';

?>

</body>
</html>