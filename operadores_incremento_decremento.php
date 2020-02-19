<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title></title>

	</head>
	<body>

		<h3>Pós-Incremento</h3>

		<?php
			$a = 7;

			echo "O valor contido em a é $a <br>";
			echo 'O valor contido em a apos o incremento é ' . $a++. '<br>';
			echo "O valor atualizado é $a <br>";
			
		?>

		<h3>Pré-Incremento</h3>

		<?php
			$a = 7;

			echo "O valor contido em a é $a <br>";
			echo 'O valor contido em a pré-incremento é ' . ++$a. '<br>';
			echo "O valor atualizado é $a <br>";
			
		?>

		<h3>Pós-decremento</h3>

		<?php
			$a = 7;

			echo "O valor contido em a é $a <br>";
			echo 'O valor contido em a apos o decremento é ' . $a-- . '<br>';
			echo "O valor atualizado é $a <br>";
			
		?>

		<h3>Pré-decremento</h3>

		<?php
			$a = 7;

			echo "O valor contido em a é $a <br>";
			echo 'O valor contido em a pré-incremento é ' . --$a . '<br>';
			echo "O valor atualizado é $a <br>";
			
		?>

	</body>
</html>