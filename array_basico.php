<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso php</title>
	</head>
	<body>

		<?php

			//sequenciais (numericos)
			//pode declarar um array digitando a tag na variavel ou colocando [] no inicio da variavel.

			//$lista_frutas = array ('banana','macã','morango','uva','abacate');
			/*
			$lista_frutas = ['banana','macã','morango','uva','abacate'];
			$lista_frutas[] = 'abacaxi';

				//var_dump e print_r servem para fazer testes (debug) dos arrays.

				//tag pre serve para deixar o conteudo do array formatado utilizado para testes.

				/*
				echo '<pre>';
					var_dump($lista_frutas);
				echo '</pre>';
				echo '<hr>';
				echo '<pre>';
					print_r($lista_frutas);
				echo '</pre>';
				*/

				//para chamar um item da variavel chama-se a variavel do array e entre colchetes digita-se a posição o item na lista.
				/*echo $lista_frutas [2];*/





				//associativos
				//tambem e possivel utilizar [] para declaração de array.
				
				$lista_frutas = array ('a' => 'banana','b' => 'macã','c' => 'morango','d' => 'uva','e' => 'abacate');

				$lista_frutas['w'] = 'abacaxi';

				echo '<pre>';
					var_dump($lista_frutas);
				echo '</pre>';


				echo $lista_frutas['w'];


		?>

	</body>
</html>