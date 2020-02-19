<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			/*
			//recuperação da data atual / corrente

			echo date('d/m/Y H:i');
			//dia/mes/ano horas:minutos

			echo '<br>';

			//recuperar o timezone default da aplicação -> horario da aplicação e local da mesma.
			echo date_default_timezone_get();

			echo '<br>';

			//atualizar o timezone default da aplicação -> atualizar a aplicação da aplicação.
			echo date_default_timezone_set('America/Sao_paulo');
			echo '<br>';
			echo date('d/m/Y H:i');
			*/

			$data_inicial = '2020/02/04';
			$data_final = '2020/05/15';

			//timestamp
			//01/01/1970 -- 2020/02/04 (js->milissegundos / php->segundos)

			//transforma datas textuais em segundos.

			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);

			echo '<br>';

			echo $data_inicial . ' - ' . $time_inicial;

			echo '<br>';

			echo $data_final . ' - ' . $time_final;

			$diferenca_times = abs($time_final - $time_inicial); // abs -> valor absoluto.

			echo '<br>';
			echo 'A diferença de segundo entre a data inicial e a data final e ' . $diferenca_times;
			$segundos_existem_dia = 24 * 60 * 60;

			echo '<br>';

			echo 'Um dia possui ' . $segundos_existem_dia . 'segundos';

			$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

			echo '<br>';
			echo 'A diferença de dias é: ' . $diferenca_de_dias_entre_as_datas;



		?>


	</body>
</html>