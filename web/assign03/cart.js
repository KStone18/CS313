function addToCart() {

	$(document).ready(function() {
		$("button").click(function() {
			$.post("addToCart.php", 
			{
				product: productName;
				price: productPrice;

			})
		})
	})
	
}

