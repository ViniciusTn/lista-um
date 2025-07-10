<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>par ou impar</title>
</head>
<body>
  <h2>Verifique se um número é Par ou Ímpar</h2>
   

   <form method="POST" action="">
        <label for="numero">Digite um numero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_numero'])){
        $numero = $_POST['numero'];
        $ehPrimo = true;
        if($numero <= 0){
            $ehPrimo = false;
        }else{
            for($i = 2; $i <= sqrt($numero); $i++){
                if( $numero % $i == 0 ){
                    $ehPrimo = false;
                    break;
                }
            }
        }
        echo "O número $numero  ". ($ehPrimo ? 'é impar':'é par');
    };

   };

   ?>



</body>
</html>