<?php 
require 'config.php';

$book = $_POST['book'] ?? false;
$autor = $_POST['autor'] ?? false;
$date = $_POST['date'] ?? false;

if ($book == false || $autor == false || $date == false) {
	redirect("library.php?msg=Preencha todos os campos!");
}

$data = $book . "," . $autor . "," . $date . "\n";

$handle = fopen(BKS_FILE, 'a');
fwrite($handle, $data);
fclose($handle);

redirect("library.php?msg=Registro inserido com sucesso! :D");
?>