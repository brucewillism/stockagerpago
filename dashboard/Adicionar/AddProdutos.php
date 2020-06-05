<?php
require_once '../../bd/conexao.php';
?>
<?php

$usuario_id = $_SESSION['id'];


$pro_quantidade = addslashes($_POST['pro_quantidade']);
$pro_data_validade = addslashes($_POST['pro_data_validade']);
$pro_marca = addslashes($_POST['pro_marca']);
$pro_data_entrada = addslashes($_POST['pro_data_entrada']);  
$id_categoria = addslashes($_POST['id_categoria']);  
$id_grupo = addslashes($_POST['id_grupo']);
$fornecedor_id = addslashes($_POST['fornecedor_id']); 

$stmt = $conn->query("SELECT escola_id 
	FROM escola WHERE usuario_id = '$usuario_id'" );
$cadastro = $stmt->fetchAll();
foreach ($cadastro as $dados) {

	$escola_id = $dados['escola_id'];
}
if (!isset($escola_id)) {
	echo "Não é Possivel salvar Produto Voçê Precisar Ter Uma Escola Cadastrada Para Poder Ter Produtos";
}
else{

	$sql ="INSERT INTO produtos (pro_quantidade, pro_data_validade, pro_marca, pro_data_entrada, id_categoria, id_grupo, usuario_id, escola_id, fornecedor_id) 
	VALUES(:pro_quantidade, :pro_data_validade, :pro_marca, :pro_data_entrada, :id_categoria, :id_grupo, :usuario_id, :escola_id, :fornecedor_id)";

	$stmt = $conn->prepare( $sql );

	$stmt->bindParam( ':escola_id', $escola_id);
	$stmt->bindParam( ':usuario_id', $usuario_id);
        $stmt->bindParam( ':fornecedor_id', $fornecedor_id);
	$stmt->bindParam( ':pro_quantidade', $pro_quantidade);
	$stmt->bindParam( ':pro_data_validade', $pro_data_validade);
        $stmt->bindParam( ':pro_marca', $pro_marca);
        $stmt->bindParam( ':pro_data_entrada', $pro_data_entrada);
        $stmt->bindParam( ':id_categoria', $id_categoria);
        $stmt->bindParam( ':id_grupo', $id_grupo);

	$result = $stmt->execute();
	if ( ! $result ){
		var_dump( $stmt->errorInfo() );
		exit;
	}

	header('location:../index.php');
}
?>