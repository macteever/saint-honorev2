<?php /* Template Name: Collections */
   get_header(); ?>
   <main role="main">
      <section class="container-fluid collections-main">
         <div class="container h-100">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-12 d-flex flex-column p-0">
                  <div class="text-right collection-top-title">
                     <h1 class="fs-16 fw-300 uppercase collection-title-after apparition-2"><?php the_field('title'); ?></h1>
                     <div class="fs-28 mt-50 apparition-2 lh-1-4">
                        <?php the_field('presentation'); ?>
                     </div>
                  </div>
                  
               </div>
            </div>
            <?php if ( have_rows('collections') ) : ?>
               <?php while( have_rows('collections') ) : the_row(); ?>
                  <div class="row-collections-parent">
                     <div id="collection-sprite" class="row row-collections align-items-center">
                        <div class="p-0 col-xl-6 col-lg-6 col-12">

                           <?php if ( have_rows( 'collection_video_img' ) ) : ?>
                              <?php while ( have_rows('collection_video_img' ) ) : the_row(); ?>

                                 <?php if ( get_row_layout() == 'video' ) : ?>
                                    
                                    <video id="video-scroll" class="video-scroll">
                                       <?php
                                       $video_webm = get_sub_field('video_webm');
                                       $video_mp4 = get_sub_field('video_mp4');
                                       $video_ogv = get_sub_field('video_ogv');
                                       ?> 
                                       <source src="<?php echo home_url() . $video_webm; ?>">
                                       <source src="<?php echo home_url() . $video_mp4; ?>">
                                       <source src="<?php echo home_url() . $video_ogv; ?>">
                                    </video>
                                    <div id="video-length" class="video-length"></div>

                                 <?php elseif( get_row_layout() == 'img' ): ?>  
                                    
                                    <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                                    
                                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                    
                                    <?php endif; ?>

                                 <?php endif; ?>

                              <?php endwhile; ?>
                           <?php endif; ?>

                        </div>
                        <div class="p-0 col-xl-6 col-lg-6 col-12 d-flex flex-column justify-content-between">
                           <div>
                              <h2 class="fs-32 mb-30"><?php the_sub_field('title'); ?></h2>
                              <h3 class="fs-28 text-grey"><?php the_sub_field('subtitle'); ?></h3>
                           </div>
                           <div class="text-white collections-repeater-content" style="background-color: <?php the_sub_field('bkg_color_content'); ?>">
                              <?php the_sub_field('content'); ?>
                              <div class="mt-30">
                                 <?php 
                                 $term = get_sub_field('lien_mannequins');
                                 if( $term ): ?>
                                    <a class="btn-white" href="<?php echo esc_url( get_term_link( $term ) ); ?>">Découvrir</a>
                                 <?php endif; ?>
                                 <?php 
                                 $term = get_sub_field('lien_presentoirs');
                                 if( $term ): ?>
                                    <a class="btn-white" href="<?php echo esc_url( get_term_link( $term ) ); ?>">Découvrir</a>
                                 <?php endif; ?>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            
            
               <?php endwhile; ?>
            <?php endif; ?>
            
         </div>
      </section>
   </main>
<?php get_footer(); ?>