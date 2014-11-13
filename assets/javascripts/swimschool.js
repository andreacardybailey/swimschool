
(function($) {
	$(document).ready(function() {
		$.slidebars();
	});

  var isTouchEnabled = ("ontouchstart" in window) || window.DocumentTouch && document instanceof DocumentTouch;

  // add class to each touch enabled link. Used to diable hover states.
  if (isTouchEnabled == true) {
    $("a").each(function() {
      $(this).addClass('isTouchEnabled');
    })
  }

}) (jQuery);


