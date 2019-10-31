<?php 
require 'init.php';

$login = $_POST['login'] ?? false;
$password = $_POST['password'] ?? false;

// if (empty($login) || empty($password)) {
// 	redirect('login.php?msg=Preencha todos os campos necessários!');
// 	exit();
// }

$PDO = dbConnect();

$password = cryptPass($password);

$sql = "SELECT * FROM Users WHERE loginUser = :login AND passUser = :password"; 

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':login', $login); 
$stmt->bindParam(':password', $password);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0) {
	redirect('login.php?msg=Email ou senha incorretos!');
	exit();
}

$user = $users[0]; /*não entendi muito bem ?xD?*/

session_start(); 
loggedOK();
$_SESSION['user_id'] = $user['idUser'];
$_SESSION['user_name'] = $user['nameUser'];
$_SESSION['user_login'] = $user['loginUser'];

redirect('index.php');
?> 