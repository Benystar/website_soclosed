function ajouterPanier() {
	
	var obj = document.getElementById("form_ID_PROD");

	if(window.XMLHttpRequest) // FIREFOX
		xhr_object = new XMLHttpRequest();
	else if(window.ActiveXObject) // IE
		xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
	else
		return(false);

	// ON APPELLE LA PAGE
	xhr_object.open("GET", "/test_js", true);
	xhr_object.send(null);
	// ON AFFICHE UNE SECONDE LIGNE DANS LE DIV
	obj.innerHTML += "Apres la requete : OK<br />";
	// ON AFFICHE LE RESULTAT DANS LE DIV
	res = "Contenu du fichier : "+xhr_object.responseText;
	obj.innerHTML += res;

   	alert('le champ a pour valeur : "'+obj.value+"'");
	
}