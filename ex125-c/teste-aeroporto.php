<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEROPORTO</title>
</head>
<body>
    <h1>Teste classe Aeroporto</h1>

    <?php
    include "codigo.php";

    $aeroporto1 = new Aeroporto();
    $aeroporto1 -> setNome("Aeroporto Internacional de Brasília Presidente Juscelino Kubitschek");
    echo '<p>'. $aeroporto1->getNome().'</p>';   

    $aeroporto1 -> setCidade("Brasília");
    echo '<p>'. $aeroporto1->getCidade().'</p>';  
    ?>

<br> <a href="../index.html">Voltar para o LINK</a>
</body>
</html>