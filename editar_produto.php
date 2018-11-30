<?php
require_once 'bd/conexao.php';
?>
<?php
$pro_id = $_GET['id'];

$pro_nome=addslashes($_POST['nome_produto']);
$pro_quantidade=addslashes($_POST['quantidade']);
$pro_preco=addslashes($_POST['pro_preco']);
$id_categoria=addslashes($_POST['categoria']);
$pro_descricao=addslashes($_POST['texto']);

$file_path= addslashes($_FILES['file']['tmp_name']);
$file = file_get_contents($file_path);

if($file == false){

	$sql = ("UPDATE produtos
		SET pro_nome = :pro_nome, 
		pro_quantidade = :pro_quantidade, 
		pro_preco = :pro_preco, 
		id_categoria = :id_categoria, 
		pro_descricao = :pro_descricao  
		WHERE pro_id = :pro_id");

	$stmt = $conn->prepare($sql);	

	$stmt->bindParam(":pro_id", $pro_id, PDO::PARAM_INT);
	$stmt->bindParam(":pro_nome", $pro_nome);
	$stmt->bindParam(":pro_quantidade", $pro_quantidade);
	$stmt->bindParam(":pro_preco", $pro_preco);
	$stmt->bindParam(":id_categoria", $id_categoria);
	$stmt->bindParam(":pro_descricao", $pro_descricao);
	
	$result1 = $stmt->execute();

}else{
	$query = ("UPDATE produtos 
		SET ARQUIVO  = :file,
		pro_nome = :pro_nome, 
		pro_quantidade = :pro_quantidade, 
		pro_preco = :pro_preco, 
		id_categoria = :id_categoria, 
		pro_descricao = :pro_descricao 		
		WHERE pro_id = :pro_id");

	$stmt = $conn->prepare($query);

	$stmt->bindParam(":file", $file);
	$stmt->bindParam(":pro_id", $pro_id);
	$stmt->bindParam(":pro_nome", $pro_nome);
	$stmt->bindParam(":pro_quantidade", $pro_quantidade);
	$stmt->bindParam(":pro_preco", $pro_preco);
	$stmt->bindParam(":id_categoria", $id_categoria);
	$stmt->bindParam(":pro_descricao", $pro_descricao);
	

	$result2 = $stmt->execute();


	if ( ! $result2 && ! $result1){
		var_dump( $stmt->errorInfo() );
		exit;
	}
}
$_SESSION['sucess-editado']=1;
header('location:quantidade_estoque.php');
?>