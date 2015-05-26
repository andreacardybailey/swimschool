
(function($) {

  // init slidebar plugin- used for pop-over mobile menu
	$.slidebars();

  // init slide down messaging
  // $( ".header-alert-message" ).animate({
  //     top:0
  //   }, 400, function() {
  //     setTimeout(function() {
  //       $( ".header-alert-message" ).animate({
  //           top:-100
  //         }, 400)
  //     }, 1600);
  //   });

  // touch device support
  var isTouchEnabled = ("ontouchstart" in window) || window.DocumentTouch && document instanceof DocumentTouch;

  // on touch devices...
  if (isTouchEnabled == true) {
    // add class to each link - used to disable hover states
    $("a").each(function() {
      $(this).addClass('isTouchEnabled');
    })
    // hide address bar on mobile devices
    if( !window.location.hash && window.addEventListener ){
      window.addEventListener( "load",function() {
          setTimeout(function(){
              window.scrollTo(0, 0);
          }, 0);
      });
    }
  }
}) (jQuery);


