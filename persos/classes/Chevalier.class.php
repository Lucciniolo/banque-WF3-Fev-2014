<?php 
class Chevalier extends Personne implements generosite, force{
	public function donner($somme){
		return "Hey, trésor public, j'ai donné ".$somme." pièces d'or mais chut, ca doit rester secret.";
	}
    public function sourire($personne){
    	return "Je te sourit oh ".$personne->getNom();
    }

	public function demonstrationForce(){
		return "Je te transperce par le biais de mon épaisse épée.";
	}

}
 ?>