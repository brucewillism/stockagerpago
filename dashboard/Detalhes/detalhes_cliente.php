<?php
require_once '../../bd/conexao.php';
require '../menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detalhes Do Cliente</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/estilo_relatorio_final.css">
</head>
<body>
	<!-- Page Container -->
	<div class="w3-content w3-margin-top" style="max-width:1400px;text-align: center">

		<!-- The Grid -->
		<!-- Left Column -->
		<div class="w3-third">


<!------------------------------------------foto---------------------------------------------------------------
-->              
<body>
	<div id="cssLoader3" class="preloder-wrap">
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
	<h1>Detalhes Da Entrada</h1>

	<?php
	if (isset($_GET['id'])){
		$usuario_id = $_GET['id'];
	}
	$stmt = $conn->query("SELECT *
		FROM tb_clientes
		where usuario_id = '$usuario_id' ");

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
		<form>
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td><?php echo $nome_fantasia;?></td>
						<td><?php echo $razao_social;?></td>
						<td><?php echo $tipo; ?></td>
						<td><?php echo $cgc;?></td>
						<td><?php echo $rua;?></td>
						<td><?php echo $cep;?></td>
						<td><?php echo $numero;?></td>
						<td><?php echo $bairro;?></td>
						<td><?php echo $cidade;?></td>
						<td><?php echo $estado;?></td>
						<td><?php echo $pais;?></td>
					</tr>             
				</thead>
				<tbody>
					<tr>
						<td><input value="<?php echo $nome_fantasia;?>"></td>
						<td><input value="<?php echo $razao_social;?>"></td>
						<td><input value="<?php echo $tipo;?>"> </td>
						<td><input value="<?php echo $cgc;?>"></td>
						<td><input value="<?php echo $rua;?>"></td>
						<td><input value="<?php echo $cep;?>"></td>
						<td><input value="<?php echo $numero;?>"></td>
						<td><input value="<?php echo $bairro;?>"></td>
						<td><input value="<?php echo $cidade;?>"></td>
						<td><input value="<?php echo $estado;?>"></td>
						<td><input value="<?php echo $pais;?>"></td>  
					</tr>
				</tbody>
			</table>
		</form>
		<?php
	}
?>                               
</div>
</div>
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

<?php include '../rodape.php'; ?>
</body>
</html>