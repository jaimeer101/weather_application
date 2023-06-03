$(document).ready(function(){
	$(document).on("click", "#btn_search", function(){
		search_weather();
	});
	
	$(document).on("keyup", "#txt_search_place", function(event){
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '13'){
			search_weather();
		}
		
	});
});

async function search_weather(){
	$("#btn_search").prop('disabled', true);
	$("#div_search_result").html(loading);
	error = "";
	searchValue = $("#txt_search_place").val();
	if(searchValue == ""){
		error = "No Search Parameter Detected";
	}
	if(error != ""){
		displayMessage = alert_message(error, "danger");
		$("#div_search_result").html(displayMessage);
		$("#btn_search").prop('disabled', false);
	}

	if(error == ""){
		searchResult = await search_weather_app(searchValue);
		$.ajax({
			url : "?controller=ajax&action=load_search_result", 
			type : "POST", 
			data : searchResult, 
			success : function(response){
				$("#div_search_result").html(response);
				$("#btn_search").prop('disabled', false);
			}
		});
		//console.log(searchResult);
		$("#btn_search").prop('disabled', false);
	}
	
}

async function search_weather_app(search){
	return $.ajax({
		url : "https://api.openweathermap.org/data/2.5/weather", 
		type : "GET", 
		data : {
			APPID : "36c9ca1c573e2fbc9779e9425ce46bb3", 
			q : search, 
			units : "metric"
		}, 
		dataType : "json", 
		error : function(xhr){
			response = $.parseJSON(xhr.responseText);
			message = response.message;
			displayMessage = alert_message(message, "danger");
			$("#div_search_result").html(displayMessage);
			$("#btn_search").prop('disabled', false);
		}
	});
}