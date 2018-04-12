<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/mistercuisto.css">
    <!--<link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore|Stylish" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet"> 
    <script type="text/javascript" language="Javascript" src="js/mistercuisto.js"></script>
    
    
</head>

<body>
	
	<?PHP

//Pour se connecter à MySQL via PDO, une extension orientée objet(permet de se connecter à n'importe quelle base de données)
//le nom de l'hôte, la base de données, le login, le mdp

$bdd = new PDO('mysql:host=localhost;dbname=mistercuisto;charset=utf8', 'root', 'pangot');



//On récupere les valeurs du formulaire

$nom = $_POST['nom'];

$email = $_POST['email'];

$commentaire = $_POST['commentaire'];

$connect = mysql_connect($host, $user, $mdp) ;


//On teste si les champs sont remplis


<?php
if(!empty($_POST['nom']))
{
echo 'le champ est bien rempli';
}
else
{
echo 'Pas bon';
}
?> 





//On insère les valeurs du formulaire dans la table mistercuisto

//$sql="insert into mistercuisto (nom , email, com) values ('$nom','$email','$com')" ;

//$result = mysql_query('$sql');



//On ferme la connexion à la base de données

//mysql_close();

//?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <header>
		
		
		<section id="titre_principal">
			<img class="logo" src="image/logo.jpg" alt="Logo du site" />
            <h1>Mister Cuisto La Fabrique du petit mangé</h1>
 
        </section>
        
			<nav>
				<ul>
					<li> <a href="index.html">Accueil</a></li>        
					<li> <a href="menus.html">Menus de la semaine</a></li>
					<li> <a href="livredor.html">Livre d'or</a></li>
					<li> <a href="nouscontacter">Vous voulez nous contacter?</a></li>
				</ul>
			</nav>
			

    </header>
    <main>
		
		 <section class="formulaire">
			<div> <img class="plat" src="image/fond3.jpg" alt="Image fond" /> </div>
                      
			<form action="livredorformulaire.php" method="post" name="formulaire">
				<h1>Le livre d'or</h1>  
			
				<legend>Laissez-moi vos coordonnées :</legend>
				<label for="nom">Votre nom</label>
				<input type="text" required name="nom" id="nom"/>
				<label for="email">Votre email :</label>
				<input type="email" required name="email" size="40" maxlength="40" id="email" />
		
				<label for="commentaire">Laissez-moi vos commentaires :</label>
				<textarea name="commentaire" required id="commentaire" cols="20" rows="8"></textarea>
	
				<p>
					<button type="submit" onclick="soumettre()">Envoyer</button>
					<button type="reset">Annuler</button>
				</p>

			</form>
            
            
        </section>
     
   </main>

</body>

</html>
