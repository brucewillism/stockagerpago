<?php
require_once 'bd/conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
	<script type="text/javascript">
		function loginsucess(){
			window.location='index.php';
		}
		function loginfailed(){
			alert('Login e/ou senha incorretos');
			window.location='login.php';
		}
	</script>
</head>
<body>

	<?php
	$user = addslashes($_POST['user']);
	$pw = md5(addslashes($_POST['password']));
	$sql = "SELECT * FROM usuarios WHERE user='$user' AND pw='$pw'";
	$res = $conn->query($sql);
	if($res !== false){
		$result = $res->fetch(PDO::FETCH_ASSOC);
		if($result['user'] == $user && $result['pw'] == $pw) {
			$_SESSION['user'] = $user;
			$_SESSION['password'] = $pw;
			$_SESSION['logado'] = True;
			$_SESSION['cnpj'] = $result['cnpj'];
			$_SESSION['user_id'] = $result['usuario_id'];
			echo "<script>loginsucess()</script>";
		}
		else{
			echo "<script>loginfailed()</script>";
		}
	}	
	?>
</body>
</html>