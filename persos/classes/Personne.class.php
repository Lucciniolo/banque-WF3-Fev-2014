<?php 
interface generosite{
	public function donner($somme);
    public function sourire($personne);
}

interface force{
	public function demonstrationForce();
}


class Personne{
	private $nom;

	public function setNom($pNom){
		$this->nom = $pNom;
	}

	public function getNom(){
		return $this->nom;
	}
}
 ?>