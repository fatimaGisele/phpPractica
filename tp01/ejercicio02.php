<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp01 programacion web 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="p-3 bg-dark">
    <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active text-white" href="tp1.php">Programacion Web II</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="ejercicio01.php">ejercicio 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-white" href="ejercicio02.php">ejercicio 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="ejercicio03.php">ejercicio 3</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="ejercicio04.php">ejercicio 4</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="ejercicio05.php">ejercicio 5</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="ejercicio06.php">ejercicio 6</a>
  </li>
</ul>
    </header>
    <main>
<section class="container p-3">
<h2 class="text-center p-3">Ejercicio n° 2</h2>
    <p>Realizar una función que recibe como parámetro un numero entero. Mostrar un array que contiene desde
     el cuadrado de dicho numero hasta el 1. La salida deberá ser en una tabla HTML.
     Por ejemplo: 4 => 16, 9 ,4, 1.</p>
     <?php

     function potencia_desc($entero){
      $alinear="center";
      $color="#34495E"; ?>
       <div align="<?php echo $alinear; ?>">
      <?php echo "La potencia del numero ".$entero." es: ".$potencia = $entero * $entero;
      echo "<br>";
      echo "<br>";?>
      </div>
      <?php
      $cont = $entero;
      while($cont!=0){
       $es_pot = $cont * $cont;
        $es_pot = array("La potencia de ".$cont => " es: ".$es_pot);
        
        ?>
        <table border="1" align="<?php echo $alinear;?>">
        <tr >
        <td bgcolor="<?php echo $color;?>" class="p-2">
        <?php
        print_r($es_pot);?>
        </td>
        </tr>
        </table>
         <?php
        $cont--;
      }
     }
     echo potencia_desc(9);
     ?>
</section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>