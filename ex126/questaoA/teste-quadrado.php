<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUADRADO</title>
</head>
<body>
    <h1> Teste classe QUADRADO </h1>

    <?php
    include "codigoA.php";

    $quadrado1 = new Quadrado();

    $quadrado1->setLado(5);
    echo '<p> A área do quadrado é: '. $quadrado1->calculaArea().'</p>';   
    ?>

<br> <a href="../../index.html">Voltar para o LINK</a>
</body>
</html>