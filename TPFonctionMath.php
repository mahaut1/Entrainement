<?php
$initial='555';
//transformer un octal en decimal ;
 $a=octdec($initial);
echo "La decimal de cette octale est: ".$a."<br>";
// Le radian
 $b=deg2rad($a);
echo "Le radian de cette décimale est: ".$b."<br>";
// Le cosinus
 $c=cos($b);
 echo "Le cosinus de cet angle est: ".$c."<br>";
//arrondir le resultat a 3 decimales;
 $d= round($c,3, PHP_ROUND_HALF_UP);
 echo "On arrondit le cosinus a 3 décimales, ce qui donne: ".$d."<br>";
// stocker le logarithme
 $e=log($d);
 echo "On stocke le logarithme: ".$e."<br>";
//valeur absolue
 $f=abs($e);
 echo "La valeur absolue de ce nombre est: ".$f."<br>";
//L'arc cosinus
 $g=acos($f);
 echo "L'arc cosinus de cette valeur est: ".$g."<br>";
// transformer un radian en degré;
 $h=rad2deg($g);
echo  "Le radian transformé en degré est de: ".$h."<br>";
//arrondissez a l'entier inférieur
 $i=floor($h);
 echo "On arrondit a l'entier inférieur: ".$i."<br>";
 $resultat=$i-47;
 echo "On retire 47 du nombre entier.Le résultat est: ".$resultat."<br>";

