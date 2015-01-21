<?php 
	// La liste des comptes.
	$comptes = array();

	$compte1 = new Compte(1, 15000, 500);
	$compte2 = new Compte(2, 20000, 0);
	$compte3 = new Compte(3, 45000, 300);

	$comptes[$compte1->getNumero()] = $compte1;
	$comptes[$compte2->getNumero()] = $compte2;
	$comptes[$compte3->getNumero()] = $compte3;
	
	// La lists des clients.
	$clients = array();	
	$client1 = new Client($compte1, 1, "priche", "Julien", "3 Rue du Perdu, PARIS");
	$client2 = new Client($compte2, 2, "RAUVRE", "Ling", "4 Rue du Pendu, NANTES");
	$client3 = new Client($compte3, 3, "CHAUVE", "Loli", "4 Rue du Rire, FIANTES");

	$clients[$client1->getNumero()] = $client1;
	$clients[$client2->getNumero()] = $client2;
	$clients[$client3->getNumero()] = $client3;


 ?>