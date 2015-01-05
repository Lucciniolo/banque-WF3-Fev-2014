<?php 

 class Compte{
	public $proprietaire = null;
	public $numero;
	public $solde = 0;
	public $decouvert;

	public static $nombreDeCompte;

	public function __construct($numero, $solde, $decouvert){
		$this->numero = $numero;
		$this->solde = $solde;
		$this->decouvert = $decouvert;
    } 


	public function crediterCompte($valeur){
		$this->solde = $this->solde + $valeur;
	}

	public function debiterCompte($valeur){
		if ($this->solde - $valeur > $this->decouvert*-1) {
			$this->solde = $this->solde - $valeur;
			return true;
		}
		else{
			return false;
		}
	}


}



?>