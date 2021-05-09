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
    <a class="nav-link active text-white" href="ejercicio01.php">ejercicio 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="ejercicio02.php">ejercicio 2</a>
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
    <section class="container pt-5">
      <h2 class="text-center p-3">Ejercicio n° 1</h2>
        <p>Realizar una función que recibe como parámetros un precio y un array del 1 al 4. Mezclar los números del
       array y procesarlos sabiendo que si es 1 recibe un 5% de descuento, si es 2 un 10%, si es 3 un 20% y si es 4
       no recibe descuento. Mostrar el precio final y el descuento obtenido.</p>

       <?php
       $alinear="center";

      ?>
      <div align="<?php echo $alinear;?>" class="text-warning">
      <?php
       function descuento($precio, $cantidad){
         $total = 0;
          $cantidad[array_rand($cantidad)] ;
          $valor_aleatorio = $cantidad[array_rand($cantidad)] ;

          if($valor_aleatorio==1){
            echo "El valor aleatorio es: ".$valor_aleatorio;
            echo "<br>";
            echo "El precio sin descuento es de: $".$total = $precio;
            echo "<br>";
            echo "El precio final, con descuento, es de: $".$total = $precio - ($precio * 0.05);
            echo "<br>";
            echo "Y el descuento es de: $".$desc = $precio * 0.05;
            echo "<br>";
          }else if($valor_aleatorio==2){
            echo "El valor aleatorio es: ".$valor_aleatorio;
            echo "<br>";
            echo "El precio sin descuento es de: $".$total = $precio;
            echo "<br>";
            echo "El precio final, con descuento, es de: $".$total = $precio - ($precio* 0.1);
            echo "<br>";
            echo "Y el descuento es de: $".$desc = $precio * 0.1;
            echo "<br>";
          }else if($valor_aleatorio==3){
            echo "El valor aleatorio es: ".$valor_aleatorio;
            echo "<br>";
            echo "El precio sin descuento es de: $".$total = $precio;
            echo "<br>";
            echo "El precio final, con descuento, es de: $".$total = $precio - ($precio * 0.2);
            echo "<br>";
            echo "Y el descuento es de: $".$desc = $precio * 0.2;
            echo "<br>";
          }else if($valor_aleatorio==4){
           echo "El valor aleatorio es: ".$valor_aleatorio;
           echo "<br>";
           echo "El precio sin descuento es de: $".$total = $precio;
           echo "<br>";
           echo "El precio final es de: $".$total = $precio;
           echo "<br>";
           echo "Y el descuento es de: $".$desc = 0;
           echo "<br>";
          }
          return $total;
       }
       $cantidad = [1, 2, 3, 4];

       descuento(3500, $cantidad);

       ?>
       </div>
    </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>