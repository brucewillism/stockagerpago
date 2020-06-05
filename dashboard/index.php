<?php
// require_once 'teste_conectado.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/index.css">
	<title>home</title>
</head>

<?php
require_once "menu.php";
?>
<body>
	<!-- Masthead -->
	<header class="masthead bg-primary text-white text-center">
		<div class="container d-flex align-items-center flex-column">

			<!-- Masthead Avatar Image -->
			<img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

			<!-- Masthead Heading -->
			<h1 class="masthead-heading text-uppercase mb-0">Bem Vindo</h1>

			<!-- Icon Divider -->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-star"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- Masthead Subheading -->
			<p class="masthead-subheading font-weight-light mb-0">Feito por Bruce Willis - Desenvolvedor</p>

		</div>
	</header>

	<!-- Portfolio Section -->
	<section class="page-section portfolio" id="portfolio">
		<div class="container">

			<!-- Portfolio Section Heading -->
			<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Vamos começar O que quer fazer?</h2>

			<!-- Icon Divider -->
			<div class="divider-custom">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-star"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- Portfolio Grid Items -->
			<div class="row">

				<!-- Portfolio Item 1 -->
				<div class="col-md-6 col-lg-4">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white">
								<p>Cadastrar um Cliente</p>
							</div>
						</div>
						<img class="img" width="320" height="320" src="img/portfolio/formulario-de-registro.png" alt="">
						<h2> Cadastra um Cliente </h2>
					</div>
				</div>

				<!-- Portfolio Item 2 -->
				<div class="col-md-6 col-lg-4">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white">
								<p>Cadastrar Novo Produto</p>
							</div>
						</div>
						<img class="img" width="320" height="320" src="img/portfolio/local-na-rede-internet.png" alt="">
						<h2> Cadastra um Produto </h2>
					</div>
				</div>

				<!-- Portfolio Item 3 -->
				<div class="col-md-6 col-lg-4">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white">
								<p>Listar Todos os Clientes</p>
							</div>
						</div>
						<img class="img" width="320" height="320" src="img/portfolio/lista-de-controle.png" alt="">
						<h2>Listar Todos os Clientes</h2>
					</div>
				</div>

				<!-- Portfolio Item 4 -->
				<div class="col-md-6 col-lg-4">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white">
								<p>Listar Todos o Produtos</p>
							</div>
						</div>
						<img class="img" width="320" height="320" src="img/portfolio/bloco-de-anotacao.png" alt="">
						<h2>Listar Todos o Produtos</h2>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
	</div>
</section>
<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
					<i class="fas fa-times"></i>
				</span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Cadastro De Cliente</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img rounded mb-5" src="img/portfolio/cliente.png" alt="">
							<!-- Portfolio Modal - Text -->
							<form action="Adicionar/AddClientes.php" method="POST">
								<fieldset>
									<!-- Form Name -->
									<div>
										<label>Nome Fantasia : </label>  
										<div>
											<input name="nome_fantasia" type="text" placeholder="Digite o Nome Fantasia do Cliente">
										</div>
									</div> 
									<div>
										<label>Razão Social : </label>  
										<div>
											<input name="razao_social" type="text" placeholder="Digite a Razão Social">
										</div>
									</div> 
									<div>
										<label>Tipo Pessoa : </label>  
										<div>
											<input name="tipo" type="text" placeholder="Digite o tipo do Cliente">
										</div>
									</div> 
									<div>
										<label>CGC : </label>  
										<div>
											<input name="cgc" type="text" placeholder="Digite o cgc do Cliente (11 digitos pra cpf e 14 para cnpj)">
										</div>
									</div> 
									<div>
										<label>Cep : </label>  
										<div>
											<input name="cep" type="text" placeholder="Digite o Cep do Cliente">
										</div>
									</div> 
									<div>
										<label>Rua : </label>  
										<div>
											<input name="rua" type="text" placeholder="Digite o Rua do Cliente">
										</div>
									</div> 
									<div>
										<label>Bairro : </label>  
										<div>
											<input name="bairro" type="text" placeholder="Digite o bairro do Cliente">
										</div>
									</div> 
									<div>
										<label>Cidade : </label>  
										<div>
											<input name="cidade" type="text" placeholder="Digite a cidade do Cliente">
										</div>
									</div> 
									<div>
										<label>Numero : </label>  
										<div>
											<input name="numero" type="text" placeholder="Digite o nome do Cliente">
										</div>
									</div> 
									<div>
										<label>Estado : </label>  
										<div>
											<input name="estado" type="text" placeholder="Digite o nome do Cliente">
										</div>
									</div> 
									<div>
										<label>Pais : </label>  
										<div>
											<input name="pais" type="text" placeholder="Digite o nome do Cliente">
										</div>
									</div> 

									<!-- Button (Double) -->
									<div>
										<label for="btnsalvar"></label>
										<div>
											<button id="btnsalvar" name="btnsalvar">Salvar</button>
										</div>
									</div>

								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
					<i class="fas fa-times"></i>
				</span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Cadastro De Produtos</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img rounded mb-5" src="img/portfolio/Cliente.png" alt="">
							<!-- Portfolio Modal - Text -->
							<form action="Adicionar/AddProdutos.php" method="POST">
								<fieldset>
									<!-- Form Name -->
									<div>
										<label>Nome do Produto : </label>  
										<div>
											<input name="pro_nome" type="text" placeholder="Digite o Nome do Produto">
										</div>
									</div> 
									<div>
										<label>Codigo do Produto : </label>  
										<div>
											<input name="pro_codigo_produto" type="text" placeholder="Digite o Codigo do Produto">
										</div>
									</div> 
									<div>
										<label>Data de Compra : </label>  
										<div>
											<input name="pro_data_compra" type="text" placeholder="Digite a data da compra">
										</div>
									</div> 
									<div>
										<label>Preço de Compra : </label>  
										<div>
											<input name="pro_preco_compra" type="text" placeholder="Digite o Preço de Compra do Produto">
										</div>
									</div> 
									<div>
										<label>Preço de Venda : </label>  
										<div>
											<input name="pro_preco_venda" type="text" placeholder="Digite o Preço de Venda do Produto">
										</div>
									</div> 
									<div>
										<label >Categoria : </label>
										<div >
											<select  name="cat_id"  required>
												<?php
												include '../bd/conexao.php';
												$sql = "SELECT * FROM tb_categorias";
												foreach ($conn->query($sql) as $registro) {
													$cat_id = $registro['cat_id'];
													$nome = $registro['cat_nome'];

													echo "<option value='".$cat_id."'>".$nome."</option>";
												}
												?>

											</select>
										</div>
									</div>

									<!-- Button (Double) -->
									<div>
										<label for="btnsalvar"></label>
										<div>
											<button id="btnsalvar" name="btnsalvar">Salvar</button>
										</div>
									</div>

								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
					<i class="fas fa-times"></i>
				</span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Lista de Clientes</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img rounded mb-5" src="img/portfolio/prancheta.png" alt="">
							<!-- Portfolio Modal - Text -->  <div id="cssLoader3" class="preloder-wrap">
								<div class="loader">
									<div class="child-common child4"></div>
									<div class="child-common child3"></div>
									<div class="child-common child2"></div>
									<div class="child-common child1"></div>
								</div>
							</div>
							<!-- preloder-wrap -->
							<br>
							<br>
							<br>
							<!-- End menu area -->
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="latest-product">
											<h2 class="section-title">Meus Clientes</h2>
										</div>
									</div>
								</div>        
							</div>    
							<div id="divConteudo">
								<table id="tabela">
									<thead>
										<tr>
											<th>Nome Fantasia</th>
											<th>Razão Social</th>
											<th>Tipo</th>
											<th>CGC</th>
											<th>Pais</th>
										</tr>
										<tr>
											<th><input type="text" id="txtColuna1"/></th>
											<th><input type="text" id="txtColuna2"/></th>
											<th><input type="text" id="txtColuna3"/></th>
											<th><input type="text" id="txtColuna4"/></th>
											<th><input type="text" id="txtColuna5"/></th>
											
										</tr>
									</thead>
									<?php
									$usuario_id= $_SESSION['id'];
									$stmt = $conn->query("SELECT *
										FROM tb_clientes
										where usuario_id = '$usuario_id'");

									$clientes = $stmt->fetchAll();
									foreach ($clientes as $dados) {

										$CLI_ID=$dados['CLI_ID'];
										$nome_fantasia = $dados['nome_fantasia'];
										$razao_social = $dados['razao_social'];
										$tipo = $dados['tipo'];
										$cgc = $dados['cgc'];  
										$cep = $dados['cep'];  
										$rua = $dados['rua'];  
										$numero = $dados['numero'];  
										$bairro = $dados['bairro'];  
										$cidade = $dados['cidade'];  
										$estado = $dados['estado'];  
										$pais = $dados['pais'];  
										?>  

										<tbody>
											<tr>
												<td><?php echo $nome_fantasia;?></td>
												<td><?php echo $razao_social;?></td>
												<td><?php echo $tipo; ?></td>
												<td><?php echo $cgc;?></td>
												<td><?php echo $rua;?></td>
											</tr>             
										</tbody>


										<?php
									}
								?>  
							</table>
						</div>
						<SCRIPT>
							$(function(){
								$("#tabela input").keyup(function(){       
									var index = $(this).parent().index();
									var nth = "#tabela td:nth-child("+(index+1).toString()+")";
									var valor = $(this).val().toUpperCase();
									$("#tabela tbody tr").show();
									$(nth).each(function(){
										if($(this).text().toUpperCase().indexOf(valor) < 0){
											$(this).parent().hide();
										}
									});
								});

								$("#tabela input").blur(function(){
									$(this).val("");
								});
							});

						</SCRIPT>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
					<i class="fas fa-times"></i>
				</span>
			</button>
			<div class="modal-body text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title -->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Lista de Produtos</h2>
							<!-- Icon Divider -->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon">
									<i class="fas fa-star"></i>
								</div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image -->
							<img class="img rounded mb-5" src="img/portfolio/prancheta.png" alt="">
							<!-- Portfolio Modal - Text -->  <div id="cssLoader3" class="preloder-wrap">
								<div class="loader">
									<div class="child-common child4"></div>
									<div class="child-common child3"></div>
									<div class="child-common child2"></div>
									<div class="child-common child1"></div>
								</div>
							</div>
							<!-- preloder-wrap -->
							<br>
							<br>
							<br>
							<!-- End menu area -->
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="latest-product">
											<h2 class="section-title">Meus Produtos</h2>
										</div>
									</div>
								</div>        
							</div>    
							<div id="divConteudo">
								<table id="tabela">
									<thead>
										<tr>
											<th>Produto</th>
											<th>Data de compra do produto</th>
											<th>Preço de Compra</th>
											<th>Preço de Venda</th>
											<th>Categoria</th>
										</tr>
										<tr>
											<th><input type="text" id="txtColuna1"/></th>
											<th><input type="text" id="txtColuna2"/></th>
											<th><input type="text" id="txtColuna3"/></th>
											<th><input type="text" id="txtColuna4"/></th>
											<th><input type="text" id="txtColuna5"/></th>
											
										</tr>
									</thead>
									<?php
									$usuario_id= $_SESSION['id'];
									$stmt = $conn->query("SELECT *
										FROM tb_produtos
										INNER JOIN categorias ON produtos.id_categoria = categorias.cat_id 
										where tb_produtos.usuario_id = '$usuario_id'");

									$produtos = $stmt->fetchAll();
									foreach ($produtos as $dados) {

										$pro_id=$dados['pro_id'];
										$pro_nome = $dados['pro_nome'];
										$pro_data_compra = $dados['pro_data_compra'];
										$pro_codigo_produto = $dados['pro_codigo_produto'];
										$pro_preco_compra = $dados['pro_preco_compra'];  
										$pro_preco_venda = $dados['pro_preco_venda'];  
										$cat_nome = $dados['cat_nome'];  
										?>  

										<tbody>
											<tr>
												<td><?php echo $pro_nome;?></td>
												<td><?php echo $pro_data_compra;?></td>
												<td><?php echo $pro_preco_compra;?></td>
												<td><?php echo $pro_preco_venda;?></td>
												<td><?php echo $cat_nome;?></td>
											</tr>             
										</tbody>


										<?php
									}
								?>  
							</table>
						</div>
						<SCRIPT>
							$(function(){
								$("#tabela input").keyup(function(){       
									var index = $(this).parent().index();
									var nth = "#tabela td:nth-child("+(index+1).toString()+")";
									var valor = $(this).val().toUpperCase();
									$("#tabela tbody tr").show();
									$(nth).each(function(){
										if($(this).text().toUpperCase().indexOf(valor) < 0){
											$(this).parent().hide();
										}
									});
								});

								$("#tabela input").blur(function(){
									$(this).val("");
								});
							});

						</SCRIPT>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>

<?php
require_once "rodape.php";
?>
</body>
</html>