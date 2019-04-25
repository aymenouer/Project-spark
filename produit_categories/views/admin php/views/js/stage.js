
console.log("linked")
	document.getElementById("ajout").style.display='none';
	document.getElementById("verif").style.display='block';	
function verif(){
	console.log("log");

	var nom = document.getElementById("nom").value;
	var lieu = document.getElementById("lieu").value;
	var formateur = document.getElementById("formateur").value;
	var programme = document.getElementById("programme").value;

	if((nom=="") || (lieu=="") || (formateur=="") || (programme==""))
	{
		swal("veuillez Remplir tous les champs");
		return;
	}
	else{
		swal("sucées", "Competition ajoutée", "success");
		
		document.getElementById("verif").style.display='none';
		document.getElementById("ajout").style.display='block';
		
		return;
	}


}


