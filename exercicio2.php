<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h2></h2>
   

   <form method="POST" action="">
        <label for="numero">Digite um numero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
   </form>
<?php

if($_SERVER['REQUEST_METHOD'] ==='POST'){



$numero = (int)$_POST['numero'];

echo ($numero * 1) . "<br>";
echo ($numero * 2) . "<br>";
echo ($numero * 3) . "<br>";
echo ($numero * 4) . "<br>";
echo ($numero * 5) . "<br>";
echo ($numero * 6) . "<br>";
echo ($numero * 7) . "<br>";
echo ($numero * 8) . "<br>";
echo ($numero * 9) . "<br>";
echo ($numero * 10) . "<br>";

};


?>


</body>
</html>