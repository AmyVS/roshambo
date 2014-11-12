$(document).ready(function(){
	$('#winning-stats').css("visibility", "hidden");
	$('form').submit(function(event){
		$('#winning-stats').css("visibility", "");
		event.preventDefault();
	});
});