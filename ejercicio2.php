<!--Algoritmo que pida dos números y muestre todos los números que van desde el primero al segundo.
se debe controlar que los valores son concretos.-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Ejercicio 2</title>
  </head>
  <body>
    <h3>Los numeros impares que van desde el primero al segundo son:</h3>
    <?php
    $a=1;
    $b=20;

    for ($a=$a; $a <=$b ; $a++) {
      if ($a%2==1){
        echo "  $a <br/>";

      }


    }
    echo "Los valores són concretos ";
     ?>
     <hr>
     <a href="index.php"><button type="submit" class="btn btn-target" name="button">Salir</button></a>
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>
