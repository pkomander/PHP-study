<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>

		<?php

			//verificar se o parametro e ou não um array
			/*
			$array = array('notebok','teclado');
			$retorno = is_array($array);
			
			if ($retorno) {
				echo 'Sim e um array';
			} else {
				echo 'Não e um array';
			}
			*/

			//retorna todas as chaves de um array
			/*$array = [1 => 'a', 7 => 'b', 18 => 'c'];
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			$chaves_array = array_keys($array);
			echo '<pre>';
				print_r($chaves_array);
			echo '</pre>';*/

			//ordenar um array e reajusta seus indices

			/*$array = array('notebok','teclado','mouse','cabo hdmi','gabinete','fonte atx');
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			sort($array); //retorna true ou false
			echo '<pre>';
				print_r($array);
			echo '</pre>';*/

			//ordena um array preservando os indices

			/*$array = array('notebok','teclado','mouse','cabo hdmi','gabinete','fonte atx');
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			asort($array); //retorna true ou false
			echo '<pre>';
				print_r($array);
			echo '</pre>';*/

			//conta a quantidade de elementos dentro de um array

			/*$array = array('notebok','teclado','mouse','cabo hdmi','gabinete','fonte atx');
			echo '<pre>';
				print_r($array);
				echo count($array);
			echo '</pre>';*/

			//funde um ou mais arrays

			/*$array1 = ['osx','windows'];
			$array2 = array('linux');
			$array3 = ['solaris'];

			$novo_array = array_merge($array1,$array2,$array3);
			echo '<pre>';
				print_r($novo_array);
			echo '</pre>';*/

			//divide uma string baseada em um delimitador

			/*$string = '11/02/2020';
			$array_retorno = explode('/',$string);
			echo '<pre>';
				echo $string;
				print_r($array_retorno);
				echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
			echo '</pre>';*/

			//junta elementos de um array em uma string

			$array = ['a','b','x','y']; //a,b,x,y
			$string_retorno =implode(',', $array);
			echo $string_retorno;


		?>

	</body>
</html>