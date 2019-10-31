<?php 
require 'config.php';

$id = $_GET['id'];
$data = file(MBK_FILE);
unset($data[$id]);

file_put_contents(MBK_FILE, $data);

redirect("my_book.php?msg=Livro removido da sua biblioteca!");
?>