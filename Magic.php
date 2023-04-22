<?php
$m=rand(0,19);
$magic=[
    "C'est certain.",
    "C'est complètement ça.",
    "Sans aucun doute.",
    "oui, vraiment.",
    "Tu peux compter dessus.",
    "Augure favorable.",
    "Très probablement.",
    "Ca m'a l'air de bien se présenter.",
    "Oui!",
    "Les signes indiquent que oui.",
    "La réponse est floue, essaye encore.",
    "Redemande plus tard.",
    "Il ne vaut mieux pas que je te réponde tout de suite.",
    "Impossible à prévoir pour l'instant.",
    "Concentre toi et redemande.",
    "Ne compte pas dessus!",
    "Ma réponse est non.",
    "Mes sources disent non.",
    "Ca ne se présente pas bien.",
    "Très peu probable.",
];
   
    echo $_POST["question"];
   echo " La réponse est: $magic[$m]";