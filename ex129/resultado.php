<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Sequência</title>
</head>
<body>
    <h2>Resultado da Sequência:</h2>

</body>
</html>

<?php
require('Sequencia.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valorInicial = $_POST['valorInicial'];
    $valorFinal = $_POST['valorFinal'];
    $opcao = $_POST['opcao'];

    $sequenciaObj = new Sequencia();
    $sequenciaObj->setInicio($valorInicial);
    $sequenciaObj->setFim($valorFinal);

    if ($opcao == 'todos') {
        $resultado = $sequenciaObj->exibirTodosNumeros();
    } elseif ($opcao == 'pares') {
        $resultado = $sequenciaObj->exibirPares();
    } elseif ($opcao == 'impares') {
        $resultado = $sequenciaObj->exibirImpares();
    }
}
?>

<html>
<pre>
        <?php
        if (isset($resultado)) {
            print_r($resultado);
        }
        ?>
    </pre>
    <br> <a href="./form.php">Voltar para o FORMULÁRIO</a>
    <br> <a href="../index.html">Voltar para o LINK</a>
</html>

