<?php 
require 'config.php';
session_start();

$autorizado = $_SESSION['autorizado'];
$session_id = $_SESSION['id'];
$login = $_SESSION['login'];
$cpf = $_SESSION['cpf'];

if ($autorizado !== true) {
	redirect('login.php');
	exit();
}

$title = "Meus Livros";

include 'header.php';

$data = file(MBK_FILE);
$databook = file(BKS_FILE);
$my_book = [];
foreach ($data as $cont) {
	$my_book[] = str_getcsv($cont);
}
// var_dump($my_book);
?>

<?php if(!empty($_GET['msg'])): ?>
	<div>
		<h4><?= $_GET['msg'] ?></h4>
	</div>
<?php endif ?>
<br>
<h2>Sua Biblioteca</h2>
<br>
<table class="table_mybooks">
	<thead>
		<tr>
			<th>Livro</th>
			<th>Autor</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($my_book as $id => $books): ?>
			<?php list($id, $livro, $autor) = $books; ?>
			<tr>
				<?php if ($session_id == $id): ?>
					<td><?= $livro ?></td>
					<td><?= $autor ?></td>
					<td><a href="del_my_book.php?id=<?= $id ?>">&times;</a></td>
				<?php endif ?>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<br>
<form class="form-mybook" action="add_my_book.php" method="POST">
	<fieldset>
		<legend>Adicionar livro a sua biblioteca</legend>
		<p>Livros disponíves na biblioteca:</p>
		<select class="select-book" name="select_book">
			<option value="" selected disabled>Selecione um livro</option>
			<?php foreach ($databook as $cont): ?>
				<option value="<?= $cont ?>"><?= $cont ?></option>
			<?php endforeach ?>
		</select>
		<input type="submit" value="Adicionar">
	</fieldset>
</form>
<br>
<h3><a href="index.php">Voltar</a></h3>
<?php include 'footer.php'; ?>