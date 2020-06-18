<?php
// Ejercicio #1
$variable1 = 32;
$variable2 = 3;
$variable3 = 2;
$resultado1 = $variable1 + $variable2;
$resultado2 = $variable2 * ($variable3 + $variable2);

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Ejercicios Operadores</title>
</head>
<body>
<div class="row">
<div class="col">
<h2 class="border-bottom-gray" >Ejercicio 1.</h2>
<?php
echo '<p>El resultado de 32 + 3 es: ' . $resultado1 . '</p>';
echo '</br><p>El resultado de 3(2+3) es: ' . $resultado2 . '</p></br>';

?>
</div>
</div>
<div class="row">
<div class="col">
<?php 

// EJERCICIO #2  

?>
<h2 class="border-bottom-gray" >Ejercicio 2.</h2>
<h5>$valor es mayor que 5 pero menor que 10</h5>
<ul>
<li>($valor > 5 && $valor < 10)</li>
</ul>
<h5>$valor es mayor o igual a 0 pero menor o igual a 20</h5>
<ul>
<li>($valor >= 0 && $valor <= 20)</li>
</ul>
<h5>$valor es igual a “10” asegurando que el tipo de dato sea cadena</h5>
<ul>
<li>$valor .= 10;</li>
</ul>
<h5>$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15</h5>
<ul>
<li>($valor > 0 and $valor < 5 || $valor > 10 and $valor < 15</li>
</ul>
</div>
</div>
</body>