<?php 

include 'Compte.class.php';
include 'Client.class.php';

// Ou, en utilisant une fonction anonyme à partir de PHP 5.3.0
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

 ?>

<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Site de la WF-Banque</title>
</head>
<body>

<h1>Bienvenue sur le site de la WF-Banque</h1>

 <h2>Mouvements  </h2>

<?php 
	$compte1 = new Compte(1, 15000, 500);
	$compte2 = new Compte(2, 20000, 0);
	$compte3 = new Compte(3, 45000, 300);

	$client1 = new Client($compte1, 1, "CIMERA", "OUMAR", "3 Rue du Perdu, PARIS");
	
	$client1->afficherInformations();
	$client1->compte->crediterCompte(100);
	$client1->afficherInformations();

	if($client1->compte->debiterCompte(10000000000000))
		$client1->afficherInformations();
	else
		echo "Tentative de depassement de votre decouvert <br>";
	
	$client1->afficherInformations();


	$compte1->setDecouvert(12);
	$compte1->afficherInformations();

 ?>



 <h2>Informations sur les comptes</h2>

<?php 
	$compte1->afficherInformations();
	$compte2->afficherInformations();
	$compte3->afficherInformations();
 ?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>