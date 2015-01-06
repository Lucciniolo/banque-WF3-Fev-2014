<?php 

class Client{
	private $compte;
	private $numero;
	private $nom;
	private $prenom;
	private $adresse;

	public function getCompte(){
		return $this->compte;
	}
	
	public function getNumero(){
		return $this->numero;
	}	
	public function getNom(){
		return $this->nom;
	}	

	public function getPrenom(){
		return $this->prenom;
	}

	public function getAdresse(){
		return $this->adresse;
	}

	public function setNumero($pNumero){
		$this->numero = $pNumero;
	}
	
	public function setNom($pNom){
		$this->nom = $pNom;
	}	

	public function setPrenom($pPrenom){
		$this->prenom = $pPrenom;
	}

	public function setAdresse($pAdresse){
		$this->adresse = $pAdresse;
	}	


	public function ajouterCompte($unCompte){
		$this->compte = $unCompte;
	echo "LOG : compte jouté <br>";	
	}

	// Le constructeur
    public function __construct($compte, $numero, $nom, $prenom, $adresse){
		$this->compte = $compte;
		$this->numero = $numero;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->adresse = $adresse;
    } 

    public function afficherInformations(){
    	echo "     Les informations du client <b>numero ". $this->numero ."</b> : <br> son nom : ". $this->nom ." <br> son compte est crédité de ". $this->compte->getSolde() .": <br><br>";
    }

    public function virement($pClient, $pSomme){
    	$nouveauSolde = $pClient->getCompte()->getSolde() + $pSomme;
    	$pClient->getCompte()->setSolde($nouveauSolde);
    	$this->getCompte()->setSolde($this->getCompte()->getSolde() - $pSomme);
    }

}



?>