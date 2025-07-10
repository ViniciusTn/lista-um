<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 3</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numero">Verifica se o numero é maior, igual ou menor que zero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar'])){
        $numero = $_POST['numero'];
        if($numero > 0){
            echo "O número é maior que zero.";
          
        }else if($numero < 0){
            echo "O número é menor que zero.";
           
        } else {
            echo "O número é igual a zero.";
        }
    }
   }
   ?>

</body>
</html>