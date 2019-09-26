<?php 
	require 'config.php';

	$id = $_POST['id'] ?? false;
	$petname = $_POST['petname'] ?? false;
	$petdate = $_POST['petdate'] ?? false;
	$owner = $_POST['select_owner'] ?? false;
	$owner_data = trim($owner);

	if ($id == false || $petname == false || $petdate == false || $owner == false) {
		redirect("pet.php?msg=Preencha todos os campos obrigatórios! ;D");
	}

	$data = join("," ,[$id,$petname,$petdate,$owner_data]) . "\n";

	$handle = fopen(PET_FILE, 'a');
	fwrite($handle, $data);
	fclose($handle);

	redirect("pet.php?msg=Registro inserido com sucesso! :D");
 ?>