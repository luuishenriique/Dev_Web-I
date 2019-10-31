<?php 
require 'init.php';
session_start();

$PDO = dbConnect();

$sql = "SELECT * FROM Itens WHERE idUser_Item = :id"; 

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':id', $_SESSION['user_id']); 

$stmt->execute();

$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($linhas);

if (count($linhas) <= 0) {
	redirect('index.php?msg=Não há itens cadastrados!');
}

include 'header.php';
?>

<title>Meus Itens</title>
<h2 class="user-h2">Seus itens</h2>
<br>
<?php if (!is_null($_GET['msg'])): ?>
	<?= $_GET['msg'] ?>
<?php endif ?> 
<br>
<table class="tb-user">
	<thead>
		<th>Nome do Item</th>
		<th>Localização</th>
		<th>Ações</th>
	</thead>
	<tbody>
		<?php foreach ($linhas as $id => $linha): ?>
			<?php $_SESSION['id'] = $linhas[$id]['idItem']; ?>
			<tr>
				<td><?= $linhas[$id]['nameItem'] ?></td>
				<td><?= $linhas[$id]['localItem'] ?></td>
				<td>
					<nav>
						<a href="mod_item.php">&#133;</a> |
						<a href="del_item.php">&times;</a>
					</nav>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<br>
<!-- <h3 style="text-align: center;"><a href="cad_itens.php">Adicionar Itens</a></h3> -->
<h4 style="text-align: center;"><a href="index.php">Voltar para menu</a></h4>
<?php include 'footer.php'; ?>