	document.getElementById("ajout").style.display='none';
	document.getElementById("verif").style.display='block';	
function verif(){
	console.log("log");
	var nom = document.getElementById("nom").value;
	var lieu = document.getElementById("lieu").value;
	var prix = document.getElementById("prix").value;

	if((nom=="") || (lieu=="") || (prix==""))
	{
		swal("Veuillez verifier votre choix");
		return
	}
	else{
		swal("sucées", "Sortie ajoutée", "success");
		document.getElementById("verif").style.display='none';
		document.getElementById("ajout").style.display='block';
	}


}

