<?php

$arreglo = [

'keyStr1' => 'lado',
 0 => 'ledo',

'keyStr2' => 'lido',
1 => 'lodo',
2 => 'ludo'
];


$ciudades = [

[
    'pais' => 'Costa Rica',
    0 => 'San Jose',
    1 => 'Alajuela',
    2 => 'Cartago'
],
[
    'pais' => 'España',
    0 => 'Madrid',
    1 => 'Barcelona',
    2 => 'Valencia'   
],
[
    'pais' => 'Argentina',
    0 => 'Buenos Aires',
    1 => 'La Plata',
    2 => 'Mendoza'
]

];

$valores = [61, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 23, 5];

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

  <title>Ejercicio Arreglos</title>
</head>

<body>
<div class="row">
<div class="col">
<h2 class="border-bottom-gray" >Ejercicio 1.</h2>
<?php

echo '<p>' . $arreglo['keyStr1'] . ", " . $arreglo[0] . ", " . $arreglo['keyStr2'] . ", " . $arreglo[1] . ", " . $arreglo[2] . ".";
echo '</br> decirlo al revés lo dudo.';
echo '</br>' . $arreglo[2] . ", " . $arreglo[1] . ", " . $arreglo['keyStr2'] . ", " . $arreglo[0] . ", " . $arreglo['keyStr1'] . ".";
echo '</br> ¡Qué trabajo me ha costado!</p>';
?>
</div>
</div>
</br>
<div class="row">
<div class="col">
<h2 class="border-bottom-gray" >Ejercicio 2.</h2>
<?php

foreach ($ciudades as $container) {

               echo '<h4>País: ' . $container['pais'] . '</h4>';
               echo '<strong>Ciudades:</strong>';
               echo '<ul>';
               echo '<li>' . $container[0] . '</li>';
               echo '<li>' . $container[1] . '</li>';
               echo '<li>' . $container[2] . '</li>';
               echo '</ul>';
               echo '</li>';
}

?>
</div>
</div>
</br>
<div class="row">
<div class="col">
<h2 class="border-bottom-gray" >Ejercicio 3.</h2>

<?php
sort($valores);
echo '<p>Los 3 valores más bajos son: ';
echo '<strong><ul>';
echo '<li>' . $valores[0] . '</li>';
echo '<li>' . $valores[1] . '</li>';
echo '<li>' . $valores[2] . '</li>';
echo '</ul></strong>';
echo '</li></br>';

rsort($valores);
echo '<p>Los 3 valores más altos son: ';
echo '<strong><ul>';
echo '<li>' . $valores[0] . '</li>';
echo '<li>' . $valores[1] . '</li>';
echo '<li>' . $valores[2] . '</li>';
echo '</ul></strong>';
echo '</li></br>';
?>


</div>
</div>
</body>