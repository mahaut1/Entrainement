<?php

$s1=9700;
$s2=29775;
$s3=8675;
$budgettotal=$s1+$s2+$s3;
echo "Le budget total est de: " .$budgettotal."<br>";

$s1d=$s1*0.88;
echo "Il pourra conserver sur les premiers 9700 euros: ".$s1d."<br>";

$s2d=$s2*0.78;
echo "Il pourra conserver sur les 29775 euros suivants: ".$s2d."<br>";

$s3d=$s3*0.76;
echo "Il pourra garder sur son salaire restant la somme de: ".$s3d."<br>";

$saap=$s1d+$s2d+$s3d;
echo "Son salaire annuel après impots sera de: ".$saap."<br>";

$rva=$budgettotal*0.062;
echo "Le montant de sa cotisation de sécurité sociale annuel est de: ".$rva."<br>";

$saais=$saap-$rva;
echo "Le montant après impots et sécurité sociale est de: ".$saais."<br>";

$vac=1000;
$voi=1000;
$saasi=$saais-($vac+$voi);
echo "Son revenu annuel après impots et sécurité sociale est de: ".$saasi."<br>";

$sm=$saasi/12;
echo "Son revenu mensuel avant déduction des dépenses est de: ".$sm."<br>";

$lo=1500;
$eeg=200;
$mu=200;
 $dm=$sm-($eeg+$lo+$mu);
echo "Son revenu mensuel après déduction est de: ".$dm."<br>";

$rh=$dm/4.33;
echo "Son revenu hebdomadaire avant dépense sera de: ".$rh."<br>";

$car=25;
$nou=90;
$loi=47;
$dh=$car+$nou+$loi;
$rhad=$rh-$dh;
echo "Son revenu hebdomadaire après dépense sera de: ".$rhad."<br>";

$ep=$rhad*52;²         
echo "Bob pourra épargner: ".$ep."par an <br>";









