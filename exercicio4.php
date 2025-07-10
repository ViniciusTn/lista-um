<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Verifica fatorial</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>
   <?php
   if($_SERVER['REQUEST_METHOD'] === 'POST'){
       if(isset($_POST['verificar'])){
           $numero = (int)$_POST['numero'];
           $fatorial = 1;
           for($i = 2; $i <= $numero; $i++){
               $fatorial *= $i;
           }
           echo "O fatorial de $numero é $fatorial.";
       }
   }
   ?>

</body>
</html>