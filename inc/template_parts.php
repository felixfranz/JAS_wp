 
 
 
 
<?php while(the_flexible_field("template_parts")): ?>

  
<!-- 2col START -->
<?php if(get_row_layout() == "2col"): ?>

<section class="section_standards" style="background-color:<?php echo get_sub_field('bg_color'); ?>;">  
   <div class="container">

      <?php if( get_sub_field('headline_top') ): ?>
         <div class="row gx-5 d-flex justify-content-center">
            <div class="col-lg-10">
                <h2><?php echo get_sub_field('headline_top'); ?></h2>
            </div>
         </div>       
      <?php endif; ?>
     
     <div class="row gx-5 d-flex justify-content-center">

         <div class="col-lg-5">
         <?php if( get_sub_field('headline_li') ): ?>
                <h2><?php echo get_sub_field('headline_li'); ?></h2>
             <?php endif; ?>
             <?php if( get_sub_field('content_li') ): ?>    
                <?php echo get_sub_field('content_li'); ?>
             <?php endif; ?>
             <?php if( get_sub_field('link') ): ?>  
                <a class="btn btn-outline-dark btn-jas" href="<?php echo get_sub_field('link_li'); ?>">mehr</a>
             <?php endif; ?>
         </div>

         <div class="col-lg-5">
             <?php if( get_sub_field('headline_re') ): ?>
                <h2><?php echo get_sub_field('headline_re'); ?></h2>
             <?php endif; ?>
             <?php if( get_sub_field('content_re') ): ?>    
                <?php echo get_sub_field('content_re'); ?>
             <?php endif; ?>
             <?php if( get_sub_field('link_re') ): ?>  
                <a class="btn btn-outline-dark btn-jas" href="<?php echo get_sub_field('link_re'); ?>">mehr</a>
             <?php endif; ?>
         </div>  
           
       </div>
     </div>
   </div>
 </section>

 <?php endif; ?>
<!-- 2col END -->   

<!-- 2col_bild_text START -->
<?php if(get_row_layout() == "2col_bild_text"): ?>

<section class="section_standards" style="background: linear-gradient(<?php echo get_sub_field('bg_color'); ?> 450px, #fff 1px);">  
   <div class="container">

      <?php if( get_sub_field('headline_top') ): ?>
         <div class="row gx-5 d-flex justify-content-center">
            <div class="col-lg-10">
                <h2><?php echo get_sub_field('headline_top'); ?></h2>
            </div>
         </div>       
      <?php endif; ?>
     
     <div class="row gx-5 d-flex justify-content-center">

         <div class="col-lg-5">
             <?php $pic = get_sub_field('pic');
               if( !empty( $pic ) ): ?>
               <img class="img-fluid" src="<?php echo esc_url($pic['url']); ?>" alt="<?php echo esc_attr($pic['alt']); ?>" />
               <?php endif; ?>
         </div>

         <div class="col-lg-5">
             <?php if( get_sub_field('headline') ): ?>
                <h2><?php echo get_sub_field('headline'); ?></h2>
             <?php endif; ?>
             <?php if( get_sub_field('content') ): ?>    
                <?php echo get_sub_field('content'); ?>
             <?php endif; ?>
             <?php if( get_sub_field('link') ): ?>  
                <a class="btn btn-outline-dark btn-jas" href="<?php echo get_sub_field('link'); ?>">mehr</a>
             <?php endif; ?>
         </div>  
           
       </div>
     </div>
   </div>
 </section>

 <?php endif; ?>
<!-- 2col_bild_text END -->


<!-- 2col_text_bild START -->
<?php if(get_row_layout() == "2col_text_bild"): ?>

<section class="section_standards" style="background: linear-gradient(<?php echo get_sub_field('bg_color'); ?> 450px, #fff 1px);">  
   <div class="container">
     <div class="row gx-5 d-flex justify-content-center ">

     <div class="col-lg-5">
             <?php if( get_sub_field('headline') ): ?>
                <h2><?php echo get_sub_field('headline'); ?></h2>
             <?php endif; ?>
             <?php if( get_sub_field('content') ): ?>    
                <?php echo get_sub_field('content'); ?>
             <?php endif; ?>
             <?php if( get_sub_field('link') ): ?>  
                <a class="btn btn-outline-dark btn-jas" href="<?php echo get_sub_field('link'); ?>">mehr</a>
             <?php endif; ?>
         </div>  

         <div class="col-lg-5">
             <?php $pic = get_sub_field('pic');
               if( !empty( $pic ) ): ?>
               <img class="img-fluid" src="<?php echo esc_url($pic['url']); ?>" alt="<?php echo esc_attr($pic['alt']); ?>" />
               <?php endif; ?>
         </div>
           
       </div>
     </div>
   </div>
 </section>

 <?php endif; ?>
<!-- 2col_text_bild END -->

<!-- Quote START -->
<?php if(get_row_layout() == "quote"): ?>

<section class="section_standards">  
   <div class="container">
      <?php if( get_sub_field('content') ): ?>
         <div class="row gx-5 d-flex justify-content-center">
            <div class="col-lg-10 quote_bar quote_typo" style="border-left: solid <?php echo get_sub_field('bar_color'); ?> 12px;">
                <?php echo get_sub_field('content'); ?>
            </div>
         </div>       
      <?php endif; ?>
     
   </div>
 </section>

 <?php endif; ?>
<!-- Quote END -->

<!-- 1col START -->
<?php if(get_row_layout() == "1col"): ?>

<section class="section_standards">  
   <div class="container">
      <?php if( get_sub_field('content') ): ?>
         <div class="row gx-5 d-flex justify-content-center">
            <div class="col-lg-10">
                <?php echo get_sub_field('content'); ?>
            </div>
         </div>       
      <?php endif; ?>
     
   </div>
 </section>

 <?php endif; ?>
<!-- 1col END -->  

<?php endwhile; ?>
