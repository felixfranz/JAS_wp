
</main>
  <!-- MAIN CONTENT end -->

   <!-- FOOTER start -->
<section id="footer">
  <div class="container">
    <div class="row gx-5 d-flex justify-content-center footer_3col">
      <div class="col-lg-4">
        <img class="footer_jas-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-jas.svg" alt="Logo Josef-Annegarn-Schule" />

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
            <div class="col-md-5 footer_finalcol"><p class="text-md-start"><a href="<?php echo get_permalink( get_page_by_path( 'service/impressum' ) ); ?>">Impressum</a> <a href="<?php echo get_permalink( get_page_by_path( 'service/datenschutz' ) ); ?>">Datenschutz</a></p><a href="<?php echo get_field('instagram_link', 'option'); ?>" target="_blank">Instagram</a></div>
            <div class="col-md-5 footer_finalcol"><p class="text-md-end">© <?php echo date("Y"); ?> Josef-Annegarn-Schule</p></div>
          </div>
      </div>
    </div>
  

</section>

<!-- NAV TOGGLE -->    
<a class="nav_toggle" href="#"> 
		<span class="type">MENU</span><span class="bars"></span>
	</a>
 
<!--OVERLAY NAV start -->    
		<div class="nav_container_mobile">
			<div class="nav_content container">

					<nav role="navigation" >

						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'menu' => __( 'Overlay Menu'),  // nav name
    					         'menu_class' => 'nav mobile-nav',               // adding custom nav class
    					         'theme_location' => 'overlay-menu',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); 

          ?>
          </nav>
          <nav>
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'menu' => __( 'Secondary Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav secondary-overlay-nav',               // adding custom nav class
    					         'theme_location' => 'secondary-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

						</nav>

            <div class="image-links">

              <a href="https://samos.webuntis.com/WebUntis/?school=jas-ostbevern#/basic/login" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_untis.jpg" alt="Link zu WebUntis" /></a>
              <a href="#" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_mensa.jpg" alt="Link zum Mensaplan" /></a>
              <a href="https://jas-edu.de/iserv" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_iserv.jpg" alt="Link zu iServ" /></a>

            </div>
		<div class="overlay_footer">
			<form role="search" method="get" id="searchform_mobile" class="searchform" action="<?php echo home_url( '/' ); ?>">
					
				<input class="form-control me-2" type="search" name="s" placeholder="Suchbegriff" aria-label="Search" value="">
				<button class="btn btn-outline-success" type="submit">Suchen</button>
			
			</form>

			<a href="<?php echo get_field('instagram_link', 'option'); ?>" class="social_icon" target="_blank">Instagram<span><i class="fab fa-instagram" aria-hidden="true"></i></span></a>

	  </div>	 <!-- OVERLAY 	FOOTER end -->  

        </div>
		</div>
    <!-- OVERLAY NAV end -->  


  <!-- FOOTER end -->






<!-- SCRIPTS start-->
    <script src="bootstrap533/js/bootstrap.bundle.min.js"></script>
<!-- SCRIPTS end-->
      
    <?php wp_footer();?>
  </body>
</html>