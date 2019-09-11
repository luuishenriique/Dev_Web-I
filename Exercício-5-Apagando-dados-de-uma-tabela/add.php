<?php
	$nome = $_POST['pais']. ',' .  $_POST['capital']. ',' . $_POST['continente']. "\n";
	$dados = fopen('dados.csv', 'a');
	fwrite($dados,$nome);

	echo "Dados registrados com sucesso";
?>

<a href="index.php">Recarregar Página</a>