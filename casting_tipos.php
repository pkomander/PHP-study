<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Curso PHP</title>

	</head>
	<body>

		<?php

			//gettype() => retorna o tipo da variavel
			$valor = '22.12';
			//$valor2 = (float)$valor; //float, double, real

			//$valor2 = (string)$valor; //float, double, real

			$valor2 = (boolean) $valor;

			echo $valor. ' ' .gettype($valor);
			echo '<br>';
			echo $valor. ' ' .gettype($valor2);


		?>

	</body>
</html>