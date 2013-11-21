
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

function delivery_checkbox_event() {
	if(document.getElementById('optionsRadios2').checked  == true) {
		document.getElementById('recipient-custom').disabled = false;
		document.getElementById('address-custom').disabled = false;
		document.getElementById('zip-code-custom').disabled = false;
		document.getElementById('city-custom').disabled = false;
	}else{
		document.getElementById('recipient-custom').disabled = true;
		document.getElementById('address-custom').disabled = true;
		document.getElementById('zip-code-custom').disabled = true;
		document.getElementById('city-custom').disabled = true;
	}
}

function popup_twitter_guest() {

	width = 600;
	height = 300;

	if(window.innerWidth) {
		var left = (window.innerWidth-width)/2;
		var top = (window.innerHeight-height)/2;
	}
	else {
		var left = (document.body.clientWidth-width)/2;
		var top = (document.body.clientHeight-height)/2;
	}

	window.open('https://twitter.com/share?url=http://www.google.fr','twitter_guest','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
}