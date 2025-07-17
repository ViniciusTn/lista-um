<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soma entre dois numeros</title>
</head>
<body>
    <form method="POST" action="">
        <label for="num1">Digite o primeiro número:</label>
        <input type="number" id="num1" name="num1" required>

        <label for="num2">Digite o segundo número:</label>
        <input type="number" id="num2" name="num2" required>

        <button type="submit" name="calcular">Calcular Soma</button>
    </form>

    <?php 
    if (isset($_POST['calcular'])) {
        $num1 = (int) $_POST['num1'];
        $num2 = (int) $_POST['num2'];

  
        $menor = min($num1, $num2);
        $maior = max($num1, $num2);

        $soma = 0;

    
        for ($i = $menor + 1; $i < $maior; $i++) {
            $soma += $i;
        }

        echo "<hr>";
        echo "<p><strong>Soma dos números entre $menor e $maior:</strong> $soma</p>";
    }
    ?> 
</body>
</html>