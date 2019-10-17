<?php 
require 'config.php';

$id = $_GET['id'];
$data = file(BKS_FILE);
unset($data[$id]);

file_put_contents(BKS_FILE, $data);

redirect("library.php?msg=Livro apagado com sucesso!");
?>