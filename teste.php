<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tabela</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
   $dados = file('text.csv');
   foreach($dados as $dado){
	$arquivo[] = explode(',', $dado);
}
?>
		 <h1>Tabela com dados de um arquivo</h1>
	<table>
		<thead>
		  <tr>
			  <th>Nome</th>
			  <th>Bairro</th>
			  <th>Cidade</th>
			</tr>
    </thead>
    <tbody>
	<?php for($i = 0; $i < sizeof($arquivo); $i++): ?>
	<tr>
	<?php for($j = 0; $j < sizeof($arquivo[$i]); $j++): ?>
		<td><?= $arquivo[$i][$j] ?></td>
	<?php endfor ?>
	</tr>
    <?php endfor ?>
    </tbody>
</table>
</body>
</html>
