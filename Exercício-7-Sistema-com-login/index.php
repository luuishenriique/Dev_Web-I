<?php 
require 'config.php';
session_start();

$autorizado = $_SESSION['autorizado'] ?? false;

if ($autorizado !== true) {
	redirect('login.php');
	exit();
}
?>

<?php $title = 'Main menu'; ?>
<?php include 'header.php'; ?>
<h1>Autenticação realizada com sucesso!</h1>
<a class="main-links" href="exit.php"><h3>Sair</h3></a>
<?php include 'footer.php'; ?>

