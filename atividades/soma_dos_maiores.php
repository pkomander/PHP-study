<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>

		<?php

			$num1 = 8;
			$num2 = 7;
			$num3 = 6;

			function somadosmaiores( $num1, $num2, $num3){

				if ($num1 > $num2 and $num2 > $num3){

					echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);

				}elseif ($num1 > $num3 and $num3 > $num2) {

					echo "A soma entre $num1 e $num3 é " . ($num1 + $num3);

				}elseif ($num2 > $num1 and $num1 > $num3) {

					echo "A soma entre $num2 e $num1 é " . ($num2 + $num1);

				}elseif ($num2 > $num3 and $num3 > $num1){

					echo "A soma entre $num2 e $num3 é " . ($num2 + $num3);

				}elseif ($num3 > $num1 and $num1 > $num2) {
					
					echo "A soma entre $num3 e $num1 é " . ($num3 + $num1);

				}elseif ($num3 > $num2 and $num2 > $num3) {
					
					echo "A soma entre $num3 e $num2 é " . ($num3 + $num2);

				}else{

					echo "Numeros repitidos $num1 $num2 $num3";

				}
				return;
			}

		?>

		<h1>Resultado</h1>

		<h3>Não permitido utilizar numeros repitidos na operação.</h3>

		<p>A soma dos maiores numeros são: <?php echo somadosmaiores($num1, $num2, $num3) ?> </p>

		<hr>

	</body>
</html>