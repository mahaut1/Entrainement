<?php

class Perso {
	
	private $nom;
	private $sante;
	private $armure;
	private $pts_attaque;
	
	public function __construct($nom,$sante=100,$armure=100,$pts_attaque=16){
		$this->nom = $nom;
		$this->sante = $sante;
		$this->armure = $armure;
		$this->pts_attaque = $pts_attaque;
	}
	
	// ceci est un setter
	public function setNom($nom){
		$this->nom = $nom;
	}
	
	// ceci est un getter
	public function getNom(){
		return $this->nom;
	}
	
	// ceci est un setter
	public function setSante($sante){
		$this->sante = $sante;
	}
	
	// ceci est un getter
	public function getSante(){
		return $this->sante;
	}
	
	// ceci est un setter
	public function setArmure($armure){
		$this->armure = $armure;
	}
	
	// ceci est un getter
	public function getArmure(){
		return $this->armure;
	}
	
	// ceci est un setter
	public function setPtsAttaque($attaque){
		$this->pts_attaque = $attaque;
	}
	
	// ceci est un getter
	public function getPtsAttaque(){
		return $this->pts_attaque;
	}
	
	public function isAlive(){
		if($this->sante > 0) return true;	
		else return false;
	}
	
	public function isDead(){
		return !$this->isAlive();
	}
	
	public function haveArmure(){
		if($this->armure > 0) return true;	
		else return false;
	}
	
	public function attaque($victime){
		
		if($victime->isDead()){
			echo 'La victime '.$victime->getNom().' est déjà morte, attaque impossible<br>';
			return false;
		} else {
			if($victime->haveArmure()){
				$armure_restante = $victime->getArmure() - $this->pts_attaque;
				if($armure_restante >= 0) $victime->setArmure($armure_restante);
				else {
					$victime->setArmure(0);
					$sante_restante = $victime->getSante() - abs($armure_restante);
					$victime->setSante($sante_restante);
				}
			} else {
				$sante_restante = $victime->getSante() - $this->pts_attaque;
				if($sante_restante < 0){
					$sante_restante = 0;
				}
				$victime->setSante($sante_restante);
				if($sante_restante == 0){
					echo $this->nom.' a tué '.$victime->getNom().'<br>';
				}
			}
		}
	}
	
}

$arthur = new Perso("Arthur",100); //ceci et un objet
$toto = new Perso("Toto"); //ceci est un objet

while($toto->isAlive()){
	echo '<br>Arthur attaque Toto<br>';
	echo 'Pts d\'armure initiaux:'.$toto->getArmure().'<br>';
	echo 'Pts de vie initiaux :'.$toto->getSante().'<br>';
	$arthur->attaque($toto);
	echo 'Pts d\'armure restant:'.$toto->getArmure().'<br>';
	echo 'Pts de vie restant :'.$toto->getSante().'<br>';
}





?>