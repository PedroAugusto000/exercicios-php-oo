<!DOCTYPE html>
<html>
<head>
    <title>Sequência de Números</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <label for="valorInicial">Selecione o valor inicial:</label>
        <select name="valorInicial">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select> <br>
        <label for="valorFinal">Selecione o valor final:</label>
        <select name="valorFinal">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select> <br>
        <label for="opcao">Escolha uma opção:</label>
        <select name="opcao">
            <option value="todos">Todos</option>
            <option value="pares">Apenas os pares</option>
            <option value="impares">Apenas os ímpares</option>
        </select> <br> <br>
        <button type="submit">Mostrar a sequência</button>
    </form>

    <br> <a href="../index.html">Voltar para o LINK</a>
</body>
</html>