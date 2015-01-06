<?php 
include 'header.php';
 ?>

  <h1>Effectuer un virement  </h1>


<form action='virement.php' method='POST'>
	<p>Choisir la personne à créditer :
	<select name="clientACrediter">
		<?php foreach ($clients as $unClient) { ?>
		<option  value='<?php echo $unClient->getNumero(); ?>'><?php echo strtoupper($unClient->getNom()) ." ".$unClient->getPrenom(); ?></option>
	<?php } ?>
	</select> </p>

<p>Choisir la personne à débiter : 

<form action='virement.php' method='POST'>
	<select name="clientADebiter">
		<?php foreach ($clients as $unClient) { ?>
		<option  value='<?php echo $unClient->getNumero(); ?>'><?php echo strtoupper($unClient->getNom()) ." ".$unClient->getPrenom(); ?></option>
	<?php } ?>
	</select></p>

<p>Choisir le montant</p>

	<input type="text" name="montant">
	<input type='submit' value='Virer'>
</form>


<?php 

if (isset($_POST['montant']) AND isset($_POST['clientADebiter']) AND isset($_POST['clientACrediter'])) {
	echo "<h1>Details du virement</h1>";
	echo "montant de la transaction : ". $_POST['montant']. "<br>";
	echo "Client débité : ". $clients[$_POST['clientADebiter']]->getNom(). " ". $clients[$_POST['clientADebiter']]->getPrenom() ."<br>";
	echo "Client crédité : ". $clients[$_POST['clientACrediter']]->getNom(). " ". $clients[$_POST['clientACrediter']]->getPrenom() ."<br>";


	$clients[$_POST['clientADebiter']]->afficherInformations();
	$clients[$_POST['clientADebiter']]->virement($clients[$_POST['clientACrediter']], $_POST['montant']);
	$clients[$_POST['clientADebiter']]->afficherInformations();


}

include 'footer.php';

 ?>

