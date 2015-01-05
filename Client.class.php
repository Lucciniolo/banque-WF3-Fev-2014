<?php 

class Client{
	public $compte;
	public $numero;
	public $nom;
	public $prenom;
	public $adresse;

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

}



?>