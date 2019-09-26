<?php 
	require 'config.php';

	$id = $_GET['id'];
	$data = file(OWN_FILE);
	unset($data[$id]);

	file_put_contents(OWN_FILE, $data);

	redirect("owner.php?msg=Registro apagado com sucesso! :D");
 ?>