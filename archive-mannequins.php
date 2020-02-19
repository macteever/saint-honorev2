<?php get_header(); ?>
<main role="main" class="main-content main-archive">
  <section class="container-fluid archive-content">
    <div class="container">
      <div class="row justify-content-center archive-row-cat mb-50">
        <?php
        $taxonomy = 'taxonomy-realisations';
        $terms = get_terms($taxonomy);
        if ( $terms && !is_wp_error( $terms ) ) :
        ?>
          <ul class="d-flex col-auto">
              <li><a href="/realisations"><b>Tout</b></a></li>
              <?php foreach ( $terms as $term ) { ?>
                  <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
              <?php } ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>