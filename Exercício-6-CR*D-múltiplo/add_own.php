<?php 
	require 'config.php';

	$name = $_POST['name'] ?? false;

	if ($name == false) {
		redirect("index.php");
	}

	$data = $name . "\n";

	$handle = fopen(OWN_FILE, 'a');
	fwrite($handle, $data);
	fclose($handle);

	redirect("owner.php?msg=Registro inserido com sucesso! :D");
 ?>