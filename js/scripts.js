$(document).ready(function(){

	$('#winning-stats').css("visibility", "hidden");
	$('.play-again').hide();
	$('.btn1').click(function(event){
		$('#winning-stats').css("visibility", "");
		$('.player-prompt').hide();
		$('.play-again').show();
		event.preventDefault();
	});

	$('.btn2').click(function(event){
		document.location.reload();
	});
});