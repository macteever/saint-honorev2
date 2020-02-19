<?php /* Template Name: A propos */
   get_header(); ?>
   <main role="main">
      <div class="container-fluid about-main">
      <div class="container h-100">
        <?php if ( have_rows( 'about_repeater' ) ) : ?>
          <?php while ( have_rows('about_repeater' ) ) : the_row(); ?>
            
            <?php if ( get_row_layout() == 'repeater_a' ) : ?>
              
              <?php if ( have_rows('about_part1') ) : ?>              
                <?php while( have_rows('about_part1') ) : the_row(); ?>

                  <div id="<?php the_sub_field('ancre'); ?>" class="row about-repeaterA align-items-center mt-80">
                    
                    <div class="col-xl-6 col-lg-6 col-12 p-relative h-100 about-repeater-content-parent" >
                      <?php if ( get_sub_field('title') ) : ?>
                        <h2 class="fs-16 fw-300 uppercase about-repeater-title-after">
                          <?php echo get_sub_field('title'); ?>
                        </h2>
                      <?php endif; ?>
                      <div class="about-repeater-content" style="background-color: <?php the_sub_field('bkg_color_content'); ?>">
                        <?php the_sub_field('content'); ?>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 p-relative d-flex flex-column about-repeater-img">
                      <div>
                        <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>                   
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>
              <?php endif; ?>

            <?php elseif( get_row_layout() == 'repeater_b' ): ?>
              
              <?php if ( have_rows('about_part_bis') ) : ?>              
                <?php while( have_rows('about_part_bis') ) : the_row(); ?>
                
                  <div id="<?php the_sub_field('ancre'); ?>" class="row about-repeaterB align-items-center">
                     <div class="col-xl-6 col-lg-6 col-12 pr-0 p-relative d-fle flex-column about-repeater-content-left text-right h-100">
                        <div>
                           <?php if ( get_sub_field('img_left') ) : $image = get_sub_field('img_left'); ?>                         
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                           <?php endif; ?>
                        </div>
                        <div class="text-right about-text-sub-img">
                           <?php the_sub_field('text_ss_img_left'); ?>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-12 pl-0 p-relative d-flex flex-column about-repeater-content-right">
                           <div>
                              <?php the_sub_field('title_content'); ?>
                           </div>
                           <div>
                              <?php if ( get_sub_field('img_right') ) : $image = get_sub_field('img_right'); ?>                         
                                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                              <?php endif; ?>
                           </div>
                           <div class="about-text-sub-img">
                              <?php the_sub_field('text_ss_img_right'); ?>
                           </div>
                     </div>
                  </div>

                <?php endwhile; ?>
              <?php endif; ?>

            
            <?php endif; ?>

          <?php endwhile; ?>
        <?php endif; ?>
        
       </div>
      </div>
   </main>
<?php get_footer(); ?>