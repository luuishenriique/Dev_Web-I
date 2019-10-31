<?php 
require 'config.php';
session_start();

$autorizado = $_SESSION['autorizado'];
$id = $_SESSION['id'];
$login = $_SESSION['login'];
$cpf = $_SESSION['cpf'];

if ($autorizado !== true) {
	redirect('login.php');
	exit();
}
?>

<?php $title = "Biblioteca"; ?>
<?php 
include 'header.php'; 
$data = file(BKS_FILE);
$data_book = [];
foreach ($data as $cont) {
	$data_book[] = str_getcsv($cont);
}
// var_dump($data_book);
?>
<br>
<?php if(!empty($_GET['msg'])): ?>
	<div>
		<h4><?= $_GET['msg'] ?></h4>
	</div>
<?php endif ?>
<h2>Livros Disponíveis na biblioteca</h2>
<br>
<table class="table_books">
	<thead>
		<tr>
			<th>Livro</th>
			<th>Autor</th>
			<th>Lançamento</th>
			<th>Ações</th>
		</tr>		
	</thead>
	<tbody>
		<?php foreach ($data_book as $id => $books): ?>
			<?php list($book, $autor, $date) = $books; ?>
			<tr>
				<td><?= $book ?></td>
				<td><?= $autor ?></td>
				<td><?= $date ?></td>
				<td><a href="del_book.php?id=<?= $id ?>">&times;</a></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<br>
<form class="form-books" action="add_book.php" method="POST">
	<fieldset>
		<legend>Adicionar um novo livro</legend>
		<legend>Nome do Livro</legend>
		<input type="text" name="book" placeholder="Ex: Senhor dos Anéis">
		<legend>Autor do Livro</legend>
		<input type="text" name="autor" placeholder="Ex: J. R. R. Tolkien">
		<legend>Data de Lançamento</legend>
		<input type="date" name="date" placeholder="Ex: 2006-06-06">
		<br>
		<br>
		<input type="submit" value="Adicionar">
	</fieldset>
</form>
<br>
<h3><a href="index.php">Voltar</a></h3>
<?php include 'footer.php'; ?>
