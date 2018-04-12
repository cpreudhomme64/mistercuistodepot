<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/mistercuisto.css">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet"> 
    <script type="text/javascript" language="Javascript" src="js/mistercuisto.js"></script>
    
    
</head>

<body>
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
                      
			<form action="php/mistercuisto.php" method="post" name="formulaire">
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
