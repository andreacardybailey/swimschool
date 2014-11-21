
(function($) {

  // init slidebar plugin- used for pop-over mobile menu
	$.slidebars();

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

  $.preload(
    '/assets/images/logo.png',
    '/assets/images/main-lessons.jpg',
    '/assets/images/gallery/1.jpg',
    '/assets/images/gallery/2.jpg',
    '/assets/images/gallery/4.jpg',
    '/assets/images/gallery/5.jpg',
    '/assets/images/gallery/6.jpg',
    '/assets/images/gallery/7.jpg',
    '/assets/images/gallery/8.jpg',
    '/assets/images/gallery/9.jpg',
    '/assets/images/gallery/10.jpg',
    '/assets/images/gallery/11.jpg',
    '/assets/images/gallery/12.jpg',
    '/assets/images/gallery/13.jpg',
    '/assets/images/gallery/15.jpg',
    '/assets/images/gallery/16.jpg',
    '/assets/images/gallery/17.jpg'
  );

}) (jQuery);


