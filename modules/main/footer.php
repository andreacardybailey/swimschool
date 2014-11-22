      <footer>
        <div class="footer-copyright">
          <div class="ss-wrapper">
            &copy; <?php echo date("Y") ?> Florida Swim School. All Rights Reserved.
          </div>
        </div>
      </footer>
    </div>

    <!--[if (gt IE 8) | (IEMobile)]><!-->
      <script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" src="/assets/javascripts/vendor/jquery.preload.min.js"></script>
    <!--<![endif]-->
    <!--[if (lt IE 9) & (!IEMobile)]>
      <script src="/assets/javascripts/vendor/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
    <![endif]-->
    <script src="/assets/javascripts/vendor/slidebars.js" type="text/javascript" charset="utf-8"></script>
    <script src="/assets/javascripts/swimschool.js" type="text/javascript" charset="utf-8"></script>
      <?php if ($current == "gallery"): ?>
        <script src="/assets/javascripts/vendor/jquery.flexslider-min.js" type="text/javascript" charset="utf-8"></script>
        <script src="/assets/javascripts/gallery.js" type="text/javascript" charset="utf-8"></script>
      <?php endif;?>
    <!--[if (lt IE 9) & (!IEMobile)]>
      <script src="/assets/javascripts/vendor/ie/webfont_fix.js" type="text/javascript" charset="utf-8"></script>
      <script src="/assets/javascripts/vendor/ie/ie.js" type="text/javascript" charset="utf-8"></script>
    <![endif]-->
  </body>
</html>