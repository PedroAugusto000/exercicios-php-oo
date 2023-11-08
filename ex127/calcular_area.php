<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Calcular área</title>
</head>
<body>
    <h1>Retângulo</h1>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['largura']) && isset($_POST['altura'])) {
        $largura = floatval($_POST['largura']);
        $altura = floatval($_POST['altura']);

        require_once 'Retangulo.php';

        $retangulo = new Retangulo();
        $retangulo->setLargura($largura);
        $retangulo->setAltura($altura);

        $area = $retangulo->calcularArea();
        echo "<p>A área do retângulo é: $area </p>";
    }
}
?>
<br> <a href="./form.php">Voltar para o FORMULÁRIO</a>
<br> <a href="../index.html">Voltar para o LINK</a>
</html>
