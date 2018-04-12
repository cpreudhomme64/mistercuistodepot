<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=mistercuisto;charset=utf8', 'root', 'pangot');
}
catch (Exception $e)
{
	die ('erreur :'.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM livredor');

while ($donnees = $reponse->fetch()) 
{
	?>
	<p>
	<strong>Nom</strong>:<?php echo $donnees['nom']?>; </br>
	<strong>Prénom</strong>:<?php echo $donnees['email']?>; </br>
	<strong>Commentaire</strong>:<?php echo $donnees['commentaire']?>; </br>
	</p>
	

<?php

}

$reponse->closeCursor();


?>

