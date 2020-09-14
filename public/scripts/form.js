$(document).ready(function() {

	document.querySelector(".create-user").onclick = function register(event){
			event.preventDefault();
		let userName = $(".user-name");
		let password = $(".password");
		let data = {
			user_name: userName.val(),
			password: password.val()
		}

		$.ajax({
			type: "post",
			url: "/account/registration",
			data: JSON.stringify(data),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				// filtr
				console.log(result)
				window.location = "/account/profile"
			},
		});
		console.log(data);
	}

	// $('form').submit(function(event) {
	// 	var json;
	// 	console.log($(this).attr('action'));
	// 	event.preventDefault();
	// 	$.ajax({
	// 		type: $(this).attr('method'),
	// 		url: $(this).attr('action'),
	// 		data: new FormData(this),
	// 		contentType: false,
	// 		cache: false,
	// 		processData: false,
	// 		success: function(result) {
	// 			json = jQuery.parseJSON(result);
	// 			if (json.url) {
	// 				window.location.href = json.url;
	// 			} else {
	// 				alert(json.status + ' - ' + json.message);
	// 			}
	// 		},
	// 	});
	// });
});