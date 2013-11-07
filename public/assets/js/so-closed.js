
/*
	Fonction permettant d'ajouter un article au panier
*/
function addItemToCart() {
	
	var obj = document.getElementById("form_ID_PROD");
	var URL_ROOT = "http://localhost/website_soclosed/public/";

    $.get(URL_ROOT + 'cart_add_item', { id: obj.value } ).done(function( data ) {
		alert( "Data Loaded: " + data );
	});

}