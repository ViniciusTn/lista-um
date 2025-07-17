<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número pares</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   <?php 
   if (isset($_POST['verificar'])) {
        $numero = (int) $_POST['numero'];

        
        function contarPares($numero) {
            return floor($numero / 2);
        }


        $pares = contarPares($numero);
        echo "<hr>";
        echo "<p><strong>Número informado:</strong> $numero</p>";
        echo "<p>Existem <strong>$pares</strong> números pares entre 1 e $numero.</p>";
   }
   ?>
</body>
</html>