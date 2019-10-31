<?php 
require 'init.php';
session_start();

$PDO = dbConnect();

$sql = "DELETE FROM Itens WHERE idItem = :id AND idUser_Item = :idUI";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':id', $_SESSION['id']);
$stmt->bindParam(':idUI', $_SESSION['user_id']);

$stmt->execute();

redirect('my_itens.php?msg=Registro apagado com sucesso!');
?>