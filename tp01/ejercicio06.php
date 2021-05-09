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
    <a class="nav-link text-white" href="ejercicio04.php">ejercicio 4</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="ejercicio05.php">ejercicio 5</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-white" href="ejercicio06.php">ejercicio 6</a>
  </li>
</ul>
    </header>
    <main class="main">
<section class="container p-3">
<h2 class="text-center p-3">Ejercicio n° 6</h2>
    <p>Realizar una función que reciba como parámetro un array asociativo de 4 campos y 3 registros, junto con
el numero de fila y el nombre de campo que se quiere visualizar. Mostrar el array ordenado en una tabla
HTML y luego el dato pedido, en el caso que este último no exista mostrar el mensaje correspondiente.</p>
<?php

function amuchados($mi_array, $tipo, $fila){ 

  if($mi_array[$tipo][$fila]==null){ ?>
    <strong class="pl-5 text-danger"> <?php echo "error, opcion no valida";?></strong>
<?php 
  }else{ ?>
<strong class="pl-5 text-warning"> <?php echo "La/El elegido es: ".$mi_array[$tipo][$fila]."!!! :)";?></strong>
<?php 
}
$alinear="center";
$color_01 = "#1F618D";
$color_02 = "#2E4053";
?>
<table border="1" align=<?php echo $alinear;?> bgcolor="<?php echo $color_01;?>">
<?php
foreach($mi_array as $miembros => $tipo){ ?>
  <th bgcolor="<?php echo $color_02;?>">
    <?php  echo $miembros; ?>
  </th>

<?php
  foreach($tipo as $nombre){ ?>
  <td align=<?php echo $alinear;?>><?php echo $nombre; echo "<br>"; }
?></td>

<tr><?php } ?>
</tr>
</table>
<?php
} 

$familia = [
  "Gatos" => ["Emily", "Pantuflas", "Lola"],
  "Perros" => ["Milanesa", "Bethoveen", "Holgazana"],
  "Niños" => ["Joaquin", "Berenice", "Casandra"],
  "Adultos" => ["Florencia", "Elias", "Gisele"]
];

 amuchados($familia,"Perros",0);
echo "<br>";

?>

</section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>