<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIÂNGULO</title>
</head>
<body>
    <h1>Teste da classe TRIÂNGULO</h1>

    <?php
    include "codigoD.php";

    $triangulo1 = new Triangulo ();

    $triangulo1->setBase(20);
    
    $triangulo1->setAltura(30);

    echo '<p> A área do triângulo é: '. $triangulo1->calculaArea().'</p>';

    ?>

<br> <a href="../../index.html">Voltar para o LINK</a>
</body>
</html>

