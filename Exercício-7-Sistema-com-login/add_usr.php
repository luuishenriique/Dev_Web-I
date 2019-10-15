<?php 
include 'config.php';
// adicionando variáveis que receberam os dados do formulário
$cpfuser = $_POST['cpfNuser'] ?? '';
$username = $_POST['loginNuser'] ?? '';
$password = $_POST['senhaNuser'] ?? '';
$vpassword = $_POST['confsenhaNuser'] ?? '';
$admpassword = $_POST['admSenha'] ?? '';

if ($cpfuser == false || $username == false || $password == false || $vpassword == false || $admpassword == false) {
	redirect("cad_usr.php?msg=Preencha todos os campos necessários!");
} else if ($password != $vpassword) {
	redirect("cad_usr.php?msg=As senhas precisam ser iguais!");
} else if ($admpassword != 'adm123') {
	redirect("cad_usr.php?msg=Senha do administrador incorreta, autenticação necessária!");
}else{
	$data = join("," ,[$cpfuser,$username,$password]) . "\n";

	$handle = fopen(USR_FILE, 'a');
	fwrite($handle, $data);
	fclose($handle);

	redirect("cad_usr.php?msg=Novo usuário cadastrado!");	
}

?>