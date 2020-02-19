<!DOCTYPE html>
<html>
	<head><meta charset="utf-8">
		<title>Curso php</title>
	</head>
	<body>
		<?php

			//in_array() -> true ou false para existencia para oque esta sendo procurado.
			//array_search() -> retorna o indice do valor pesquisado, caso ele exista.

			$lista_frutas = ['banana', 'maçã', 'morango','uva'];

			/*echo '<pre>';
				print_r($lista_frutas);
			echo '</pre>';*/

			//como primeiro comando passamos oque queremos procurar e depois informa onde ele se localiza.
			
			$existe = in_array('morango', $lista_frutas);
			//true -> texto = 1
			//false -> texto = vazio

			$existe = array_search('uva',$lista_frutas);
			//null ->(texto = fazio) caso o item nao seja encontrado dentro do array o retorno não necessariamente e falso o valor e null.

			/*
			if ($existe != null) {
				echo 'Sim o valor pesquisado existe no array';
			}else{
				echo 'Não, o valor pesquisado não existe no array';
			}
			*/

			$lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['joão','maria']];

			echo '<pre>';
				print_r($lista_coisas);
			echo '</pre>';

			echo in_array('uva', $lista_coisas['frutas']);
			

		?>

	</body>
</html>