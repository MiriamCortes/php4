<!--Algoritmo que pida dos números y sume todos los números que van desde el primero al segundo.
Se debe controlar que los valores son concretos. -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <h3>La suma de todos los numeros desde el primero y el segundo es:</h3>
    <?php
    $a=1;
    $b=5;
    $suma=0;


      if ($a <= $b) {
        for ($a=$a; $a<=$b; $a++){

        $suma=$suma+$a;

      }
      echo "la suma de todos los números del primero y el segundo es: $suma";
    }
     ?>
     <hr>
     <a href="index.php"><button type="submit" class="btn btn-target" name="button">Salir</button></a>
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
