<?php

$linha = $_GET['linha']; /*get para receber o valor da linha*/
$info = file('dados.csv');
unset($info[$linha]);
$str = ""; /*dados vazios que vão limpar a linha*/
foreach ($info as $dados) {
	$str = $str.$dados;
}
$file = fopen("dados.csv", "w");
fwrite($file, $str); /*dados sendo transcitos pela linha vazia*/

header('location:index.php');
?>

