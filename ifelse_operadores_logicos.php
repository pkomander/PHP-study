<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title></title>

	</head>
	<body>

		<?php

			//operadores condicionais/comparação
			//== igual
			//===  identico
			///!= ou <> diferente
			//!== não identico
			//< menor
			//> maior
			//<= menor igual
			//>= maior igual

			//E: && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiras.
			//OU: || ou OR -> retorna verdadeiro se pelo menos uma das expressões forem verdadeiras.
			//XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeiro e a outra for falsa ou vise-versa.
			//! -> inverte o resultado retornado pela expressão.

			//() estabelecer precedência.

			//(v e v) = v ou f = v

			if ((22 == 22 && 3 == 3) || 5 != 5){
				echo 'verdadeiro';
			}else {
				echo 'falso';
			}

		?>

	</body>
</html>