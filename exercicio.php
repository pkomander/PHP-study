<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exercicio</title>
	</head>

	<body>

		
		<?php
			$nome = 'Paulo';
			$sobre_nome = 'Ricardo';
			$idade = 22;
			$estudante = true;
			$grau_instrucao = 'Superior';

		?>

		<h1>Ficha de inscrição</h1>

		<p>Nome: <?= "$nome $sobre_nome" ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Estudante:
			<?php
				if ($estudante == true) {
					echo 'Sim';

				} else {
					echo 'Não';
				}
			?>
		</p>

		<p>Grau de instrução: <?= $grau_instrucao ?></p>
	
	<br>
	<br>

	<h1>Outro codigo</h1>

	<br>
	<br>
		

		
		<?php
			$nota1 = 6;
			$nota2 = 7;
			$final = 8;

		?>

		<h1>Media do Aluno</h1>

		<h2><u>Notas:</u></h2>

		<p>Nota 1: <?= $nota1 ?></p>
		<p>Nota 2: <?= $nota2 ?></p>

		<p>Media: 
			<?php
				 echo $nota1 + $nota2;
			?>
		</p>

		<p>Resultado: 
			<?php
				if ($nota1 + $nota2 >= 7){
					echo 'APROVADO';
				}else {
					echo 'PROVA FINAL';
				}
			?>

		</p>

		<P>Final: 
			<?php
				if ($final >= 7){
					echo 'APROVADO';
				} else{
					echo 'REPROVADO';
				}
			?>
		</P>
		


	</body>
</html>