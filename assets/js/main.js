
(function ($) {

	var $window = $(window),
		$body = $('body'),
		$header = $('#header'),
		$all = $body.add($header);



	// Play initial animations on page load.
	$window.on('load', function () {
		setTimeout(function () {
			$body.fadeIn(400);
		}, 30);
	});



})(jQuery);