<?php
include 'bd/conexao.php';

$nomeEmp = htmlspecialchars($_POST['nomeEmp']);
$cnpj = htmlspecialchars($_POST['cnpj']);
$fone = htmlspecialchars($_POST['fone']);
$cel = htmlspecialchars($_POST['cel']);
$face = htmlspecialchars($_POST['face']);
$rua = htmlspecialchars($_POST['rua']);
$bairro = htmlspecialchars($_POST['bairro']);
$cidade = htmlspecialchars($_POST['cidade']);
$nomeRes = htmlspecialchars($_POST['nomeRes']);
$bairro_propietario = htmlspecialchars($_POST["bairro_propietario"]);
$cidade_propietario = htmlspecialchars($_POST["cidade_propietario"]);
$endereco = htmlspecialchars($_POST["endereco"]);
$cpf = htmlspecialchars($_POST["cpf"]);
$nascimento = htmlspecialchars($_POST["nascimento"]);
$rg = htmlspecialchars($_POST["rg"]);
$user = htmlspecialchars($_POST['user']);
$pw = md5(htmlspecialchars($_POST['password']));
$file_path= addslashes($_FILES['file']['tmp_name']);

$file = file_get_contents($file_path);


$sql = ("INSERT INTO usuarios (nomeEmp, cnpj, fone, cel, face, rua, bairro, cidade, nomeRes, bairro_propietario, cidade_propietario, endereco, cpf ,nascimento,rg, user, pw, ARQUIVO) 

VALUES(:nomeEmp, :cnpj, :fone, :cel, :face, :rua, :bairro, :cidade, :nomeRes, :bairro_propietario, :cidade_propietario, :endereco, :cpf, :nascimento, :rg, :user, :pw, :file)");

$stmt = $conn->prepare( $sql );

$stmt->bindParam( ':nomeEmp', $nomeEmp );
$stmt->bindParam( ':cnpj', $cnpj );
$stmt->bindParam( ':fone', $fone );
$stmt->bindParam( ':cel', $cel);
$stmt->bindParam( ':face', $face);
$stmt->bindParam( ':rua', $rua);
$stmt->bindParam( ':bairro', $bairro);
$stmt->bindParam( ':cidade', $cidade);
$stmt->bindParam( ':nomeRes', $nomeRes);
$stmt->bindParam( ':bairro_propietario', $bairro_propietario);
$stmt->bindParam( ':cidade_propietario', $cidade_propietario);
$stmt->bindParam( ':endereco', $endereco);
$stmt->bindParam( ':cpf', $cpf);
$stmt->bindParam( ':nascimento', $nascimento);
$stmt->bindParam( ':rg', $rg);
$stmt->bindParam( ':user', $user);
$stmt->bindParam( ':pw', $pw);
$stmt->bindParam( ':file', $file);

$result = $stmt->execute();
if ( ! $result ){
	var_dump( $stmt->errorInfo() );
	exit;
}

$_SESSION['sucess-cadastrado']=1;
header('location:login.php');

?>