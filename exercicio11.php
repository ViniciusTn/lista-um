<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST" action="">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if (isset($_POST['verificar'])) {
        $palavra = $_POST['palavra'];

        
        $normalizada = strtolower(str_replace(' ', '', $palavra));

      
        $invertida = strrev($normalizada);

        echo "<hr>";
        echo "<p><strong>Palavra digitada:</strong> $palavra</p>";

        if ($normalizada === $invertida) {
            echo "<p><strong>É um palíndromo </strong></p>";
        } else {
            echo "<p><strong>Não é um palíndromo </strong></p>";
        }
    }
    ?>
</body>
</html>