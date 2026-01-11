<?php

/**
 * Template for category: Наши работы
 *
 * @package tehdrive
 */

get_header();
?>

<main id="primary" class="site-main container">

  <?php tehdrive_breadcrumbs(); ?>

  <header class="page-header">
    <h1 class="page-title">Наши работы</h1>
    <p class="page-description">
      <?php echo category_description(); ?>
    </p>
  </header>

  <?php if (have_posts()) : ?>

    <div class="works-grid">
      <?php
      while (have_posts()) :
        the_post();
      ?>
        <article class="work-item">
          <div class="work-image-wrapper">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-work.jpg" alt="Работа">
              <?php endif; ?>
            </a>
            <div class="work-overlay">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
    </div>

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <?php get_template_part('template-parts/content', 'none'); ?>

  <?php endif; ?>

</main>

<!-- ПРЕИМУЩЕСТВА -->
<?php get_template_part('template-parts/block', 'advantages'); ?>

<!-- КАК ЗАПИСАТЬСЯ -->
<?php get_template_part('template-parts/block', 'how-to-book'); ?>

<!-- ЛОГОТИПЫ АВТОМОБИЛЕЙ -->
<?php get_template_part('template-parts/block', 'car-brands'); ?>

<?php
get_footer();
?>