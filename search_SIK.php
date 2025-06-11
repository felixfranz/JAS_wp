

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
        <div class="col-12 header_text"><h1>Suchergebnis</h1></div>
        <div class="col-12 bottom-rounded_empty text-center" style="background-color: <?php echo get_field('bg_rounded_color'); ?>"></div>
      </div>
    </div>
  </section>
<!-- HEADER ende -->

  <!-- SEARCH RESULTS start -->
 
  <section class="section_standards">  
   <div class="container">

      
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">


    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

      <?php the_excerpt( '<span class="read-more">Mehr lesen</span>' ); ?>



<?php endwhile; ?>








         </div> 

         <?php else : ?>
         <h2>Leider nichts gefunden</h2>
       
      <?php endif; ?>
     
   </div>
 </section>

  <!-- SEARCH RESULTS end  -->

  
    
    <?php get_footer(); ?>

