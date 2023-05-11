<?php
include('Form.php');
//***************************

$myform = new form("Accès au site", "formulaire", "traitement.php","post");
$myform->addTextInput("Votre nom :  ", "nom", "nom");
$myform->addTextInput("Votre code : ", "code", "code");
$myform->addSubmit();
echo $myform->getform();
?>


<!-- Voici le code HTML attendu
<form action='traitement.php' method='post' name='formulaire'>
	<fieldset>
		<legend>Accès au site</legend>
		<span>Votre nom :  </span><input type='text' name='nom' id='nom' /><br>
		<span>Votre code : </span><input type='text' name='code' id='code' /><br>
		<input type='submit' name='submit' value='Envoyer' />
	</fieldset>
</form>
-->