$(window).load(function(){
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    useCSS: false,
    easing: "easeInQuint",
    animationSpeed: 700,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    useCSS: false,
    easing: "easeInOutQuint",
    animationSpeed: 700,
    sync: "#carousel",
    start: function(slider){
      $('body').removeClass('loading');
      $('.flexslider').css('opacity', '1');
    }
  });
});

