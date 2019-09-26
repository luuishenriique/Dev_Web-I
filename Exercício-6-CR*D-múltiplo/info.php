<?php 
	require 'header.php';
	require 'config.php';

	$id = $_GET['id'];

	if (!isset($id)) {
		redirect("pet.php");
	}

	$data = file(PET_FILE);

	$pets = array_map('colect', $data);
 ?>

<br>

 <table class="info_table">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Nome do pet</th>
 			<th>Data de entrada</th>
 			<th>Dono</th>
 			<th>Apagar Dados</th>
 		</tr>
 	</thead>
 	<tbody>
 		<tr>
 			<td><?= $pets[$id]['ID'] ?></td>
 			<td><?= $pets[$id]['Nome do pet'] ?></td>
 			<td><?= $pets[$id]['Data de entrada'] ?></td>
 			<td><?= $pets[$id]['Dono do pet'] ?></td>
 			<td><a href="del_pet.php?id=<?= $id ?>">&times;</a></td>
 		</tr>
 	</tbody>
 </table>

<br>

<h2><a class="main_links" href="pet.php">Retornar</a></h2>

</body>
</html>