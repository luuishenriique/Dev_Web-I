<?php 
require 'init.php';
include 'header.php'; 
?>

<title>Cadastro de usuário</title>

<?php if (!isset($msg)): ?>
	<h3><?= $msg ?></h3>
<?php endif ?>

<form class="nuser-form" action="add_nuser.php" method="POST">
	<fieldset>
		<legend>Dados do novo usuário</legend>
		<label for="name">Nome:</label>
		<input type="text" name="name" placeholder="Ex: João" required>
		<label for="surname">Sobrenome:</label>
		<input type="text" name="surname" placeholder="Ex: Silva" required>
		<label for="login">Login:</label>
		<input type="text" name="login" placeholder="Ex: JS2348" required>
		<label for="email">Email:</label>
		<input type="text" name="email" placeholder="Ex: jsilva@outlook.com" required>
		<label for="password">Senha:</label>
		<input type="password" name="password" required>
		<label for="vrpassword">Confirme a senha:</label>
		<input type="password" name="vrpassword" required>
		<br>
		<br>
		<input type="submit" value="Cadastrar">
	</fieldset>
</form>
<br>
<h3 style="text-align: center;"><a href="login.php">Voltar para login</a></h3>
