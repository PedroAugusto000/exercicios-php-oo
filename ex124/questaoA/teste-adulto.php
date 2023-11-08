<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testa classe Adulto</h1>

    <?php
    include "codigoA.php";

    $adulto1 = new Adulto();
    $adulto1->setPeso(75);
    echo '<p>'. $adulto1->getPeso().'</p>';      
    $adulto1->engordar(5);
    echo '<p>'. $adulto1->getPeso().'</p>';
    $adulto1->emagrecer(2);
    echo '<p>'. $adulto1->getPeso().'</p>';
    ?>    

<br> <a href="../../index.html">Voltar para o LINK</a>
</body>
</html>