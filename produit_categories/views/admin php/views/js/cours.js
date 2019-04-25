function verif(){

console.clear();
var radio = "faux";

var choix1 = document.getElementById("check1").checked;
var choix2 = document.getElementById("check2").checked;

var reference = document.getElementById("Ref").value;
var duree = document.getElementById("Durée").value;
var nom = document.getElementById("nom").value;


	if ((choix1==true) || (choix2==true)) {
		radio = "vrai";
		console.log(radio);
	}
	else{
		console.log(radio);
	}

if ((reference=="") || (duree=="") || (nom=="") || (radio=="faux")) {
		swal("veuillez Remplir tous les champs");
		return
}
else{
	console.log("valider");
	swal("sucées", "Cours ajouté", "success");
}


}