function addToCart() {
	//alert("in function");
	document.getElementById('btn1').onclick = function() {
		alert("button 1 was clicked");
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
				console.log(serializedData);
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
		
	};

	document.getElementById('btn2').onclick = function() {
		alert("button 2 was clicked");
		var request;
		$("#form2").submit(function(event) {
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
				console.log(serializedData);
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
	
	};
	

	// var request;
	// $(id).submit(function(event) {
	// 	event.preventDefault();

	// 	if (request) {
	// 		request.abort();
	// 	}

	// 	var $form = $(this);

	// 	var $inputs = $form.find("input, select, button, textarea");

	// 	var serializedData = $form.serialize();

	// 	$inputs.prop("disabled", true);

	// 	request = $.ajax({
	// 		url: "addToCart.php",
	// 		type: "post",
	// 		data: serializedData
	// 	});

	// 	request.done(function (response, textStatus, jqXHR) {
	// 		console.log(serializedData);
	// 	});

	// 	request.fail(function (jqXHR, textStatus, errorThrown) {
	// 		console.error(
	// 			"The following error occurred: " + textStatus, errorThrown
	// 			);
	// 	});

	// 	request.always(function() {
	// 		$inputs.prop("disabled", false);
	// 	});
	// });

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

