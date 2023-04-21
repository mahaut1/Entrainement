<!-- $nombres_premiers = array(2, 3, 5, 7, 11, 13, 17); 
$animaux = ["chien", "chat", "tortue", "vache"];
$chasse_au_tresor = ["ordures", "chat", 99, ["canette de soda", 8, ":)", "boue", ["trucs", "peluche", ["OR !"], "grotte", "chauve-souris", "scorpion"], "pierre"], "paillettes", "clair de lune", 2.11] ;
$signes = array("Capricorne","Verseau","Poisson","Bélier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire");
$mois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"]; -->

afficher le tableau $nombres_premiers
<?php
$nombres_premiers = array(2, 3, 5, 7, 11, 13, 17); 
print_r($nombres_premiers);
echo "<br>";

//Afficher la liste des animaux dans $animaux séparés par des virgules
$animaux = ["chien", "chat", "tortue", "vache"];
print_r(array_values($animaux));
echo "<br>";
echo "<br>";

//Ajouter 19 dans $nombres_premiers et afficher le résultat
array_push($nombres_premiers,19);
print_r($nombres_premiers);
echo "<br>";
echo "<br>";


//Afficher chien
$animaux = ["chien", "chat", "tortue", "vache"];
print_r($animaux[0]);
echo "<br>";
echo "<br>";


//Afficher Balance
$signes = array("Capricorne","Verseau","Poisson","Bélier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire");
print_r($signes[9]);
echo "<br>";
echo "<br>";

//Changer chat en tigre dans $animaux et afficher le résultat
array_splice($animaux,1,1,"tigre");
print_r($animaux);
echo "<br>";
echo "<br>";

//Retirer la vache et afficher le résultat
array_pop($animaux);
print_r($animaux);
echo "<br>";
echo "<br>";

//Ajouter 23, 29, 31, 37, 41 en une seule commande dans $nombres_premiers et afficher le résultat
array_push($nombres_premiers,23,29,31,37,41);
print_r($nombres_premiers);
echo "<br>";
echo "<br>";

//Retirer le chien et afficher le résultat
//$animaux = ["chien", "chat", "tortue", "vache"];
array_shift($animaux);
print_r($animaux);
echo "<br>";
echo "<br>";

//Ajouter cheval, aigle, dauphin avant tigre et afficher le résultat
array_unshift($animaux,"cheval","aigle","dauphin");
print_r($animaux);
echo "<br>";
echo "<br>";


//Compléter la phrase avec "OR!" du tableau chasse au trésor
$tresor= "<b>J'ai trouvé un coffre plein d'OR!";
echo $tresor;
echo "<br>";
echo "<br>";

//Créer un tableau $signes_astro qui associe les signes en valeurs aux mois en clés et afficher le résultat
//$signes = array("Capricorne","Verseau","Poisson","Bélier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire");
$signes_astro=array(0=>"Capricorne",1=>"Verseau",2=>"Poisson", 3=>"Bélier", 4=>"Taureau", 5=>"Gémeaux", 6=>"Cancer", 7=>"Lion", 8=>"Vierge", 9=>"balance",10=>"Scorpion",11=>"Sagitaire");
print_r($signes_astro);
echo "<br>";
echo "<br>";

//Trier le tableau $animaux par odre alphabétique et afficher le résultat
natsort($animaux);
print_r($animaux);
echo "<br>";
echo "<br>";

//Faire passer les mois en valeurs et les signes en clés dans le tableau $signes_astro et afficher le résultat
print_r(array_flip($signes_astro));
echo "<br>";
echo "<br>";

//Trier le tableau $signes_astro par signes dans l'ordre alphabétique décroissant et afficher le résultat;
$signes_astro=array(0=>"Capricorne",1=>"Verseau",2=>"Poisson", 3=>"Bélier", 4=>"Taureau", 5=>"Gémeaux", 6=>"Cancer", 7=>"Lion", 8=>"Vierge", 9=>"Balance",10=>"Scorpion",11=>"Sagitaire");
natsort($signes_astro);
print_r($signes_astro);
echo "<br>";
echo "<br>";

// Afficher fevrier avec le nouveau tableau
$mois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];
print_r($mois[1]);
?>