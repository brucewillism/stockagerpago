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
          Cadastro Pessoa Juridica
        </a>
      </li>
      <li role="presentation">
        <label class="radiobtn">
          <div class="icon"></div>
        </label>
        <a href="#tab2" role="tab" data-toggle="tab">
          Cadastro Pessoa Fisica
        </a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="tab1">
        <div class="row">
          <div class="col-sm-12">
            <h2>Cadastro Pessoa Juridica</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <form action="addclientes.php" method="post" enctype="multipart/form-data" id="register-form" method="post" enctype="multipart/form-data" role="form">
              <div class="card border-primary rounded-0">
                <div class="card-header p-0">
                  <div class="bg-info text-white text-center py-2">
                    <h3><i class="fa fa-envelope"></i> Cadastro Do Cliente Pessoa Juridica</h3>
                    <p class="m-0">Dados Do Cliente Pessoa Juridica</p>
                  </div>
                </div>
                <div class="card-body p-3">
                  <!--Body-->
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-user fa text-info"></i> Foto</div>
                      </div>
                      <input type="file"  class="form-control-file" name="file" id="imgInp">
                      <br>
                      <img id='img-upload' src="data:image/jpeg;base64,<?= $entry ?>" style="width:100%;height:100%;" />

                    </div>
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nome Da Empresa</div>
                        </div>
                        <input class="form-control" name="nome" placeholder="Digite o Nome da Empresa">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="form-group">
                            <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nome Fantasia</div>
                          </div>
                          <input type="text" placeholder="Nome da fantasia" name="nome_fantasia" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="form-group">
                              <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Cep</div>
                            </div>
                            <input type="text" placeholder="cep" name="cep" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="form-group">
                                <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Endereço</div>
                              </div>
                              <input type="text" placeholder="endereco" name="endereco" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="form-group">
                                  <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Bairro</div>
                                </div>
                                <input type="text" placeholder="Bairro" name="bairro" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="form-group">
                                    <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Complemento</div>
                                  </div>
                                  <input type="text" placeholder="complemento" name="complemento" class="form-control">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="form-group">
                                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Número</div>
                                    </div>
                                    <input type="text" placeholder="numero" name="numero" class="form-control">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="form-group">
                                        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Cidade</div>
                                      </div>
                                      <input type="text" placeholder="Cidade" name="cidade" class="form-control">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                        <div class="form-group">
                                          <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Cnpj</div>
                                        </div>
                                        <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj" >
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                          <div class="form-group">
                                            <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Telefone Da Empresa</div>
                                          </div>
                                          <input type="text" class="form-control" id="telefone" placeholder="Telefone da Empresa" name="telefone">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                            <div class="form-group">
                                              <div class="input-group-text"><i class="fa fa-user fa text-info"></i>UF</div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="UF" name="uf">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="form-group">
                                                <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Email</div>
                                              </div>
                                              <input type="email" class="form-control" id="Email" placeholder="email" name="email" required>
                                            </div>
                                          </div>
                                          <div class="text-center">
                                            <input type="submit" value="REGISTRAR" >
                                          </div>
                                        </form>

                                        <div role="tabpanel" class="tab-pane" id="tab2">
                                          <div class="row">
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">

                                              <form action="addclientes.php" method="post" enctype="multipart/form-data" id="register-form" method="post" enctype="multipart/form-data" role="form">
                                                <div class="card border-primary rounded-0">
                                                  <div class="card-header p-0">
                                                    <div class="bg-info text-white text-center py-2">
                                                      <h3><i class="fa fa-envelope"></i> Cadastro Do Cliente Pessoa Fisica</h3>
                                                      <p class="m-0">Dados Do Cliente Pessoa Fisica</p>
                                                    </div>
                                                  </div>
                                                  <div class="card-body p-3">
                                                   <div class="form-group">
                                                    <div class="input-group mb-2">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-user fa text-info"></i> Foto</div>
                                                      </div>
                                                      <input type="file"  class="form-control-file" name="file" id="imgInp">
                                                      <br>
                                                      <img id='img-upload' src="data:image/jpeg;base64,<?= $entry ?>" style="width:100%;height:100%;" />

                                                    </div>
                                                    <div class="form-group">
                                                      <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                          <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nome Da Empresa</div>
                                                        </div>
                                                        <input class="form-control" name="nome" placeholder="Digite o Nome da Empresa">
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                      <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                          <div class="form-group">
                                                            <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Nome Fantasia</div>
                                                          </div>
                                                          <input type="text" placeholder="Nome da fantasia" name="nome_fantasia" class="form-control">
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <div class="input-group mb-2">
                                                          <div class="input-group-prepend">
                                                            <div class="form-group">
                                                              <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Cep</div>
                                                            </div>
                                                            <input type="text" placeholder="cep" name="cep" class="form-control">
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                              <div class="form-group">
                                                                <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Endereço</div>
                                                              </div>
                                                              <input type="text" placeholder="endereco" name="endereco" class="form-control">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <div class="input-group mb-2">
                                                              <div class="input-group-prepend">
                                                                <div class="form-group">
                                                                  <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Bairro</div>
                                                                </div>
                                                                <input type="text" placeholder="Bairro" name="bairro" class="form-control">
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                  <div class="form-group">
                                                                    <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Complemento</div>
                                                                  </div>
                                                                  <input type="text" placeholder="complemento" name="complemento" class="form-control">
                                                                </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <div class="input-group mb-2">
                                                                  <div class="input-group-prepend">
                                                                    <div class="form-group">
                                                                      <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Número</div>
                                                                    </div>
                                                                    <input type="text" placeholder="numero" name="numero" class="form-control">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <div class="input-group mb-2">
                                                                    <div class="input-group-prepend">
                                                                      <div class="form-group">
                                                                        <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Cidade</div>
                                                                      </div>
                                                                      <input type="text" placeholder="Cidade" name="cidade" class="form-control">
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <div class="input-group mb-2">
                                                                      <div class="input-group-prepend">
                                                                        <div class="form-group">
                                                                          <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Cpf</div>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="cpf" placeholder="cpf" name="cpf" >
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <div class="input-group mb-2">
                                                                      <div class="input-group-prepend">
                                                                        <div class="form-group">
                                                                          <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Rg</div>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="rg" placeholder="rg" name="rg">
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <div class="input-group mb-2">
                                                                      <div class="input-group-prepend">
                                                                        <div class="form-group">
                                                                          <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Telefone Da Empresa</div>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="telefone" placeholder="Telefone da Empresa" name="telefone">
                                                                      </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <div class="input-group mb-2">
                                                                        <div class="input-group-prepend">
                                                                          <div class="form-group">
                                                                            <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Celular</div>
                                                                          </div>
                                                                          <input type="text" class="form-control" id="celular" placeholder="Celular" name="celular">
                                                                        </div>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <div class="input-group mb-2">
                                                                          <div class="input-group-prepend">
                                                                            <div class="form-group">
                                                                              <div class="input-group-text"><i class="fa fa-user fa text-info"></i>UF</div>
                                                                            </div>
                                                                            <input type="text" class="form-control" placeholder="UF" name="uf">
                                                                          </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <div class="input-group mb-2">
                                                                            <div class="input-group-prepend">
                                                                              <div class="form-group">
                                                                                <div class="input-group-text"><i class="fa fa-user fa text-info"></i>Email</div>
                                                                              </div>
                                                                              <input type="email" class="form-control" id="Email" placeholder="email" name="email" required>
                                                                            </div>
                                                                          </div>
                                                                          <div class="text-center">
                                                                            <input type="submit" value="REGISTRAR" >
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
      </div>
    </div>
  </div>
</div>

<?php include 'rodape.php'; ?>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-1.12.0.min.js'></script><script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script><script src='https://www.jqueryscript.net/demo/jQuery-Plugin-To-Create-Responsive-Scrolling-Bootstrap-Tabs/jquery.scrolling-tabs.js'></script>
<script >$('.nav-tabs').scrollingTabs({
  enableSwiping: true  
});

$('.nav-tabs a').click(function(){
  $(".tab-content").animate({ scrollTop: 0 }, 600);
});
//# sourceURL=pen.js
</script>
</body>
</html>