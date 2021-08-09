$(document).ready(function() {
	$('.header_burger').click(function(event) {
		$('.header_burger,.header_nav,.language,.logo').toggleClass('active');
		$('body').toggleClass('lock');
	});
});

$(document).ready(function() {
	$('.triangle').click(function(event) {
		$('.language_switch, .triangle').toggleClass('active');
	});
});


