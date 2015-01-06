<?php 

class SARL extends Entreprise{
	protected $capital; 

	public function afficherDetails{
		parent::afficherDetails();
		echo "Le capital est de : ". $capital;
	}
}


 ?>