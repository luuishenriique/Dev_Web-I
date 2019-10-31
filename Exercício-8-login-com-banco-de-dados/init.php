<?php 
// constantes do banco de dados

if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
if (!defined('DB_USER')) define('DB_USER', 'luis');
if (!defined('DB_PASS')) define('DB_PASS', 'Louis 2240');
if (!defined('DB_NAME')) define('DB_NAME', 'dbExrc07');
if (!defined('DB_PORT')) define('DB_PORT', '3306');
$msg = $_GET['msg'] ?? "";

// habilitando exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);

// requisitando o uso do arquivo de funções
require_once 'functions.php'; 

?>