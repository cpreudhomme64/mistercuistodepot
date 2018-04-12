<?php

//Récupération des variables du formulaire livre d'or

$nom = $_POST['nom'];
$email = $_POST['email'];
$commentaire = $_POST['commentaire'];

 
// Rédaction du mail
$objet = 'Merci de votre commentaire' ;
$contenu = '
<html>
	<body>
		<p>Bonjour Mr/Mmme '.$nom.'</p>
		<p>Je vous remercie pour votre commentaire</p>
		</body>
</html>';

$entetes =
'Content-type: text/html; charset=utf-8' . "\r\n" .
'From: toto@gmail.com' . "\r\n" .
'Reply-To: toto@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
                         
//Envoi du mail
mail($mail, $objet, $contenu, $entetes);

?>

















































