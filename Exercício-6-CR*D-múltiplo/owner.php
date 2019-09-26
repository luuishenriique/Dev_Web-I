<?php 
	require 'header.php';
	require 'config.php';

	$data = file('OWN_FILE');
 ?>

 <?php if(!empty($_GET['msg'])): ?>
 	<div>
 		<h4><?php echo $_GET['msg'] ?></h4>
 	</div>
 <?php endif ?>

 <table class="own_table">
 	<thead>
 		<tr>
 			<th>Dono</th>
 			<th>Apagar dados</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php foreach ($data as $id => $dat): ?>
 			<tr>
 				<td><?= $dat ?></td>
 				<td><a href="del_own.php?id=<?= $id ?>">&times;</a></td>
 			</tr>
 		<?php endforeach ?>
 	</tbody>
 </table>

 <form class="form_own" action="add_own.php" method="POST">
 	<fieldset class="main_form">
 		<legend>Inserir novo dono</legend>
 		<input  class="inp" type="text" name="name" placeholder="Nome do dono">
 		<input class="btn" type="submit" value="Registrar">
 	</fieldset>
 </form>
 
 </body>
 </html>