<!-- <div class="subcat-archive"> -->
<?php 
// echo 'SOUS CATEGORIE DES COLLECTIONS';
get_header(); ?>
   <main role="main" class="main-content main-archive archive-collection-categories">
   <?php $term = get_queried_object(); ?>
      <section class="container-fluid banner-archive-subcat" style="background-image: url(<?php the_field('banner_subcat', $term); ?>)">
         <div class="container h-100">
            <div class="row h-100 align-items-end">
               <div class="col-xl-5 col-lg-5 col-md-8 col-12 sub-cat-top-cube" style="background-color: <?php the_field('cube_color', $term); ?>;">
                  <h3 class="uppercase fs-16 text-white fw-300 text-right archive-subcat-title-after mb-40">
                     <?php 
                     $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                     $parent = get_term($term->parent, get_query_var('taxonomy') );

                     $collection_name = $parent->name;
                     $collection_link = get_term_link($parent, get_query_var( 'taxonomy' ) );
                     ?>
                     <?php
                     if (ICL_LANGUAGE_CODE == "fr") { ?>
                        <span>Collection <?php echo $collection_name; ?></span>
                     <?php
                     } elseif (ICL_LANGUAGE_CODE == "en") { ?>
                        <span><?php echo $collection_name; ?> collection</span>
                     <?php 
                     }
                     ?>
                  </h3>
                  <h1 class="text-white fs-32 fw-600 text-right mb-15"><?php echo $term->name ?></h1>
                  <div class="text-white fs-18 text-right">
                     <?php echo term_description(); ?>
                  </div>
                  <div class="mt-80 ml-auto d-flex justify-content-end">
                     <a href="<?php echo $collection_link; ?>#collection" class="btn-white"><?php _e('Retour aux collections','saint-honore'); ?></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="container-fluid p-relative">
         <div class="archive-arrow">
            <?php include get_template_directory().'/includes/arrow-scroll.php'; ?>
         </div>
         <div class="container">
            <div class="row">
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                     <div id="<?php the_ID(); ?> one"  class="col-xl-4 col-lg-4 col-md-6 col-12 collection-product-col">
                        <article <?php post_class('post d-flex flex-column h-100'); ?>>

                           <?php echo get_the_post_thumbnail(); ?>
                           <div class="d-flex flex-column collection-product-content h-100">   
                              <h3 class="fs-20 fw-600"><?php the_title(); ?></h3>
                              <div>
                                 <h4 class="text-grey fs-20 uppercase mb-0">
                                    <?php
                                    $post_tags = get_the_tags();
                                    if ( $post_tags ) {
                                       echo $post_tags[0]->name; 
                                    }
                                    ?>
                                 </h4>
                                 <h4 class="text-grey fs-15 d-flex">
                                    <?php
                                    if (ICL_LANGUAGE_CODE == "fr") { ?>
                                       <?php echo 'Collection ' . $collection_name; ?>
                                    <?php
                                    } elseif (ICL_LANGUAGE_CODE == "en") { ?>
                                       <?php echo $collection_name . ' ' . ' collection'; ?>
                                    <?php 
                                    }
                                    ?>
                                 </h4>
                              </div>  
                              <div class="text-grey fs-15 mt-20 lh-1-4 collection-product-description d-flex flex-column h-100 justify-content-end">
                                 <?php the_content(); ?>
                              </div>
                           </div>
                        </article>
                     </div>
                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
            <div class="load-more-manual">
               <nav id="page-nav" role="navigation"><?php next_posts_link( __( '<span class="more btn-green">Load more posts</span>', 'wpc' ) ); ?></nav>
            </div>
         </div>
      </section>
   </main>
   <div id="modal-container-product">
      <div class="modal-background container-fluid">
         <div class="modal container p-relative">
            <button class="close-modal btn-black fs-15 anim-300"><?php _e('Fermer','saint-honore'); ?></button>
            <div class="modal-child row justify-content-between p-relative">

            </div>
         </div>
      </div>
   </div>
   
<!-- </div> -->
<?php get_footer(); ?>
