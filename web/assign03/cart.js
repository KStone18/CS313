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
			document.getElementById('cart').innerHTML = data //console.log(data);
		}
	})
	
}

function removeFromCart(id) {
	$.ajax ({
		type: "POST", 
		url: "removeFrom.php",
		data: { id: id},
		success: function(data) {
			//console.log(data);
			document.getElementById('cart').innerHTML = data
			location.reload()
		}
	})
}

function redirect() {
	var btn = document.getElementById('myBtn');
	
	btn.addEventListener('click', function() {
  	document.location.href = 'some/page';
	});
}
