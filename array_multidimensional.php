<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso php</title>
	</head>
	<body>

		<?php

			//tambem e possivel declarar utilizando a tag array ou [].

			$lista_coisas = array();

			$lista_coisas['frutas'] = array ('1' => 'banana','2' => 'maca','3' => 'morango','4' => 'uva');
			$lista_coisas['pessoas'] = ['1' => 'joão','2' => 'josé','3' => 'maria'];

			echo '<pre>';
				print_r($lista_coisas);
			echo '</pre>';

			echo '<hr>';
			//para recuperar um valor no arrey.
			echo $lista_coisas['frutas'][3];
			echo '<br>';
			echo $lista_coisas['pessoas'][2];

		?>

	</body>
</html>