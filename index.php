<?php
require_once 'bd/conexao.php';
if($_SESSION['logado']==true) {
	header('location:dashboard/index.html');
}else{
	header('location:Login/index.html');
}