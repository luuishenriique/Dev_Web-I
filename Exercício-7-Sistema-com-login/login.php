<?php $title = 'Login'; ?>
<?php include 'header.php'; ?>
<?php if (!empty($_GET['msg'])): ?>
	<div class="msg">
		<h4><?= $_GET['msg']; ?></h4>
	</div>
<?php endif ?>
<h1>Login de acesso</h1>
<form action="auth.php" method="POST">
	<legend>Dados para acesso</legend>
	<fieldset>
		<input type="text" name="login" placeholder="Login">
		<input type="password" name="senha" placeholder="Senha">
		<input type="submit" value="Entrar">
		<input type="reset" value="Limpar">
	</fieldset>	
</form>
<br>
<a class="form-links" href="cad_usr.php"><h3>Cadastrar novo usuário</h3></a>
<?php include 'footer.php'; ?>