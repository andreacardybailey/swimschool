$( function(){
  $.preload(
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
});

$(window).load(function(){
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider',
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel",
    start: function(slider){
      $('body').removeClass('loading');
      $('.flexslider').css('opacity', '1');
    }
  });

});

