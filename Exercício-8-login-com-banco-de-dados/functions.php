<?php 
require 'init.php';

function redirect($url){
	header('Location: ' . $url);
	exit();
}

function dbConnect(){
	try {
		$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8';

		$PDO = new PDO($dsn, DB_USER, DB_PASS);

		return $PDO;
	} catch (PDOException $e) {
		echo 'Erro ao conectar com o MySql: ' . $e->getMessage();
	}
}

function cryptPass($str){
	return crypt($str,'lg');
}

function isLoggedIn(){
	if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
		redirect('login.php');
		exit();
	}
}

function loggedOK(){
	$_SESSION['logado'] = true;
}

function logOut(){
	$_SESSION['logado'] = false;
	session_destroy();
	redirect('login.php');
}
?>