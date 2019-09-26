<?php 
	require 'config.php';

	$id = $_GET['id'];

	$data = file(PET_FILE);
	unset($data[$id]);

	file_put_contents(PET_FILE, $data)

	redirect("pet.php?msg=Registro apagado com sucesso! :D");
 ?>