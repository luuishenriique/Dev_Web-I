<?php include 'header.php' ?>
<title>Login</title>
<h1 class="login-h1">Login</h1>
<?php if (!isset($tipo)): ?>
	<h3 class="info-msg"><?= $tipo; ?></h3>
<?php endif ?>
<div class="login-form">
	<form action="auth.php" method="POST">
		<fieldset>
			<legend>Dados de usuário</legend>
			<label for="login">Login:</label>
			<input type="text" name="login" placeholder="Ex: jsilva" required>
			<br>
			<br>
			<label for="password">Senha:</label>
			<input type="password" name="password" required>
			<br>
			<br>
			<input type="submit" value="Entrar">
			<br>
			<p>Não possui cadastro? <a href="cad_nuser.php">Cadastre-se aqui!</a></p>
		</fieldset>
	</form>	
</div>
<?php include 'footer.php' ?>