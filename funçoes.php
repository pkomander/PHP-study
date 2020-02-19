<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title></title>

	</head>
	<body>

		<?php

			//void (sem o retorno)
			function exibirBoasVindas(){
				echo 'Bem-vindo ao curso de PHP! <br>';
			}

			exibirBoasVindas();

			//return (com retorno)
			function calcularAreaTerreno($largura,$comprimento){
				$area = ($largura * $comprimento);
				return $area;
			}

			$resultado = calcularAreaTerreno(30, 50);
			echo $resultado;

			//ou
			//echo calcularAreaTerreno(30, 50);


		?>

	</body>
</html>