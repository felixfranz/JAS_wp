

<?php get_header(); ?>

<!-- HEADER start -->
<section id="header_start">
    <div class="container">
      <div class="row">
        <div class="col-12 header_text"><h1>Suchergebnis</h1></div>
        <div class="col-12 bottom-rounded_empty text-center bottom-rounded-blue"></div>
      </div>
    </div>
  </section>
<!-- HEADER ende -->

  <!-- SEARCH RESULTS start -->
 
  <section class="section_standards">  
   <div class="container">

		<div class="row gx-5 d-flex justify-content-center">
		<div class="col-lg-10">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt( '<span class="read-more">Mehr lesen</span>' ); ?>
				
				<?php endwhile; ?>

				<?php else : ?>
					<h2>Die Suche ergab leider keinen Treffer.</h2>
				<?php endif; ?>
			</div> 
		</div>
   </div>
 </section>

  <!-- SEARCH RESULTS end  -->

  
    
    <?php get_footer(); ?>

