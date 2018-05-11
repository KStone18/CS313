function addToCart(name, price) {
	alert("in cart func");
	var name = name;
	var price = price;

	$.ajax({
		type: "POST",
		url: "addToCart.php",
		data: { name: name, price: price },
		success: function(data) {
			console.log(data);
		}
	})
	
}

