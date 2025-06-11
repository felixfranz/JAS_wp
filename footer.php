
</main>
  <!-- MAIN CONTENT end -->

   <!-- FOOTER start -->
<section id="footer">
  <div class="container">
    <div class="row gx-5 d-flex justify-content-center footer_3col">
      <div class="col-lg-4">
        <img class="footer_jas-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-jas.svg"/>

        <?php echo get_field('footer_links', 'option'); ?>

      </div>
      <div class="col-lg-4">
       
        <?php echo get_field('footer_rechts', 'option'); ?>

      </div>
      <div class="col-lg-2 text-center footer_logos img_links">
        <a href="https://samos.webuntis.com/WebUntis/?school=jas-ostbevern#/basic/login" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_untis.jpg" alt="Link zu WebUntis" /></a>
        <a href="#" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_mensa.jpg" alt="Link zum Mensaplan" /></a>
        <a href="https://jas-edu.de/iserv" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_iserv.jpg" alt="Link zu iServ" /></a>

      </div>
    </div>
  </div>

    <div class="footer_finalrow">
      <div class="container">
          <div class="row gx-5 d-flex justify-content-center">
            <div class="col-md-5 footer_finalcol"><p class="text-md-start">Impressum Datenschutz</p></div>
            <div class="col-md-5 footer_finalcol"><p class="text-md-end">© <?php echo date("Y"); ?> Josef-Annegarn-Schule</p></div>
          </div>
      </div>
    </div>
  

</section>


  <!-- FOOTER end -->






<!-- SCRIPTS start-->
    <script src="bootstrap533/js/bootstrap.bundle.min.js"></script>
<!-- SCRIPTS end-->
      
    <?php wp_footer();?>
  </body>
</html>