<?php
const POIDS = [
    1 => 51,
    2 => 307,
    3 => 93,
    4 => 522,
    5 => 144,
    6 => 28,
    7 => 43,
    8 => 93,
    9 => 78
];
function weight() {
    $reponse="";
    for ($c = 1; $c < 10; $c++) {// boucle des centaines
        for ($d = 1;$d < 10; $d++){// boucle des dizaines
            for ($u = 1;$u < 10; $u++){//boucle des unités
                $weight = POIDS[$c] + POIDS[$d] + POIDS[$u];
                if ($c*100+$d*10+$u === $weight) {//autre possibbilité intval($c.$d.$u) === $weight
                    $reponse.= "Chiffres : $c   $d   $u<br>";
                    $reponse.= "poids des chiffres = ".POIDS[$c]." + ".POIDS[$d]." + ".POIDS[$u]." = $weight<br>";
                }
            }
        }
    }
    return $reponse;
}

function poids() {
    $reponse="";
    for ($nb = 111; $nb < 1000; $nb++) {//boucle sur tous les chiffres qui nous intéressent
        $c=intdiv($nb,100);// récupération du nombre des centaines
        $d=intdiv($nb-$c*100,10);// récupération du nombre des dizaines
        $u=$nb-$c*100-$d*10;// récupération du nombre des unités
        if (!$c || !$d || !$u) continue;//on passe à l'itération suivante si un des nombres est 0
        $weight = POIDS[$c] + POIDS[$d] + POIDS[$u];
        if ($nb === $weight) {
            $reponse.= "Chiffres : $c   $d   $u<br>";
            $reponse.= "poids des chiffres = ".POIDS[$c]." + ".POIDS[$d]." + ".POIDS[$u]." = $weight<br>";
        }
    }
    return $reponse;
}

echo "<p>Résultat avec la fonction weight() :<br>".weight()."</p>";
echo "<p>Résultat avec la fonction poids() :<br>".poids()."</p>";
