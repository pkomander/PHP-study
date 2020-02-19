<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Curso PHP</title>

	</head>
	<body>

		<?php

			//false (true/false) - tipo variavel boolean
			// null e empty - valores especiais
			// null e exclusivamente null enquanto empty pode ser vazio ou null (empty) se aplica aos dois casos.


			$funcionario1 = null;
			$funcionario2 = '';
			$funcionario3 = false;

			//valores null

			if (is_null($funcionario1)) {
				echo 'Sim a variavel e null';
			} else {
				echo 'Não a variavel nao e null';
			}

			echo '<br>';

			if (is_null($funcionario2)) {
				echo 'Sim a variavel e null';
			} else {
				echo 'Não a variavel nao e null';
			}

			echo '<br>';

			echo '<hr>';

			//valores vazios

			if (empty ($funcionario1)) {
				echo 'Sim a variavel esta vazia';
			} else {
				echo 'Não a variavel não esta vazia';
			}

			echo '<br>';

			if (empty($funcionario2)) {
				echo 'Sim a variavel esta vazia';
			} else {
				echo 'Não a variavel não esta vazia';
			}

			echo '<br>';

			echo '<hr>';

			//false nao e considerado null mas e considerado vazio.

			if (is_null($funcionario3)) {
				echo 'Sim a variavel e null';
			} else {
				echo 'Não a variavel nao e null';
			}

			echo '<br>';

			if (empty($funcionario3)) {
				echo 'Sim a variavel esta vazia';
			} else {
				echo 'Não a variavel esta vazia';
			}


		?>

	</body>
</html>