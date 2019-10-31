<?php 
require 'init.php';;

$name = $_POST['name'] ?? false;
$surname = $_POST['surname'] ?? false;
$login = $_POST['login'] ?? false;
$email = $_POST['email'] ?? false;
$password = $_POST['password'] ?? false;
$vrpassword = $_POST['vrpassword'] ?? false;

if ($password !== $vrpassword) {
	redirect('cad_nuser.php?msg=Senhas não são iguais!');
	exit();
} else {
	$password = cryptPass($password);
}

$PDO = dbConnect();

$sql = "INSERT INTO Users (nameUSer,surnameUser,loginUser,emailUser,passUser)
values(:name,:surname,:login,:email,:password)";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':surname', $surname);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

$stmt->execute();

redirect('login.php?msg=Usuário adicionado com sucesso!');
?>