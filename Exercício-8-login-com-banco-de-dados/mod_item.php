<?php 
require 'init.php';
session_start();

$PDO = dbConnect();

$sql = "SELECT * FROM Itens WHERE idItem = :id"; 

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':id', $_SESSION['id']); 

$stmt->execute();

$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($linhas);

include 'header.php';
?>

<title>Modificando Item</title>
<h2 class="user-h2">Modificando item</h2>
<form class="mod-form" action="add_mod_item.php" method="POST">
	<table class="tb-user">
		<thead>
			<th>Nome do item</th>
			<th>Novo nome</th>
			<th>Localização</th>
			<th>Nova Localização</th>
		</thead>
		<tbody>
			<?php foreach ($linhas as $id => $linha): ?>
				<tr>
					<td><?= $linhas[$id]['nameItem'] ?></td>
					<td>
						<input type="text" name="nameitem" required>
					</td>
					<td><?= $linhas[$id]['localItem'] ?></td>
					<td>
						<input type="text" name="localitem" required>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<br>
	<input style="text-align: center;" type="submit" value="Modificar">
</form>
<br>
<h4 style="text-align: center;"><a href="my_itens.php">Voltar para seus itens</a></h4>

<?php include 'footer.php'; ?>