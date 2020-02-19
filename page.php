<?php get_header(); ?>
	<section id="primary" class="content-area default-content">
		<main id="main" class="site-main container-fluid">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="container">
					<div class="row align-items-end">
						<div class="col-auto mx-auto fs-32 ls-3 fw-700">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-xl-10 col-lg-10 col-12 fs-14 lh-26 ls-1">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<?php
				endwhile; // End of the loop.
				?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
