<?php 

 class Compte{
	// public $proprietaire;
	private $numero;
	private $solde;
	private $decouvert;

	public function getNumero(){
		return $this->numero;
	}
	
	public function getSolde(){
		return $this->solde;
	}	

	public function getDecouvert(){
		return $this->decouvert;
	}

	public function setNumero($pNumero){
		$this->numero = $pNumero;
	}
	
	public function setSolde($pSolde){
		$this->solde = $pSolde;
	}	

	public function setDecouvert($pDecouvert){
		$this->decouvert = $pDecouvert;
	}

	public static $nombreDeCompte = 0;

	public function __construct($numero, $solde, $decouvert){
		$this->numero = $numero;
		$this->solde = $solde;
		$this->decouvert = $decouvert;

		self::$nombreDeCompte++;
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