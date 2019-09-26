<?php 
	define('OWN_FILE', 'src/owner.csv');
	define('PET_FILE', 'src/pet.csv');

	function redirect($url){
		header('Location: ' . $url);
		exit();
	}

	function colect($vl){
		$petsdata = explode(',', $vl);

		return[
			'ID' => $petsdata[0],
			'Nome do pet' => $petsdata[1],
			'Data de entrada' => $petsdata[2],
			'Dono do pet' => $petsdata[3],
		];
	}
 ?>