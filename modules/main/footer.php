      <footer>
        <div class="footer-copyright">
          <div class="ss-wrapper">
            <ul>
              <li>&copy; <?php echo date("Y") ?> Florida Swim School</li>
              <li><span>&nbsp;&bull;&nbsp;&nbsp;</span>3900 Jog Road, Boca Raton, FL 33434</li>
            </ul>
            <a href="http://www.bocaratonchamber.com/" target="_blank" class="chamber-logo">Boca Raton Chamber of Commerce. Serving South Palm Beach County.</a>
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
    <!--[if (gt IE 8) | (IEMobile)]><!-->
      <script src="/assets/javascripts/preload.js" type="text/javascript" charset="utf-8"></script>
    <!--<![endif]-->

      <?php if ($current == "gallery"): ?>
        <script src="/assets/javascripts/vendor/jquery.flexslider-min.js" type="text/javascript" charset="utf-8"></script>
        <script src="/assets/javascripts/gallery.js" type="text/javascript" charset="utf-8"></script>
      <?php endif;?>
      <?php if ($current == "contact"): ?>
        <script src="/assets/javascripts/vendor/jquery.validate.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="/assets/javascripts/contact.js" type="text/javascript" charset="utf-8"></script>
      <?php endif;?>
    <!--[if (lt IE 9) & (!IEMobile)]>
      <script src="/assets/javascripts/vendor/ie/webfont_fix.js" type="text/javascript" charset="utf-8"></script>
      <script src="/assets/javascripts/vendor/ie/ie.js" type="text/javascript" charset="utf-8"></script>
    <![endif]-->
  </body>
</html>