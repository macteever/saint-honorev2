<?php /* Template Name: Contact */
   get_header(); ?>
   <main role="main">
      <section class="container-fluid contact-main">
         <div class="container h-100">
            <?php if ( have_rows('contact_part1') ) : ?>              
               <?php while( have_rows('contact_part1') ) : the_row(); ?>

                  <div class="row contact-repeaterA align-items-center mt-80">
                     <div class="col-xl-6 col-lg-6 col-12 p-relative d-flex flex-column contact-repeater-img ">
                        <div>
                           <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>                   
                           <?php endif; ?>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-12 p-relative h-100 contact-repeater-content-parent " >
                        <?php if ( get_sub_field('title') ) : ?>
                           <h2 class="fs-16 fw-300 uppercase contact-repeater-title-after">
                           <?php echo get_sub_field('title'); ?>
                           </h2>
                        <?php endif; ?>
                        <div class="contact-repeater-content" style="background-color: <?php the_sub_field('bkg_color_content'); ?>">
                           <?php the_sub_field('content'); ?>
                           <div class="content">
                              <h3><?php _e('Envoyez nous un message rapide','saint-honore'); ?></h3>
                              <button id="one" class="anim-300 button-form btn-black"><?php _e('C\'est parti','saint-honore'); ?> !</button>
                           </div>
                           
                           <!-- <div class="content mt-50">
                              <h3>Demandez un rappel immédiat</h3>
                              <button id="one" class="anim-300 button-phone btn-black">C'est parti !</button>
                           </div> -->
                        </div>
                     </div>
                  </div>

               <?php endwhile; ?>
            <?php endif; ?>

            <?php if ( have_rows('contact_part2') ) : ?>              
               <?php while( have_rows('contact_part2') ) : the_row(); ?>

               <div class="row contact-repeaterC p-relative">
                  <div class="col-xl-6 col-lg-6 col-12 contact-cat-left-parent" ">
                     <?php if ( get_sub_field('title') ) : ?>
                        <h2 class="fs-16 fw-300 text-right uppercase contact-repeater-title-after">
                        <?php echo get_sub_field('title'); ?>
                        </h2>
                     <?php endif; ?>
                     <div class="text-white contact-cat-left" style="background-color: <?php the_sub_field('bkg_color_left'); ?>">
                        <?php the_sub_field('content_left'); ?>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-12 contact-cat-right-parent" >
                     <div class="contact-cat-right text-white" style="background-color: <?php the_sub_field('bkg_color_right'); ?>">
                        <?php the_sub_field('content_right'); ?>
                     </div>
                  </div>
               </div>

               
               <?php endwhile; ?>
            <?php endif; ?>
         </div>
      </section>
   </main>
   <div id="modal-container-form">
      <div class="modal-background">
         <div class="modal">
            <div class="modal-child">
               <h2 class="mb-15 text-left lh-1-4"><?php _e('Envoyez nous un message<br>rapide','saint-honore'); ?></h2>
               <div>
                  <?php echo do_shortcode('[contact-form-7 id="19" title="Formulaire de contact 1"]'); ?>
               </div>
            </div>
            <!-- <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
               <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="1"></rect>
            </svg> -->
         </div>
      </div>
   </div>
   <div id="modal-container-phone">
      <div class="modal-background">
         <div class="modal">
            <div class="modal-child">
               <h2 class="mb-15"><?php _e('Demander un rappel immédiat','saint-honore'); ?></h2>
               <div>
                  <?php echo do_shortcode('[contact-form-7 id="127" title="Form-phone"]'); ?>
               </div>
            </div>
            <!-- <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
               <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="1"></rect>
            </svg> -->
         </div>
      </div>
   </div>
   
<?php get_footer(); ?>