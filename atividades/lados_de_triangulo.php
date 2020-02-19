<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>

		<?php
			$lado1 = 3;
			$lado2 = 3;
			$lado3 = 3;

			function triangulolados($lado1,$lado2,$lado3){

				if ($lado1 == $lado2 and $lado2 == $lado3) {
					echo 'O triangulo e Equilátero.';

				}elseif ($lado1 == $lado2 and $lado2 != $lado3){
					echo 'O triangulo e Isóceles.';

				} elseif ( $lado1 != $lado2 and $lado2 == $lado3 ){
					echo 'O triangulo e Isóceles.';

				}elseif ($lado1 == $lado3 and $lado3 != $lado2) {
					echo 'O triangulo e Isóceles.';

				}elseif ($lado3 != $lado1 and $lado3 == $lado2){
					echo 'O triangulo e Isóceles.';

				}else {
					echo 'O triangulo Escaleno.';
				}
				return;
			}

		?>

		<h1>Resultado.</h1>

		<p>Os lados do triangulo são:<?= '<br> lado1 = '. $lado1 , '<br> lado2 =  ' . $lado2 , '<br> lado3 = '. $lado3 ?>
			<br>
			<br>

			<?php
				echo triangulolados($lado1,$lado2,$lado3);

			?>
			<hr>


		</p>

	</body>
</html>