/*-----------On récupère les données du livre d'or-------*/

    function soumettre(){
		
		var nom = document.getElementById("nom").value;
		var email = document.getElementById("email").value;
		var commentaire = document.getElementById("commentaire").value;
		
		/*alert('Votre commentaire : '+commentaire);
		alert('Votre email est  '+email);
		alert('Votre nom est  '+nom);*/
		
		alert('Votre nom est  '+nom+'\nVotre email est  '+email+'\nVotre commentaire : '+commentaire);
			
		}
	   
 /*-----------On récupère les données du formulaire de contact-------*/

    function soumettreresa(){
		
		var nom = document.getElementById("nom").value;
		var prenom = document.getElementById("prenom").value;
		var email = document.getElementById("email").value;
		var telephone = document.getElementById("telephone").value;
		var mobile = document.getElementById("mobile").value;
		var adresse = document.getElementById("adresse").value;
		
		/*alert('Votre commentaire : '+commentaire);
		alert('Votre email est  '+email);
		alert('Votre nom est  '+nom);*/
		
		alert('Votre nom est  '+nom+'\nVotre prénom est  '+prenom+'\nVotre email est '+email+'\nVotre téléphone fixe est '+telephone+'\nVotre mobile est '+mobile+'\nVotre adresse est '+adresse);
			
		}	
 
 
  

/*----- validation en vert de la valeur email-------------*/

/*function valider(id) {

    
    if (document.formulaire.email.value == '') 
    
    {	
		alert ( "Veuillez entrer une adresse mail valide!" );	
		document.getElementById(id).style.background = #1ADF1A;
             return true;

    } else {
		alert ( " email valide" );
        document.getElementById(id).style.background = #1ADF1A;

        return false;

    }


}
*/
