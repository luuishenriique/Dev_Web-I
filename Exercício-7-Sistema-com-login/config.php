<?php 
$title = '';

define('USR_FILE', 'src/usuarios.csv');

function redirect($url){
	header('location: ' . $url);
	exit();
}
?>
