<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Exercicio para fixação do conteudo</title>

	</head>
	<body>
		<?php
			$idade = 16;
			$peso = 55.8;

			if ($idade >= 16 && $idade <= 69 && $peso >= 50){
				echo 'Atende os requisitos';
			}else {
				echo 'Não tende aos requisitos';
			}
		?>

	</body>
</html>