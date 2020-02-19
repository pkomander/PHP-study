<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

	<body>

		<?php

			//string to lower
			//strtolower(str)
			$texto = 'Curso completo de PHP';

			echo $texto . '<br>';
			echo strtolower($texto);

			echo '<hr>';

			//String to uper
			//strtoupper(str)
			echo $texto . '<br>';
			echo strtoupper($texto);

			echo '<hr>';

			//Upper case first
			//ucfirst(str)
			echo $texto . '<br>';
			echo ucfirst($texto);

			echo '<hr>';

			//string lenght
			//strleng
			echo $texto . '<br>';
			echo strlen($texto);

			echo '<hr>';

			//String to uper
			//str_replace(search, replace, subject)
			echo $texto . '<br>';
			echo str_replace('PHP', 'JavaScript', $texto);


			echo '<hr>';

			//
			//substr(string, start)
			//'Curso completo de PHP'
			echo $texto . '<br>';
			echo substr($texto, 0, 14). '...';


		?>


	</body>

</html>