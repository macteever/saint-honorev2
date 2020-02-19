<?php get_header(); ?>
	<main role="main">
		<section class="container-fluid custom-post-single">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
				<div class="row">
					<div class="col-xl-7 col-lg-7 col-12 single-real-slider">
						<div class="slider-single-for mb-30">
							<?php if ( have_rows('galerie_image') ) : ?>
								<?php while( have_rows('galerie_image') ) : the_row();

									$image = get_sub_field('img');
									if( !empty($image) ): ?>
									<!-- <a href="<?php echo $image['url']; ?>"> -->
										<img class="apparition-2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<!-- </a> -->
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="slider-single-nav">
							<?php if ( have_rows('galerie_image') ) : ?>
								<?php while( have_rows('galerie_image') ) : the_row();
		
								$image = get_sub_field('img');
								if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
							
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-xl-5 col-lg-5 col-12">
						<span class=""><a class="d-flex align-items-center text-darkgrey" href="<?php echo home_url() . '/realisations'; ?>"><i class="material-icons mr-15">chevron_left</i>portfolio</a></span>
						<h1 class="fs-60 mt-15 mb-20 century-bold apparition-2"><?php the_title(); ?></h1>
						<div class="apparition-2">
							<?php the_content(); ?>
						</div>
						<div class="mt-30 d-flex apparition-2">
							<div>
								<h3 class="fs-17 text-darkgrey century-bold">Client</h3>
								<?php if ( have_rows('client') ) : ?>
									<?php while( have_rows('client') ) : the_row(); ?>
								
									<span><?php the_sub_field('nom'); ?></span>
									<?php if ( get_sub_field('logo') ) : $image = get_sub_field('logo'); ?>
									
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
									
									<?php endif; ?>
									
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="d-flex flex-column mt-15 apparition-2">
							<h3 class="fs-17 text-darkgrey century-bold"><?php the_field('reference'); ?></h3>
							<?php if ( have_rows('partenaires') ) : ?>
								<?php while( have_rows('partenaires') ) : the_row(); ?>
							
								<p class="fs-15 mb-0"><?php the_sub_field('partner'); ?></p>
							
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="d-flex flex-column mt-15 apparition-2">
							<h3 class="fs-17 text-darkgrey century-bold">Date</h3>
							<span><?php the_date('Y'); ?></span>
						</div>
						<div class="d-flex single-real-rs mt-15 apparition-2">
							<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><img src="<?php echo get_template_directory_uri() . '/assets/img/facebook.png'; ?>" alt=""></a>
							<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/linkedin.png'; ?>" alt=""></a>
							<a href="https://twitter.com/home?status=<?php echo get_permalink( get_the_ID() ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/twitter.png'; ?>"
							</a>
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
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<?php get_footer(); ?>
