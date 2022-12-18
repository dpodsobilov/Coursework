$("#input_form").submit(function(event){
	event.preventDefault(); 
	var request_method = $(this).attr("method"); 
	var form_data = $(this).serialize();
	$.ajax({
		url : "./algorithm.php",
		type: request_method,
		data : form_data
	}).done(function(response){ //
		$("#answer").html(response);
	});
});