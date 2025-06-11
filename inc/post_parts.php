 
 
 
 
<?php while(the_flexible_field("post_parts")): ?>

<!-- 2pic START -->
<?php if(get_row_layout() == "2pic"): ?>

<section class="section_standards">  
   <div class="container">
     
     <div class="row gx-5 d-flex justify-content-center">
         <!-- pic links -->
         <div class="col-lg-5">
         <?php $picli = get_sub_field('pic_links');
               if( !empty( $picli ) ): ?>
               <img class="img-fluid" src="<?php echo esc_url($picli['url']); ?>" alt="<?php echo esc_attr($picli['alt']); ?>" />
               <?php endif; ?>
         </div>
         
         <!-- pic rechts -->
         <div class="col-lg-5">
         <?php $picre = get_sub_field('pic_rechts');
               if( !empty( $picre ) ): ?>
               <img class="img-fluid" src="<?php echo esc_url($picre['url']); ?>" alt="<?php echo esc_attr($picre['alt']); ?>" />
               <?php endif; ?>
         </div>  
           
       </div>
     </div>
   </div>
 </section>

 <?php endif; ?>
<!-- 2pic END -->   
 
<!-- galerie START -->
<?php if(get_row_layout() == "galerie"): ?>

<section class="section_standards">  
  <div class="container">
    <div class="row gx-5 d-flex justify-content-center">

    <div class="col-lg-10">
    
          <?php $images = get_sub_field('galerie');
if( $images ): ?>
<div class="gallery">
    <ul>
        <?php foreach( $images as $image ): 
            $content = '<li>';
                $content .= '<a class="gallery_image" href="'. $image['url'] .'">';
                     $content .= '<img src="'. $image['sizes']['thumbnail'] .'" alt="'. $image['alt'] .'" />';
                $content .= '</a>';
            $content .= '</li>';
            if ( function_exists('slb_activate') ){
    $content = slb_activate($content);
    }
    
echo $content;?>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

    </div>

  </div>
  </div>
</section>

 <?php endif; ?>
<!-- galerie END -->    






<?php endwhile; ?>
