<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabela com CSV</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		$info = file('dados.csv');
		foreach ($info as $data) {
				$dados[] = explode(',', $data);
			}	
	 ?>
	 <h1>Tabela com informações</h1>
	 <div style="overflow-x: auto;">	
	 <table>
	 	<tr>
	 		<th>Nome</th>
	 		<th>Idade</th>
	 		<th>CPF</th>
	 	</tr>
	 	<?php for ($i=0; $i <sizeof($dados) ; $i++): ?>
	 		<tr>
	 			<?php for ($j=0; $j <sizeof($dados[$i]) ; $j++): ?>
	 				<td><?= $dados[$i][$j] ?></td>
				<?php endfor ?>
	 		</tr>
 		<?php endfor ?>
	 </table>
	 </div>
	 <p>Tabela criada através de um arquivo CSV que altera seus dados sem precisar modificar o código</p>
</body>
</html>