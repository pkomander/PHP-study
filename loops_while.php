<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>

		<?php

			$num = 1;
			//operadores de comparação / logicos
			echo '---inicio do loop--- <br>';
			while ( $num < 10 ) {

				$num += 1;

				if ($num == 2 || $num == 6) {
					continue;
				}
				

				echo "$num <br>";
				
				//$num += 5; // critero de parada

				/*if ($num > 100){
					break;
				}*/
			}
			echo '---fim do loop---';
		?>

	</body>
</html>