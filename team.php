<?php /* Template Name: JAS Team */ ?>

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
        <div class="col-12 bottom-rounded_empty text-center" style="background-color: <?php echo get_field('bg_rounded_color'); ?>"></div>
      </div>
    </div>
  </section>


  <!-- TEMPLATE PARTS start -->
 
<?php include("inc/team_parts.php"); ?>

  <!-- TEMPLATE PARTS end  -->

  
    
    <?php get_footer(); ?>

