<?php get_header(); ?>
	<main role="main" class="single-main">
		<section class="container-fluid custom-post-single">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php 
			// retrieve post_id, and sanitize it to enhance security
			$post_id = intval($_POST['post_id'] );
			//get term 
			$ajax_term = get_the_terms($post_id, 'taxonomy-presentoirs');
			//print_r($ajax_term);
			?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('container single-up anim-500'); ?>>

				<div class="row align-items-end p-relative">
					<div id="saint-honore"></div>
					<div class="col-xl-3 col-lg-4 col-md-4 col-12 d-flex flex-column collection-product-content h-100">
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
							<?php
							$terms = get_the_terms( get_the_ID(), 'taxonomy-presentoirs' );
							foreach ( $terms as $term ){
								if ( $term->parent == 0 ) { ?>
								<div class="d-flex align-items-end mt-10">
									<img class="logo-collection" src="<?php the_field('logo_collection', $term); ?>" alt="logo collection saint-honoré paris"> 
									<h4 class="text-grey ml-10 mb-0 fs-15 d-flex">
									<?php
									if (ICL_LANGUAGE_CODE == "fr") { ?>
										<?php echo 'Collection ' . $term->name; ?>
									<?php
									} elseif (ICL_LANGUAGE_CODE == "en") { ?>
										<?php echo $term->name . ' ' . ' collection'; ?>
									<?php 
									}
									?>
									</h4>
								</div>
								<?php
								}
							}
							?>
						</div> 
						<div class="text-grey fs-15 mt-20 lh-1-4 collection-product-description d-flex flex-column h-100 justify-content-end">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-xl-7 col-lg-8 col-md-8 col-12 p-relative ajax-thumbnail">
						<?php $thumbnail_url = get_the_post_thumbnail_url(); ?>
						<img id="thumb" class="" src="<?php echo $thumbnail_url; ?>" alt="">
						<div class="single-btn-back">
							<!-- <?php
							// $terms = wp_get_post_terms( $post->ID, 'taxonomy-presentoirs');
							// foreach ($terms as $term) { ?>
								<a class="btn-black-left" href="<?php // echo get_term_link( $term->slug, 'taxonomy-presentoirs'); ?>"><?php // _e('Retour','saint-honore') ?></a>
							<!- <?php //	}	?> -->
							<button class="btn-black-left anim-300" onclick="goBack()"><?php _e('Retour','saint-honore') ?></button>	
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-10 col-lg-10 col-12">
						<div class="d-flex justify-content-end w-100 single-copyright">
							<span class="text-grey fs-10">© Copyright <?php the_date('Y'); ?>. <?php _e('Modèle déposé, tous droits réservés','saint-honore'); ?></span>
						</div>
					</div>
				</div>
			</article>
			<!-- /article -->
			<?php endwhile; ?>

			<?php else: ?>
			<!-- article -->
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
			<!-- /article -->
		<?php endif; ?>
		</section>
	</main>
	<script>
	function goBack() {
	window.history.back();
	}
	</script>
<?php get_footer(); ?>
