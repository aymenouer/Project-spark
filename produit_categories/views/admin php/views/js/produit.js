	document.getElementById("ajout").style.display='none';
	document.getElementById("verif").style.display='block';	

function verif(){
var radio = "faux";

var choix1 = document.getElementById("etat1").checked;
var choix2 = document.getElementById("etat2").checked;



var id = document.getElementById("id").value;
var lib = document.getElementById("lib").value;
var prix = document.getElementById("prix").value;
var quan = document.getElementById("quan").value;
var desc = document.getElementById("desc").value;


	if ((choix1==true) || (choix2==true)) {
		radio = "vrai";
		console.log(radio);
	}
	else{
		console.log(radio);
	}

	

if ((id=="") || (lib=="") || (radio=="faux") || (prix=="") || (quan=="")  || (desc=="")) {
	alert("veuillez Remplir tous les champs");
	return
}
else{



if  (prix<=0) 
{
	alert("Prix negatif");
	return
}

if  (quan<=0) 
{
	alert("quantite negative ");
	return
}


	alert("sucées", "Abonnement ajouté avec Succès", "success");
		document.getElementById("verif").style.display='none';
		document.getElementById("ajout").style.display='block';
}




	console.log("valider");



}

