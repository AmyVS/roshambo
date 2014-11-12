$(document).ready(function(){
	$('#winning-stats').css("visibility", "hidden");
	$('.play-again').hide();
	$('form').submit(function(event){
		$('#winning-stats').css("visibility", "");
		$('.player-prompt').hide();
		$('.play-again').show();
		event.preventDefault();
	});

	$('button').click(function(event){
		document.location.reload();
	});
});