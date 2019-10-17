<?php 
require 'config.php';
session_start();

$autorizado = $_SESSION['autorizado'] ?? false;
$login = $_SESSION['login'];

if ($autorizado !== true) {
	redirect('login.php');
	exit();
}
?>

<?php $title = 'Main menu'; ?>
<?php include 'header.php'; ?>
<h4>Bem vindo <?= $login ?>!</h4>
<div class="menu_opt">
	<h2><a href="my_books.php">Seus livros</a></h2>
	<h2><a href="library.php">Biblioteca</a></h2>	
</div>
<a class="main-links" href="exit.php"><h3>Sair</h3></a>
<?php include 'footer.php'; ?>

