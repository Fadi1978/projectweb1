	document.getElementById("ajouter").addEventListener("submit", function(e) {
 
	var erreur;
 
	var inputs = this.getElementsByTagName("input");
 
	for (var i = 0; i < inputs.length; i++) {
		console.log(inputs[i]);
		if (!inputs[i].value) {
			erreur = "Veuillez renseigner tous les champs";
		}
	}
 
	if (erreur) {
		e.preventDefault();
		document.getElementById("erreur").innerHTML = erreur;
		return false;
	} else {
		alert('Formulaire envoyé !');
	}
 
 
	var id_promo = document.getElementById("id_promo");
	var date_debut = document.getElementById("date_debut");
	var date_fin = document.getElementById("date_fin");
	var id_categorie = document.getElementById("id_categorie");
 	var nouv_prix = document.getElementById("nouv_prix");

	if (!id_promo.value) {
		erreur = "Veuillez renseigner un id_promo";
	}
	if (!date_debut.value) {
		erreur = "Veuillez renseigner un datedebut";
	}
	if (!date_fin.value) {
		erreur = "Veuillez renseigner un date fin";
	}
	if (!id_categorie.value) {
		erreur = "Veuillez renseigner un id categorie";
	}
	if (!nouv_prix.value) {
		erreur = "Veuillez renseigner une nouvelle prix";
	}
	
 
	
});