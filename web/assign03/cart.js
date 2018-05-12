function addToCart(name, price, id) {
	//alert("in cart func");
	var name = name;
	var price = price;
	var id = id;

	$.ajax({
		type: "POST",
		url: "addToCart.php",
		data: { id: id, name: name, price: price },
		success: function(data) {
			document.getElementById('cart').innerHTML = data; //console.log(data);
		}
	})
	
}

function removeFromCart(id) {
	var id = id;

	$.ajax ({
		type: "POST", 
		url: "removeFromCart.php",
		data: { id: id},
		success: function(data) {
			document.getElementById('cart').innerHTML = data; 
		}
	})
}

