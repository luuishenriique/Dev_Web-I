<?php 
require 'config.php';
session_start();

unset($_SESSION['autorizado']);

redirect('login.php');
?>