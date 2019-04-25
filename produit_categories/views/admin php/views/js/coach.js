function verif(){

console.clear();


var nom = document.getElementById("nom").value;
var prenom = document.getElementById("prenom").value;
var mail = document.getElementById("mail").value;
var trouv="faux";

for (var i = mail.length - 1; i >= 0; i--) {
	if(mail[i]=='@'){
		trouv="vrai";
	}
}


if ((nom=="") || (prenom=="") || (mail=="")) {
	swal("veuillez Remplir tous les champs");
	return
}

else if (trouv!="vrai") {
	swal("l'adresse doit contenir '@'");
	return
}
else{
	console.log("valider");
	swal("sucées", "Coach ajouté avec Succès", "success");
}


}