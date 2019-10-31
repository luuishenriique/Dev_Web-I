<?php 
require 'config.php';
session_start();

$session_id = $_SESSION['id'];
$book = $_POST['select_book'] ?? "";

if ($book == "" ) {
	redirect("my_books.php?msg=Selecione um livro para adicionar!");
}

$data = $session_id . "," . $book . "\n";

$handle = fopen(MBK_FILE, 'a');
fwrite($handle, $data);
fclose($handle);

redirect("my_books.php?msg=Livro adicionado com sucesso a sua biblioteca!");
?>