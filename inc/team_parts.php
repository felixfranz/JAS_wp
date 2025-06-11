 
 
 
 
<?php while(the_flexible_field("team_parts")): ?>

  
<!-- Team Cards START -->
<?php if(get_row_layout() == "team_cards"): ?>

<section class="section_standards" style="background-color:<?php echo get_sub_field('bg_color'); ?>;"
<?php if( get_sub_field('section_id') ): ?> id="<?php echo get_sub_field('section_id'); ?>" <?php endif; ?> >  
   <div class="container">

      <?php if( get_sub_field('headline') ): ?>
         <div class="row gx-5 d-flex justify-content-center">
            <div class="col-lg-10">
                <h2><?php echo get_sub_field('headline'); ?></h2>
                <?php $pic = get_sub_field('team_pic');
               if( !empty( $pic ) ): ?>
               <img class="img-fluid" src="<?php echo esc_url($pic['url']); ?>" alt="<?php echo esc_attr($pic['alt']); ?>" />
               <?php endif; ?>
            </div>
         </div>       
      <?php endif; ?>

      <?php if( have_rows('team_entry') ): ?>

         <div class="row gx-5 d-flex justify-content-center">
         <div class="col-lg-10">


         <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 team_card">

         <?php while( have_rows('team_entry') ): the_row(); 
         
         // vars                       
                                
         $imageArray = get_sub_field('foto'); // Array returned by Advanced Custom Fields
         $imageURL = $imageArray['url']; // Grab the full size version 
         
         $name = get_sub_field('name');
         $descr= get_sub_field('description');
         $email = get_sub_field('email');
         ?>

         <!-- Repeater Part Start -->
         <div class="col team_col">
               <div class="card h-100 shadow">
                  <img src="<?php echo $imageURL; ?>" class="card-img-top">
                     <div class="card-content_team">
                     <span class="card-title"><?php echo $descr; ?></span>
                     <p class="card-text"><?php echo $name; ?></p>
                     <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                     </div>
               </div>
         </div>
         <!-- Repeater Part End -->

         <?php endwhile; ?>

         </div>

         </div></div>
         <?php endif; ?>

</section>
      <?php endif; ?>



   <!-- Team List START -->

   <?php if(get_row_layout() == "team_list"): ?>

   <section class="section_standards" style="background-color:<?php echo get_sub_field('bg_color'); ?>;" <?php if( get_sub_field('section_id') ): ?> id="<?php echo get_sub_field('section_id'); ?>" <?php endif; ?>>  
      <div class="container">

      <?php if( get_sub_field('headline') ): ?>
         <div class="row gx-5 d-flex justify-content-center">
            <div class="col-lg-10">
                <h2><?php echo get_sub_field('headline'); ?></h2>

                <?php $pic = get_sub_field('team_pic');
               if( !empty( $pic ) ): ?>
               <img class="img-fluid koll_img" src="<?php echo esc_url($pic['url']); ?>" alt="<?php echo esc_attr($pic['alt']); ?>" />
               <?php endif; ?> 
               

            </div>
         </div>       
      <?php endif; ?>


      <?php if( have_rows('team_entry') ): ?>

      

         <div class="row gx-5 d-flex justify-content-center">
         <div class="col-lg-10">

            <details name="kollegiumsliste" class="details-style1">
            <summary >Namensliste</summary>

         <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 team_card">

               <?php while( have_rows('team_entry') ): the_row(); 
               
               // vars                       
                                    
               $imageArray = get_sub_field('foto'); // Array returned by Advanced Custom Fields
               $imageURL = $imageArray['url']; // Grab the full size version 
               
               $name = get_sub_field('name');
               $email = get_sub_field('email');
               ?>

               <!-- Repeater Part Start -->
               <div class="col koll_col">
                     <div class="koll_card h-100">
                        <img src="<?php echo $imageURL; ?>" class="card-img-top">
                           <div class="card-body">
                           <p class="koll_name"><?php echo $name; ?></p>
                           <p class="koll_card-title"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                           </div>
                     </div>
               </div>
               <!-- Repeater Part End -->

               <?php endwhile; ?>

         </div>

      </details>


         </div></div>
      



    </section>
   <?php endif; ?>  

  <!-- Team List END -->




   </div>
 </section>

 <?php endif; ?>
<!-- 2col END -->   



<?php endwhile; ?>
