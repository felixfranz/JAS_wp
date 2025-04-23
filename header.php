<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Koltrast">
    <meta name="generator" content=" ">
    <title>JAS</title>

    

<!-- Bootstrap core CSS -->
<link href="<?php echo get_template_directory_uri(); ?>/bootstrap533/css/bootstrap.min.css" rel="stylesheet">
    
<!-- Custom styles for this template -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />

<?php wp_head();?>
  </head>

  <body <?php body_class(); ?> >

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

              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_untis.jpg" /></a>
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_mensa.jpg" /></a>
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_iserv.jpg" /></a>

            </div>

      <form role="search" method="get" id="searchform_mobile" class="searchform" action="<?php echo home_url( '/' ); ?>">
            
        <input class="form-control me-2" type="search" name="s" placeholder="Suchbegriff" aria-label="Search" value="">
        <button class="btn btn-outline-success" type="submit">Suchen</button>
       
      </form>
        </div>
		</div>
    <!-- OVERLAY NAV end -->  

<!-- HEADER start -->  
			<header class="header" id="header">

				<div id="inner-header" class="container">
					
					<div id="logo" ><a href="<?php echo home_url(); ?>"></a></div>
					
					<div class="nav_container_desktop">

						<nav role="navigation" >
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'Primary Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav primary-nav',               // adding custom nav class
    					         'theme_location' => 'primary-menu',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

      <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
            
        <input class="" type="search" name="s" placeholder="Suchbegriff" aria-label="Search" value="">
        <button class="btn btn-outline-success" type="submit" id="searchsubmit">Suchen</button>
         <a href="#" class="search_toggle"><span><i class="fa-solid fa-magnifying-glass"></i></span></a>
       
      </form>

						</nav>
						
					</div>
				

				</div>

			</header>
<!-- HEADER end -->


<!-- NAV end -->  

<!-- MAIN CONTENT start -->
<main>