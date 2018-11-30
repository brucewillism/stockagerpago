<?php
require_once 'bd/conexao.php';
?>
<?php

$usuario_id = $_SESSION['user_id'];
$nome_produto=addslashes($_POST['nome_produto']);
$quantidade=addslashes($_POST['quantidade']);
$pro_preco=addslashes($_POST['pro_preco']);
$categoria=addslashes($_POST['categoria']);
$texto=addslashes($_POST['texto']);
$file_path= addslashes($_FILES['file']['tmp_name']);

$file = file_get_contents($file_path);

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario_id='$usuario_id'");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$usuario_id = $result['usuario_id'];

$sql ="INSERT INTO produtos (pro_nome, pro_quantidade, pro_preco, id_categoria, pro_descricao, id_user, ARQUIVO) VALUES(:nome_produto, :quantidade, :pro_preco, :categoria, :texto, :usuario_id, :file)";

$stmt = $conn->prepare( $sql );

$stmt->bindParam( ':usuario_id', $usuario_id);
$stmt->bindParam( ':nome_produto', $nome_produto);
$stmt->bindParam( ':quantidade', $quantidade);
$stmt->bindParam( ':pro_preco', $pro_preco);
$stmt->bindParam( ':categoria', $categoria);
$stmt->bindParam( ':texto', $texto);
$stmt->bindParam( ':file', $file);

$result = $stmt->execute();
if ( ! $result ){
	var_dump( $stmt->errorInfo() );
	exit;
}

header('location:quantidade_estoque.php');

?>