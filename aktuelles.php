<?php /* Template Name: JAS Aktuelles */ ?>

<?php get_header(); ?>

<!-- HEADER start -->
<section id="header_start">
    <div class="container">
      <div class="row">
        <div class="col-12 header_pic">
          
        <?php $pic = get_field('intro_pic');
               if( !empty( $pic ) ): ?>
               <img src="<?php echo esc_url($pic['url']); ?>" alt="<?php echo esc_attr($pic['alt']); ?>" />
               <?php endif; ?>

        </div>
        <div class="col-12 header_text"><h1><?php echo get_field('intro_headline'); ?></h1></div>
        <div class="col-12 bottom-rounded text-center img_links" style="background-color: <?php echo get_field('bg_rounded_color'); ?>"><a href="https://samos.webuntis.com/WebUntis/?school=jas-ostbevern#/basic/login" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_untis.jpg" alt="Link zu WebUntis" /></a><a href="#" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_mensa.jpg" alt="Link zum Mensaplan" /></a><a href="https://jas-edu.de/iserv" taget="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_iserv.jpg" alt="Link zu iServ" /></a></div>
      </div>
    </div>
  </section>


  <!-- AKTUELLES start -->
  <section id="aktuelles">  
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-10">

          <div class="container">

            <!-- Einträge abfragen cat=0 sind alle Kategorien, showposts=10 zeigt 10 Artikel an -->
            <?php 

            $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'cat' => '0',
                'posts_per_page' => 2,
                'paged' => $page
            );

            query_posts($args);
            
  
            
            ?>
                <!-- 2. Loop für die Artikel -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
              
<!-- Eintrag START -->
            <div class="row justify-content-md-center akt_eintrag">
              <div class="col-lg-2 akt_eintrag_date ">
              <?php echo get_the_date( 'm.d.Y' ); ?>
              </div>
              <div class="col-lg-10 akt_eintrag_title ">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
              <div class="col-lg-12 cool-dots cool-dots-box"></div>
            </div>
<!-- Eintrag END -->

<?php endwhile;?>



       <?php endif;  ?>
            

        </div>

      </div>
    </div>
  </section>


  <!-- TEMPLATE PARTS start -->
 
<?php include("inc/template_parts.php"); ?>

  <!-- TEMPLATE PARTS end  -->

  
    
    <?php get_footer(); ?>

