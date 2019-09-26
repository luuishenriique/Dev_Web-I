<?php 
	require 'header.php';
	require 'config.php';

	$data_own = file(OWN_FILE);
	$data = file(PET_FILE);

	$pet = []; 
	$pets = array_map('colect', $data);

 ?>

<?php if(!empty($_GET['msg'])): ?>
	<div>
		<h4><?php echo $_GET['msg'] ?></h4>
	</div>
<?php endif ?>

<br>

<table class="pet_table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome do pet</th>
			<th>Detalhes</th>
			<th>Apagar dados</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($pets as $id => $data): ?>
			<tr>
				<td><?= $data['ID'] ?></td>
				<td><?= $data['Nome do pet'] ?></td>
				<td><a href="info.php?id=<?= $id ?>">&#133;</a></td>
				<td><a href="del_pet.php?id=<?= $id ?>">&times;</a></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<br>

<form class="form_pet" action="add_pet.php" method="POST">
	<fieldset class="main_form">
		<legend>Inserir pet</legend>
		<input class="inp" type="text" name="id" placeholder="ID">
		<input class="inp" type="text" name="petname" placeholder="Nome do pet">
		<input class="inp" type="text" name="petdate" placeholder="Data de entrada">
		<p style="text-align: center;">Selecione um dono para o pet:</p>
		<select class="slt_own" name="select_owner">
		<?php foreach ($data_own as $data): ?>
			<option value="<?= $data ?>"><?= $data ?></option>
		<?php endforeach ?>
		</select>
		<input class="btn" type="submit" value="Registrar">
		<input class="btn" type="reset" value="Limpar">
	</fieldset>
</form>
	
</body>
</html>