<?php 
require 'config.php';
session_start();

$linhas = file(USR_FILE);
// $dados = [];

$login = $_POST['login'] ?? false;
$senha = $_POST['senha'] ?? false;

if ($login === false || $senha === false) {
    redirect('login.php?msg=Preencha todos os campos de autenticação!');
} 

foreach ($linhas as $i => $linha) {
    $dados = explode(',', trim($linha));
    // var_dump($dados[0]); 
    if ($login == $dados[1] && $senha == $dados[2]) {
        $_SESSION['autorizado'] = true; /*break??*/ /*isso aqui pode estar errado!*/
        $_SESSION['id'] = $i;
        $_SESSION['login'] = $dados[1];
        $_SESSION['cpf'] = $dados[0];

        redirect('index.php');
    }
}
redirect('login.php?msg=Usuário ou senha incorretos!');
?>
