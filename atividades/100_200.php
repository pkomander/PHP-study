<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>

	<?php
		$num1 = 200;

		function entre100e200($num1){

			if ($num1 >= 100 and $num1 <= 200) {
				echo 'esta no intervalo.';

			}else {
				echo 'não esta no intervalo.';
			}
			return;
		}

	?>

	<h1>Resultado.</h1>

	<p>O numero é <?= $num1 ?> e ele <?php echo entre100e200($num1) ?></p>
	<hr>

</body>
</html>