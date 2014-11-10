      <footer>
        <div class="footer-copyright">
          <div class="ss-wrapper">
            &copy; 2014 Saint Andrew's Swim School. All Rights Reserved.
          </div>
        </div>
      </footer>
    </div>
    <script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/assets/javascripts/vendor/slidebars.js" type="text/javascript" charset="utf-8"></script>
    <script src="/assets/javascripts/swimschool.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      // hide address bar for mobile devices
      (function($){
        if( !window.location.hash && window.addEventListener ){
          window.addEventListener( "load",function() {
              setTimeout(function(){
                  window.scrollTo(0, 0);
              }, 0);
          });
        }
      })(jQuery);
    </script>
  </body>
</html>