<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title></title>

	</head>

	<body>
		<?php

			//String
			$nome = 'Paulo Ricardo';

			// Int
			$idade = 29;

			// Float
			$peso =  80.5;

			//Boolean
			$fumante_sn = false; // (true = 1) ou (false = vazio)

			//... logica ...///
			$idade = 22;

		?>

		<h1>Ficha cadastral</h1>
		<br>
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_sn ?></p>

	</body>
</html>