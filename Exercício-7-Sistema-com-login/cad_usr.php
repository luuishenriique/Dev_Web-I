<?php $title = 'Cadastro de usuário'; ?>
<?php include 'header.php'; ?>
<?php if (!empty($_GET['msg'])): ?>
	<div class="msg">
		<h4><?= $_GET['msg']; ?></h4>
	</div>
<?php endif ?>
<h1>Cadastro de novo usurário</h1>
<form action="add_usr.php" method="POST">
	<legend>Dados do novo usuário</legend>
	<fieldset>
		<input type="text" name="cpfNuser" placeholder="CPF do novo usuário">
		<input type="text" name="loginNuser" placeholder="Login do novo usuário">
		<input type="password" name="senhaNuser" placeholder="Senha do novo usuário"> 
		<input type="password" name="confsenhaNuser" placeholder="Confirme a senha">
		<input type="password" name="admSenha" placeholder="Senha do Administrador">
		<input type="submit" value="Cadastrar">
		<input type="reset" value="Limpar">
	</fieldset>
</form>
<br>
<a class="form-links" href="login.php"><h3>Voltar a tela de login</h3></a>

