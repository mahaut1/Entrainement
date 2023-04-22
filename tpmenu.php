<?php
$boissons = [
  "Capuccino" => 3.99,
  "Cafée" => 2.00,
  "Thé" => 2.50,
  "Chocolat" => 4.50
];
$patisseries = [
  "Croissant",
  "Muffin",
  "Tarte",
  "Gâteau",
  "Cupcake",
  "Brownie"
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu café des délices</title>
</head>
<body>
<h1>Bienvenue au café des délices</h1>

<h3>Boissons !</h3>
<ul>
<?php foreach($boissons as $boisson=>$prix):?>
<li><?="$boisson : $prix €"?></li>
<?php endforeach;?>
<?php
/*
foreach($boissons as $boisson=>$prix):
  echo "<li>$boisson : $prix €</li>";"
endforeach;
*/
?>
</ul>
<h3>Pâtisseries ! (3 € la part)</h3>
<ul>
<?php for($i=0, $count=count($patisseries);$i<$count; $i++):?>
<li><?=$patisseries[$i]?></li>
<?php endfor;?>
</ul>
</body>
</html>