<?php 
$title = '';

define('USR_FILE', 'src/users.csv');
define('BKS_FILE', 'src/books.csv');
define('MBK_FILE', 'src/my_books.csv');

function redirect($url){
	header('location: ' . $url);
	exit();
}
?>
