<?php 
require 'init.php';
session_start();

$nameitem = $_POST['nameitem'];
$localitem = $_POST['localitem'];

$PDO = dbConnect();

$sql = "UPDATE Itens SET nameItem = :nameitem, localItem = :localitem WHERE idItem = :id"; 

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':nameitem', $nameitem);
$stmt->bindParam(':localitem', $localitem);
$stmt->bindParam(':id', $_SESSION['id']); 

$stmt->execute();

redirect('my_itens.php?msg=Registro alterado com sucesso!');
?>