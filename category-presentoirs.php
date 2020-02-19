<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="splash-logo">
  <div class="w-100 h-100 p-absolute splash-logo-bkg"></div>
  <?php include get_template_directory().'/includes/logo-baseline.php'; ?>
</div>
<div class="video-container-parent">
  <div class="video-top-content">
      <div class="d-flex justify-content-between">
        <div class="text-white fs-24 fw-600 slogan-video">
            <?php the_field('title'); ?>
        </div>
        <div class="adress-video text-white fs-16 lh-1-25 text-right adress-video">
            <?php the_field('video_adress','option'); ?>
        </div>
      </div>
  </div>
  <?php if ( have_rows( 'media_intro' ) ) : ?>
    <?php while ( have_rows('media_intro' ) ) : the_row(); ?>

      <?php if ( get_row_layout() == 'video' ) : ?>
        <div class="video-container">
          <video autoplay="autoplay" loop="loop">
            <?php
            $video_webm = get_sub_field('video_webm');
            $video_mp4 = get_sub_field('video_mp4');
            $video_ogv = get_sub_field('video_ogv');
            ?> 
            <source src="<?php echo home_url() . $video_mp4; ?>">
            <source src="<?php echo home_url() . $video_webm; ?>">
            <source src="<?php echo home_url() . $video_ogv; ?>">
          </video>
        </div>
      <?php elseif ( get_row_layout() == 'image' ) : ?>
        <div class="class">
          <?php the_sub_field( 'field_name' ); ?>
        </div>
      <?php endif; ?>

    <?php endwhile; ?>
  <?php endif; ?>
  
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>