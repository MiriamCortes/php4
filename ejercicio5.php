<!--Algoritmo que pida un número y muestre en pantalla el mismo número de asteriscos -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <h3>El número de asteriscos es:</h3>
    <?php
    $a=5;
  for ($i=1; $i <= $a ; $i++) {
    echo "* <br/>";
  }
     ?>
      <hr>
     <a href="index.php"><button type="submit" class="btn btn-target" name="button">Salir</button></a>
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
