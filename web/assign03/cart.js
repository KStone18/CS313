function addToCart() {
	alert("in function");
	var request;

	$("#form1").submit(function(event) {
		event.preventDefault();

		if (request) {
			request.abort();
		}

		var $form = $(this);

		var $inputs = $form.find("input, select, button, textarea");

		var serializedData = $form.serialize();

		$inputs.prop("disabled", true);

		request = $.ajax({
			url: "addToCart.php",
			type: "post",
			data: serializedData
		});

		request.done(function (response, textStatus, jqXHR) {
			console.log("Hooray, it worked!");
		});

		request.fail(function (jqXHR, textStatus, errorThrown) {
			console.error(
				"The following error occurred: " + textStatus, errorThrown
				);
		});

		request.always(function() {
			$inputs.prop("disabled", false);
		});
	});

	// $(document).ready(function() {
	// 	$("button").click(function() {
	// 		$.post("addToCart.php", 
	// 		{
	// 			product: productName;
	// 			price: productPrice;

	// 		})
	// 	})
	// })
	
}

