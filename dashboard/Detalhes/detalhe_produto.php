<?php
require_once '../../bd/conexao.php';
require '../menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detalhes Do Produto</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/estilo_relatorio_final.css">
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
	<h1>Detalhes Da Saida</h1>

	<?php
$pro_id = $_GET['id'];
$stmt = $conn->query("SELECT *
		FROM tb_produtos
		INNER JOIN categorias ON produtos.id_categoria = categorias.cat_id 
		where tb_produtos.pro_id = '$pro_id'");

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
		<form>
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td><?php echo $pro_nome;?></td>
						<td><?php echo $pro_data_compra;?></td>
						<td><?php echo $pro_codigo_produto; ?></td>
						<td><?php echo $pro_preco_compra;?></td>
						<td><?php echo $pro_preco_venda;?></td>
						<td><?php echo $cat_nome;?></td>
					</tr>             
				</thead>        
				<tbody>
					<tr>
						<td><?php echo $pro_nome;?></td>
						<td><?php echo $pro_data_compra;?></td>
						<td><?php echo $pro_preco_compra;?></td>
						<td><?php echo $pro_preco_venda;?></td>
						<td><?php echo $cat_nome;?></td>
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