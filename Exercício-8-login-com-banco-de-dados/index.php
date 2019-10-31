<?php 
session_start();

require 'init.php';
isLoggedIn();

include 'header.php';
?>
<title>Sua conta</title>
<br>
<?php if (!isset($_GET['msg'])): ?>
	<?php if (!defined($_GET['msg'])): ?>
		
	<?php endif ?>
<?php endif ?>
<br>
<h1>Bem vindo(a) <?= $_SESSION['user_name']; ?></h1>
<br>
<h2>Selecione uma das opções a seguir</h2>
<br>
<h3><a href="my_itens.php">Meus itens</a></h3>
<h3><a href="my_data.php">Meus dados</a></h3>
<br>
<h4><a href="logout.php">Sair</a></h4>
<?php include 'footer.php'; ?>