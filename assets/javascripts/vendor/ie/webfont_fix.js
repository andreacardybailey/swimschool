// IE8 has a browser bug pertaining to :before and :after pseudo elements that prevents consistent
// webfont presentation. This script lets IE8 redraw all :before and :after pseudo elements this
// script will only work consistently when used with additional @font-face declaration.

$(function(){
  (function(w){
    var head = document.getElementsByTagName('head')[0],
    style = document.createElement('style');
    style.type = 'text/css';
    style.styleSheet.cssText = ':before,:after{content:none !important}';
    head.appendChild(style);
    setTimeout(function(){
      head.removeChild(style);
    },100);
  })(this);
});
