<html>
<head>

</head>
<body>

    <?php

        $nome = 'paulo';
        $nota1 = 8;
        $nota2 = 10;
        $soma= $nota1 + $nota2;
        $media = $soma / 2;

    ?>

    <h1>Resultado da Prova</h1>
    <p>Nome: <?= $nome ?> </p>
    <p>primeira nota: <?= $nota1 ?> </P>
    <p>Segunda Nota: <?= $nota2 ?> </p>
    <p>Media: <?= $media ?> </p>
    <p>Resultado: 
    
    <?php

        if($media >= 6){
            echo "Você passou com $media .";
        } else{
            echo "Você perdeu com media $media.";
        }
    ?>
    
    </p>

        

    

</body>

</html>