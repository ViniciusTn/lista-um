<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 6</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Verificarei os divisores do seu numero :</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   <?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verificar'])) {
       $numero = (int)$_POST['numero'];
       echo "Divisores de $numero: ";
       for ($i = 1; $i <= $numero; $i++) {
           if ($numero % $i === 0) {
               echo $i . " ";
           };
       };
   };
   ?>
</body>
</html>