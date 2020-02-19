<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exercicio função</title>
	</head>
	<body>

		<h1>Calculo Imposto de Renda</h1>

		<?php
			//salario		
			$salario = 1903.99;

			//base salarial de calculo do imposto
			$base1 = 1903.98;
			$base2 = 2826.65;
			$base3 = 3751.05;
			$base4 = 4664.68;

			//taxa de imposto com base no salario
			$taxa1 = 7.5;
			$taxa2 = 15;
			$taxa3 = 22.5;
			$taxa4 = 27.5;

			//calculo de imposto
			$imposto1 = ($salario * $taxa1)/100;
			$imposto2 = ($salario * $taxa2)/100;
			$imposto3 = ($salario * $taxa3)/100;
			$imposto4 = ($salario * $taxa4)/100;


			function calculoImpostoDeRenda($salario, $base1, $base2, $base3, $base4, $taxa1, $taxa2, $taxa3, $taxa4){
				if ($salario <= $base1){
					echo 'Você esta isento do pagamento.';

				}elseif ($salario > $base1 and $salario <= $base2) {
					echo 'Sua taxa e de R$' . ($salario * $taxa1)/100;

				}elseif ($salario > $base2 and $salario <= $base3) {
					echo 'Sua taxa e de R$' . ($salario * $taxa2)/100;

				}elseif ($salario > $base3 and $salario <= $base4) {
					echo 'Sua taxa e de R$'. ($salario * $taxa3)/100;

				}elseif ($salario > $base4) {
					echo 'Sua taxa e de R$'. ($salario * $taxa4)/100;
				}
				return;

				
			}

			//$resultado = calculoImpostoDeRenda($salario, $base1, $base2, $base3, $base4);

		?>

		<h3>Resultado</h3>
		<p>O seu salario e de R$ <?= $salario ?> e você devera pagar para o Iposto de renda:
			<?php
				echo calculoImpostoDeRenda($salario, $base1, $base2, $base3, $base4, $taxa1, $taxa2, $taxa3, $taxa4);
				//$resultado = calculoImpostoDeRenda($salario, $base1, $base2, $base3, $base4);
				//echo $resultado;
			?>
				
		</p>

		<h3>Base salarial e taxas</h3>
		<p>
			<?php

				echo "Base salarial $base1 | taxa Isento<br>";
				echo "Base salarial $base1 até $base2 | taxa $taxa1 | imposto R$ $imposto1<br>";
				echo "Base salarial $base2 até $base3 | taxa $taxa2 | imposto R$ $imposto2<br>";
				echo "Base salarial $base3 até $base4 | taxa $taxa3 | imposto R$ $imposto3<br>";
				echo "Base salarial $base4 | taxa $taxa4 | imposto R$ $imposto4";

			?>
		</p>


	</body>
</html>