
<?php get_header(); ?>

<!-- HEADER start -->
<section id="header_start">
    <div class="container">
      <div class="row">
          <div class="col-12 single_post_header_text">
            <p class="single_subhead">Aktuelles</p>
            <h1><?php the_title(); ?> </h1></div>

            <div class="col-12 single_post_bottom-rounded">
              <div class="date_block text-center">
                <span class="date_dm"><?php $post_day_month = get_the_date( 'j. F' ); echo $post_day_month; ?></span>
                <span class="date_y">
                  <?php $post_year = get_the_date( 'Y' ); echo $post_year; ?>
                </span>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

<!-- 1col CONTENT start -->

  <section class="section_standards">  
   <div class="container">
  
         <div class="row gx-5 d-flex justify-content-center">
            <div class="col-lg-10">
            <!-- Bild VOR content start -->
            <?php $pic1 = get_field('pic1');
               if( !empty( $pic1 ) ): ?>
               <img class="img-fluid" src="<?php echo esc_url($pic1['url']); ?>" alt="<?php echo esc_attr($pic1['alt']); ?>" />
               <?php endif; ?> 
            <!-- Bild VOR content end -->    

                <?php the_content(); ?>

            <!-- Bild NACH content start -->
            <?php $pic2 = get_field('pic2');
               if( !empty( $pic2 ) ): ?>
               <img class="img-fluid" src="<?php echo esc_url($pic2['url']); ?>" alt="<?php echo esc_attr($pic2['alt']); ?>" />
               <?php endif; ?> 
            <!-- Bild NACH content end -->  
                
            </div>
         </div>       
     
   </div>
 </section>

 <!-- 1col CONTENT end -->

  <!-- TEMPLATE PARTS start -->
 
<?php include("inc/post_parts.php"); ?>

  <!-- TEMPLATE PARTS end  -->

  
    
    <?php get_footer(); ?>

