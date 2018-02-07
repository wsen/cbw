
function createColor() {
	var rot = $('#r').val();
	var gruen = $('#g').val();
	var blau = $('#b').val();
	
	$('#ausgabe').css('backgroundColor', 'rgb('+rot+','+gruen+','+blau+')');
	$('#rgb_farbe').html('rgb('+rot+','+gruen+','+blau+')');
}