
	document.getElementById("ajout").style.display='none';
	document.getElementById("verif").style.display='block';	
function verif(){
	console.log("log");

	var nom = document.getElementById("nom").value;
	var nbre = document.getElementById("nbre").value;
	var lieu = document.getElementById("lieu").value;

	if((nom=="") || (nbre=="") || (lieu==""))
	{
		alert("veuillez Remplir tous les champs");
		return false;
	}
	if((nbre>=16) || (nbre<0)){
		alert("Nombre de participants eronné");
		return false;
	}
	else{
		alert("success");
		
		document.getElementById("verif").style.display='none';
		document.getElementById("ajout").style.display='block';
		
		return true;
	}


}


