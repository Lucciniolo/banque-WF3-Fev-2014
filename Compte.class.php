<?php 

 class Compte{
	// public $proprietaire;
	public $numero;
	private $solde = 0;
	public $decouvert;

	public static $nombreDeCompte = 0;

	public function __construct($numero, $solde, $decouvert){
		$this->numero = $numero;
		$this->solde = $solde;
		$this->decouvert = $decouvert;

		self::$nombreDeCompte++;
    } 

	public function setDecouvert($valeur){
		$this->decouvert = $valeur;
	}

	public function getSolde(){
		return $this->solde;
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

    public function afficherInformations(){
    	echo "     Les informations du compte <b>numero ". $this->numero ."</b> : <br> son solde : ". $this->solde ." <br> son decouvert est de ". $this->decouvert .": <br><br>";
    }


    public function setProprietaire($proprietaire){
    	$compte->proprietaire = $proprietaire;
    }

}



?>