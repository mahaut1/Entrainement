<?php
	$year_ago=strtotime("-110 year");
	$dob_max=date("Y-m-d");
	$dob_min=date("Y-m-d",$year_ago);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bday</title>
</head>
<body>
<?php
	if ($_SERVER['REQUEST_METHOD']=="POST" && $_POST["dob"]<$dob_max && $_POST["dob"]>$dob_min):		
		$signes = array("Capricorne","Verseau","Poisson","Bélier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire");
		$mois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];
		$jours=["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
		$signes_astro=array_combine($mois, $signes);
		/*************************************/
		/***       exemple sans objet      ***/
		/*************************************/
		$birth=strtotime($_POST["dob"]);
		$bday=getdate($birth);
		$mois_signe = ($bday["mday"]>=21) ? $bday["mon"]%12 : $bday["mon"]-1;
		$now=getdate();
		$bnow=getdate(strtotime(date("Y")."-".$bday["mon"]."-".$bday["mday"]));
		$age= date("Y")-date("Y",$birth);
		$jtob=abs($bnow["yday"]-$now["yday"]);
		$anniv="<p> {$_POST['prenom']} , vous êtes né.e le {$jours[$bday["wday"]]}, ".date("d",$birth)." {$mois[$bday["mon"]-1]} jour n° {$bday['yday']} de l'année ".date("Y",$birth)."</p>";
		$next=sprintf("<p>Cette année votre anniversaire sera dans %d jours, ce sera un %s</p>",$jtob, $jours[$bnow["wday"]]);
		if($bnow["yday"]>$now["yday"]){
			$age--;
		}else{
			$next=sprintf("<p>Cette année votre anniversaire était il y a %d jours, c'était un %s</p>",$jtob, $jours[$bnow["wday"]]);
		}
		/*************************************/		
		/***  exemple procédural + objets  ***/
		/*************************************/		
		/***
		$bday=date_create($_POST["dob"]);
		$today=date_create();
		$this_year=date_create(date_format($today,"Y-").date_format($bday,"m-d"));
		$age= date_diff($bday, $this_year) ->format("%y");
		$mois_signe = (date_format($bday,"d")>=21) ? date_format($bday,"n")%12 : date_format($bday,"n")-1;
		$this_bday=date_diff($today, $this_year);
		$next= sprintf("<p>Cette année votre anniversaire sera dans %d jours, ce sera un %s</p>",$this_bday->format("%a"), $jours[date_format($this_year,"w")]);
		$anniv="<p> {$_POST['prenom']} , vous êtes né.e le {$jours[date_format($bday,"w")]}, ".date_format($bday,"d")." {$mois[date_format($bday,"n")-1]} jour n° ".date_format($bday,"z")." de l'année ".date_format($bday,"Y")."</p>";
		if ($today < $this_year){
			$age--;
		}
		else{	
			$next= sprintf("<p>Cette année votre anniversaire était il y a %d jours, c'était un %s</p>",$this_bday->format("%a"), $jours[date_format($this_year,"w")]);
		}		 
		***/
		/*************************************/		
		/***        partie commune         ***/
		/*************************************/		
		$anniv.="<p>Vous avez $age ans et vous êtes {$signes_astro[$mois[$mois_signe]]}</p>";
		$anniv.=$next;
		// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
	    $headers = array(
		    'MIME-Version' => '1.0',
		    'Content-type' => 'text/html; charset=utf-8',
		    'X-Mailer' => 'PHP/' . phpversion()
		);
		mail($_POST["email"],"Anniversaire", $anniv, $headers);
?>
<div>
	<?=$anniv?>
</div>
<?php
	else:
?>
<form method="POST">
	<p>
		<input type="text" name="prenom" id="prenom" placeholder="Votre prénom" required>
	</p>
	<p>
		<input type="email" name="email" id="email" placeholder="Votre adresse email" required>
	</p>
	<p>
		<input type="date" name="dob" id="dob" min="<?=$dob_min?>" max="<?=$dob_max?>" required>
		<label for="dob">( votre date de naissance )</label>
		<?php
			if(isset($_POST["dob"]) && ($_POST["dob"]>$dob_max || $_POST["dob"]<$dob_min))
				echo "Le date n'est pas valide";
		?>
	</p>
	<p>
		<input type="submit" name="Envoyer" id="sent">
	</p>
</form>	
<?php
	endif;
?>
</body>
</html>