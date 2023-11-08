<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Retângulo</title>
</head>
<body>
    <h1>Calculadora de Área de Retângulo</h1>
    <form action="calcular_area.php" method="post">
    Largura: <input type="text" name="largura" required><br>
    Altura: <input type="text" name="altura" required><br>
        <input type="submit" value="Calcular Área">
    </form>
    <div id="resultado">
        <?php
        if (isset($_POST['largura']) && isset($_POST['altura'])) {
        }
        ?>
    </div>

    <br> <a href="../index.html">Voltar para o LINK</a>
</body>
</html>
