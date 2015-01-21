<?php 
include 'header.php'; ?>

 <h1>Effectuer un virement  </h1>

<?php 
	// Afin de simplifier l'exercice, on spéficie ici 3 comptes et 3 clients.

	$client1->afficherInformations();
	$client1->getCompte()->crediterCompte(100);
	$client1->afficherInformations();

	if($client1->getCompte()->debiterCompte(10000000000000))
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