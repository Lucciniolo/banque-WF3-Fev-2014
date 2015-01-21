<?php 
// autoload
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});


?>
<html>
<head>
	<title>Les classes de joueurs</title>
</head>
<body>
<?php 
	$lancelot = new Chevalier;
	$igor = new Guerrier;
	$pnj = new Personne;
	$pnj->setNom("Soldat Dane");

	echo $lancelot->sourire($pnj);
	echo "<br>";
	echo $lancelot->donner(100);
	echo "<br>";
	echo $lancelot->demonstrationForce();
	echo "<br>";
	echo $igor->demonstrationForce();
 ?>

</body>
</html>