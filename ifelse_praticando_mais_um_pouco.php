<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>

	</head>

	<body>

		<?php

			//
			$usuario_possui_cartão_loja = true;
			$valor_compra = 250;
			$valor_frete = 50;
			$recebeu_desconto_frete = false;

			//OPERADOR TERNARIO ENCADEADO SERVE PARA SUBSTITUIR O BLOCO IF EM UMA FUNÇÃO POREM NÃO E RECOMENDADO UTILIZALO DESTA FORMA.
			/*$valor_frete_aux = $usuario_possui_cartão_loja == true and $valor_compra >= 250 ? 0 : ($usuario_possui_cartão_loja == true and $valor_compra >= 200 ? 10 : ($usuario_possui_cartão_loja == true and $valor_compra >= 100 ? 25 : $valor_frete));

			$recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

			$valor_frete = $valor_frete_aux;
			*/

			
			if ($usuario_possui_cartão_loja == true and $valor_compra >= 250){
				echo 'Sem taxa de frete.';
				$valor_frete = 0;
				$recebeu_desconto_frete = true;

			//encadeado
			} else if ($usuario_possui_cartão_loja == true and $valor_compra >= 200){
				$valor_frete = 10;
				$recebeu_desconto_frete = true;
			} else if ($usuario_possui_cartão_loja == true and $valor_compra >= 100){
				$valor_frete = 25;
				$recebeu_desconto_frete = true;
			} else {
				$recebeu_desconto_frete = false;
			}
			

		?>

		<h1>Detalhes do pedido</h1>

		<p>Possui o cartão da loja? <?= $usuario_possui_cartão_loja ? 'SIM' : 'NÃO'; ?>
			<?php
				// operador ternario <condição> ? true : false

				/*
				if ($usuario_possui_cartão_loja == true){
					echo 'SIM';
				}else {
					echo 'NÃO';
				}
				*/
			?>
		</p>

		<P>Valor da compra: <?= $valor_compra ?></P>

		<p>Recebeu o desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO' ?>

			<?php
				/*$teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
				echo $teste;

				if ($recebeu_desconto_frete == true){
					echo 'SIM';
				}else{
					echo 'NÃO';
				}
				*/
			?>
		</p>

		<p>Valor do frete: <?= $valor_frete ?></p>

	</body>
</html>