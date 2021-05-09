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
    <a class="nav-link text-white" href="ejercicio02.php">ejercicio 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="ejercicio03.php">ejercicio 3</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-white" href="ejercicio04.php">ejercicio 4</a>
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
<h2 class="text-center p-3">Ejercicio n° 4</h2>
    <p>Realizar una función a la cual se le pasa como parámetro una frase y dos caracteres. Tendrá como
      objetivo reemplazar todas las veces que aparece el primer caracter por el segundo. Mostrar la frase final y
      las veces que fue reemplazado.</p>
      <?php

      function reemplazar($frase, $caracter_01, $caracter_02){
        $cont=0;
      $frase_array = count_chars($frase, 0);?>
      <span class="p-5 text-warning"><?php echo "La frase con el caracter reemplazado dice: ".str_ireplace($caracter_01,$caracter_02, $frase,$cont);?></span>
      <?php
      echo "<br>";
      str_ireplace($caracter_01,$caracter_02, $frase);?>
      <span class="p-5 text-warning"><?php echo "El caracter ".$caracter_01." a sido reemplazado: ".$cont." veces.";?></span>
      <?php
        return $frase;
      }

      $caracter_01 = "o";
      $caracter_02 = "e";
      $frase = "What is love?
      Oh baby dont hurt me,
      Dont hurt me,
      No more";
      ?>
      <span class="p-5 text-warning"><?php echo "La frase original dice: ".$frase;?></span>
      <?php
      echo "<br>";
      reemplazar($frase, $caracter_01, $caracter_02);
      ?>
</section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>