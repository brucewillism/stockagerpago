<?php
include 'bd/conexao.php';

$usuario_id = $_SESSION['user_id'];
$cpf = addslashes($_POST['cpf']);
$cnpj = addslashes($_POST['cnpj']);
$rg = addslashes($_POST['rg']);
$nome = addslashes($_POST['nome']);
$nome_fantasia = addslashes($_POST['nome_fantasia']);
$cep = addslashes($_POST['cep']);
$endereco = addslashes($_POST['endereco']);
$numero = addslashes($_POST['numero']);
$bairro = addslashes($_POST['bairro']);
$complemento = addslashes($_POST['complemento']);
$cidade = addslashes($_POST['cidade']);
$uf = addslashes($_POST['uf']);
$telefone = addslashes($_POST['telefone']);
$celular = addslashes($_POST['celular']);
$email = addslashes($_POST['email']);
$file_path= addslashes($_FILES['file']['tmp_name']);

$file = file_get_contents($file_path);


$sql = ("INSERT INTO usuarios (cpf, cnpj, rg, nome, nome_fantasia, cep, endereco, numero, bairro, complemento, cidade, uf, telefone, celular, email, usuario_id, ARQUIVO) 

	VALUES(:cpf,:cnpj,:rg,:nome,:nome_fantasia,:cep,:endereco,:numero,:bairro,:complemento,:cidade,:uf,:telefone,:celular,:email,:usuario_id,:file)");

$stmt = $conn->prepare( $sql );

$stmt->bindParam( ':usuario_id', $usuario_id);
$stmt->bindParam( ':nome', $nome);
$stmt->bindParam( ':nome_fantasia', $nome_fantasia);
$stmt->bindParam( ':endereco', $endereco);
$stmt->bindParam( ':cidade', $cidade);
$stmt->bindParam( ':numero', $numero);
$stmt->bindParam( ':complemento', $complemento);
$stmt->bindParam( ':cpf', $cpf );
$stmt->bindParam( ':cnpj', $cnpj );
$stmt->bindParam( ':rg', $rg );
$stmt->bindParam( ':cep', $cep);
$stmt->bindParam( ':uf', $uf);
$stmt->bindParam( ':telefone', $telefone);
$stmt->bindParam( ':celular', $celular);
$stmt->bindParam( ':email', $email);
$stmt->bindParam( ':file', $file);

$result = $stmt->execute();
if ( ! $result ){
	var_dump( $stmt->errorInfo() );
	exit;
}

$_SESSION['sucess-cadastrado']=1;
header('location:cliente_list.php');

?>