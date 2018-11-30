<?php
require_once 'bd/conexao.php';
?>
<?php
$usuario_id = $_GET['id'];

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

if($file == false){

	$sql = ("UPDATE usuarios
		SET nomeEmp = :nomeEmp, 
		cnpj = :cnpj, 
		fone = :fone, 
		cel = :cel, 
		face = :face, 
		rua = :rua, 
		bairro = :bairro, 
		cidade = :cidade, 
		nomeRes = :nomeRes, 
		bairro_propietario = :bairro_propietario, 
		cidade_propietario = :cidade_propietario, 
		endereco = :endereco, 
		cpf = :cpf, 
		nascimento = :nascimento, 
		rg = :rg, 
		user = :user, 
		pw = :pw  
		WHERE usuario_id = :usuario_id");

	$stmt = $conn->prepare($sql);	

	$stmt->bindParam(":usuario_id", $usuario_id, PDO::PARAM_INT);
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
	$result1 = $stmt->execute();

}else{
	$query = ("UPDATE usuarios 
		SET ARQUIVO  = :file,
		nomeEmp = :nomeEmp, 
		cnpj = :cnpj, 
		fone = :fone, 
		cel = :cel, 
		face = :face, 
		rua = :rua, 
		bairro = :bairro, 
		cidade = :cidade, 
		nomeRes = :nomeRes, 
		bairro_propietario = :bairro_propietario, 
		cidade_propietario = :cidade_propietario, 
		endereco = :endereco, 
		cpf = :cpf, 
		nascimento = :nascimento, 
		rg = :rg, 
		user = :user, 
		pw = :pw  
		WHERE usuario_id = :usuario_id");
	$stmt = $conn->prepare($query);

	$stmt->bindParam(":file", $file);
	$stmt->bindParam(":usuario_id", $usuario_id, PDO::PARAM_INT);
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


	$result2 = $stmt->execute();


	if ( ! $result2 && ! $result1){
		var_dump( $stmt->errorInfo() );
		exit;
	}
}
$_SESSION['sucess-editado']=1;
header('location:perfil.php');
?>