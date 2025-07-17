<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <form method="POST" action="">
        <label for="limite">Digite um número para gerar a sequência de Fibonacci até ele:</label>
        <input type="number" id="limite" name="limite" required>
        <button type="submit" name="gerar">Gerar Sequência</button>
    </form>

    <?php
    if (isset($_POST['gerar'])) {
        $limite = (int) $_POST['limite'];

        $fibonacci = [0, 1];

        while (true) {
            $proximo = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
            if ($proximo > $limite) {
                break;
            }
            $fibonacci[] = $proximo;
        }

        echo "<hr>";
        echo "<p><strong>Sequência de Fibonacci até $limite:</strong></p>";
        echo implode(', ', $fibonacci);
    }
    ?>
</body>
</html>