<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número perfeito</title>
</head>
<body>
   <form method="POST" action="">
        <label for="numero">Verificarei os divisores do seu numero :</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>
    <?php 
    
    if (isset($_POST['verificar'])) {
        $numero = (int) $_POST['numero'];


function ehNumeroPerfeito($numero) {
    if ($numero <= 1) return false;

    $soma = 0;

    
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    return $soma === $numero;
}



if (ehNumeroPerfeito($numero)) {
            echo "<p><strong>$numero é um número perfeito.</strong></p>";
        } else {
            echo "<p><strong>$numero não é um número perfeito.</strong></p>";
        }

}

?>
   
    
    
    
    
    
    
    
    
  
</body>
</html>