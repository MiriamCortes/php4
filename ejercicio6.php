<!--Algoritmo que muestre la tabla de multiplicar de un numero cualquiera.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <h3>La tabla de multiplicar es:</h3>
    <?php
    $n=4;
    for ($i=0; $i <=10 ; $i++) {

      echo "$n x $i = ".($n*$i)."<br/>";

    }
     ?>
     <hr>
     <a href="index.php"><button type="submit" class="btn btn-target" name="button">Salir</button></a>
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


    </form>

  </body>
</html>
