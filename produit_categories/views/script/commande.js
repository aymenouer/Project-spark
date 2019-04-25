function valid(){


var id = document.getElementById("id").value;
var quan = document.getElementById("quan").value;
var nom = document.getElementById("nom").value;
var prenom = document.getElementById("prenom").value;
var cin = document.getElementById("cin").value;






if ((id=="") || (quan=="") || (nom=="") || (prenom=="")  || (cin=="")) {
	alert("veuillez verifier votre choix")
}
else{



if  (quan>=10) 
{
	alert("Quantite maximale atteinte");
	return
}


	alert("Validé")
	console.log("valider");
}





	





}

