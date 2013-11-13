
/*
	Fonction permettant d'ajouter un article au panier
*/
function addItemToCart() {
	
	var obj = document.getElementById("form_id_item");
	var URL_ROOT = "http://localhost/website_soclosed/public/";

    $.get(URL_ROOT + 'cart_add_item', { id: obj.value } ).done(function( data ) {
		/*
		Pour afficher un objet en provenance d'un tableau	
		alert( "Le produit " + data.name + " a bien été ajouté au panier" );*/
		alert( "Le produit " + data + " a bien été ajouté au panier" );
	});

}

/*
	Fonction permettant de retirer un article au panier
*/
function removeItemToCart( item_id ) {
	var URL_ROOT = "http://localhost/website_soclosed/public/";

	document.getElementById(item_id).remove();

    $.get(URL_ROOT + 'cart_remove_item', { id: item_id } );

}
/*
	Fonction permettant de vider le panier
*/
function clearCart() {
		
	var URL_ROOT = "http://localhost/website_soclosed/public/";   

	$.get(URL_ROOT + 'clear_cart', function( data ) {
		alert( "Votre panier est maintenant vide" );
	});

}