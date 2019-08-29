<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar dados</title>
</head>
<style>
	table{
		text-align: center;
		margin: 0 auto;
		border-collapse: collapse;
	}

	th{
		background-color: brown;
		color: white;
		border-color: 1px black dotted;
		border-bottom: 1px solid #ddd;
		border-top: 1px solid #ddd;
	}

	td,th{
		padding: 15px;
	}

	tr:nth-child(even) {background-color: #f2f2f2;}
	tr:hover {background-color: gray;}
</style>
<body>
	<?php 
	$_nome = $_POST['nome'];
	$_idade = $_POST['idade'];
	$_cpf = $_POST['cpf'];
	
	$fp = fopen('dados.csv', 'a');
	fwrite($fp, "$_nome, $_idade, $_cpf\n");
	fclose($fp);

	$linhas = file('dados.csv');
	$dados = [];
	foreach ($linhas as $linha) { 
	 	$dados[] = str_getcsv($linha);
	}
	?>

	<h1 style="text-align: center; color: brown">Dados coletados</h1>
	<div style="overflow-x: auto;">	
	<table>
		<tr>
			<th>Nome</th>
			<th>Idade</th>
			<th>Cpf</th>
		</tr>
		<?php foreach ($dados as $dado): ?>
			<?php 
				list($nome, $idade, $cpf) = $dado;
			 ?>
			 <tr>
			 	<td><?= $nome ?></td>
			 	<td><?= $idade ?></td>
			 	<td><?= $cpf ?></td>
			 </tr>
		<?php endforeach ?>
	</table>
	</div>
	</ul>
</body>
</html>