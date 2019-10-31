<?php 
require 'init.php';
session_start();

$PDO = dbConnect();

$sql = "SELECT * FROM Users WHERE idUser = :id"; 

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':id', $_SESSION['user_id']); 

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$user = $users[0];

$name = $user['nameUser'];
$surname = $user['surnameUser'];
$login = $user['loginUser'];
$email = $user['emailUser'];
$password = $user ['passUser'];

include 'header.php';
?>

<title>Meus dados</title>
<h2 class="user-h2">informações sobre o usuário</h2>

<table class="tb-user">
	<thead>
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Login</th>
		<th>Email</th>
		<th>Senha</th>
		<th>Ações</th>
	</thead>
	<tbody>
		<tr>
			<td><?= $name ?></td>
			<td><?= $surname ?></td>
			<td><?= $login ?></td>
			<td><?= $email ?></td>
			<td><?= $password ?></td>
			<td>
				<nav>
					<a href="">&#133;</a> | 
					<a href="">&times;</a>  
				</nav>
			</td>
		</tr>
	</tbody>
</table>
<br>
<h4 style="text-align: center;"><a href="index.php">Voltar para menu</a></h4>
<?php include 'footer.php'; ?>

