<?php 
include 'header.php';
 ?>
  <h1>Voici la liste des clients  </h1>

<?php 
	echo "<table class='table'>";
    echo "<tr><th>Numero</th><th>Nom</th><th>Prenom</th><th>Adresse</th><th>Decouvert</th><th>Solde</th></tr>";
         
	foreach ($clients as $unClient) {
                echo "<tr>";
                
                echo "<td>";
                echo $unClient->getNumero();
                echo "</td>";
                
                echo "<td>";
                echo strtoupper($unClient->getNom());
                echo "</td>";

                echo "<td>";
                echo $unClient->getPrenom();
                echo "</td>";

                echo "<td>";
                echo $unClient->getAdresse();
                echo "</td>";

                echo "<td>";
                echo $unClient->getCompte()->getDecouvert();
                echo "</td>";                

                echo "<td>";
                echo $unClient->getCompte()->getSolde() . "€";
                echo "</td>";
                               
                echo "</tr>";
            }
  
	echo "</table>";

 ?>