<?php

//---------$_POST['prenom'] nom de la variable dans laquelle on va mettre les valeurs prénom
//INSERT INTO livredor (nom, email, com) VALUES ('', '', ...)

//Pour se connecter à MySQL via PDO, une extension orientée objet(permet de se connecter à n'importe quelle base de données)
//le nom de l'hôte, la base de données, le login, le mdp


//On déclare les variables en rapport avec les champs du formulaire

$nom = $_POST['nom'];
$email = $_POST['email'];

// TRY Test de connexion et envoi d'un message d'erreur si problème de connexion
// CATCH Si erreur, on affiche un message d'erreur

// si tout va bien on continue
// INSERT INTO On ajoute une entrée dans la table livredor
// QUERY  On récupère tout le contenu de la table livredor
// WHILE   On affiche chaque entrée une à une
// CLOSECURSOR  Termine le traitement de la requête et remet le curseur au début


try 
{
	$bdd = new PDO('mysql:host=localhost;dbname=mistercuisto;charset=utf8', 'root', 'pangot');
}
catch (Exception $e) 
{
	die ('erreur : '.$e->getMessage());
}


$bdd->exec('INSERT INTO livredor(nom, email, commentaire) VALUES('nom', 'email', 'commentaire')')


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


































//$connect = mysql_connect($host, $user, $mdp) ;




//On teste si les champs sont remplis



//if(!empty($_POST['nom']))
//{
//echo '   le champ est bien rempli';
//}
//else
//{
//echo 'Pas bon';
//}



//On insère les valeurs du formulaire dans la table mistercuisto

//$sql="insert into mistercuisto (nom , email, com) values ('$nom','$email','$com')" ;

//$result = mysql_query('$sql');



//On ferme la connexion à la base de données

//mysql_close();

//?>

 




