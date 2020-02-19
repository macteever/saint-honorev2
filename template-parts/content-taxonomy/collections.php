<?php 
// echo 'COLLECTIONS';
get_header(); ?>
  
<div class="video-container-parent">
   <?php $term = get_queried_object(); ?>
   <div class="video-top-content">
         <div class="d-flex video-top-container">
            <div style="color: <?php the_field('title_color', $term); ?>" class="fs-24 fw-600 slogan-video">
               <?php the_field('title', $term); ?>
            </div>
         </div>
   </div>
   <?php if ( have_rows( 'media_intro', $term ) ) : ?>
      <?php while ( have_rows('media_intro', $term ) ) : the_row(); ?>

         <?php if ( get_row_layout() == 'video' ) : ?>
            <div class="video-container">
               <video autoplay="autoplay" loop="loop">
                  <?php
                  $video_webm = get_sub_field('video_webm', $term);
                  $video_mp4 = get_sub_field('video_mp4', $term);
                  $video_ogv = get_sub_field('video_ogv', $term);
                  ?> 
                  <source src="<?php echo home_url() . $video_mp4; ?>">
                  <source src="<?php echo home_url() . $video_webm; ?>">
                  <source src="<?php echo home_url() . $video_ogv; ?>">
               </video>
            </div>
         <?php elseif ( get_row_layout() == 'image' ) : ?>
            <div class="archive-img-container" >
               <div class="archive-top-img" style="background-image: url(<?php the_sub_field('img'); ?>);">
               </div>
            </div>
         <?php endif; ?>

      <?php endwhile; ?>
   <?php endif; ?>
</div>
<main role="main" class="archive-tax-container">
   <?php $term = get_queried_object(); ?>
   <?php if ( have_rows('repeater_archive', $term) ) : ?>
      <?php while( have_rows('repeater_archive', $term) ) : the_row(); ?>
         <section class="container-fluid archive-tax-main" style="background-image: url(<?php the_sub_field('bkg_img', $term); ?> );">
            <div class="container h-100">
               <div class="row archive-repeater-row">
                  <div class="col-xl-6 col-lg-6 col-12 p-0 d-flex flex-column archive-repeater-content">
                        <div style="background-color: <?php the_sub_field('bkg_color_content', $term); ?>">
                        <?php the_sub_field('content', $term); ?>
                        </div>           
                  </div>
               </div>
            </div>
         </section>
      <?php endwhile; ?>
   <?php endif; ?>
   <section id="collection" class="wrapper-scroll p-relative">
      <div class="collection-arrow">
         <?php include get_template_directory().'/includes/arrow-scroll.php'; ?>
      </div>
      <div class="wrapper-scroll-section h-100">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-12 archive-title-after-parent">
               <?php  
                  $term = get_queried_object();
               ?>
               <h2 class="fs-16 fw-300 uppercase archive-title-after text-right">
                  Collection <?php echo $term->name; ?>
               </h2>
            </div>
         </div>
         <div class="d-flex align-items-center">
            <?php 
               $term = get_queried_object();
               $term_id = $term->term_id;
               $taxonomy_name = $term->taxonomy;
               
               $termchildren = get_term_children( $term_id, $taxonomy_name );
               
               echo '<ul class="d-flex justify-content-around">';
               foreach ( $termchildren as $child ) {
                  $term = get_term_by( 'id', $child, $taxonomy_name );
                  $thumbnailUrl = get_field('thumbnail_subcat', $term);

                  echo '<a href="' . get_term_link( $term, $taxonomy_name ) . '">';
                  echo '<li class="col-auto d-flex align-items-center"><div class="d-flex flex-column scroll-section-content">';
                  echo '<div><h3 class="fs-28 mb-40">' . $term->name . ' </h3>';
                  echo '<p class="mb-40">' . $term->description . ' </p></div>';
                  echo '<div class="scroll-section-content-link"><button class="btn-black">Explorer</button></div></div>';
                  echo '<img src="' . $thumbnailUrl . '" >';
                  echo '</li>';
                  echo '</a>';
               }
               echo '</ul>';
            ?>
         </div>
      </div>
   </section>
</main>
              

    
<?php get_footer(); ?>