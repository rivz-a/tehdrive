<?php

/**
 * Template Name: Вакансии
 *
 * @package tehdrive
 */

get_header();
?>

<main id="primary" class="site-main container hero-content">

  <?php tehdrive_breadcrumbs(); ?>

  <!-- Баннер -->
  <section class="kuzovnoy-remont-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-img-4.jpg" alt="Мастер полирует кузов">
    <div class="kuzovnoy-remont-header">
      <?php the_title('<h2>', '</h2>'); ?>
    </div>
  </section>

  <!-- Описание -->
  <section class="kuzovnoy-remont-description">
    <p>Работаем с повреждениями <span class="highlight">любой</span> сложности — от мелких дефектов до серьёзных восстановительных работ</p>
  </section>

  <!-- Вытягивание кузова стапелем -->


  <!-- Выводим контент страницы из админки -->
  <?php
  while (have_posts()) :
    the_post();
  ?>
    <section class="kuzovnoy-remont-stapel">

      <!-- Основной контент (то, что вы написали в админке) -->
      <div class="entry-content">
        <?php the_content(); ?>
      </div>

      <a href="#" class="btn btn-primary">Связаться с нами</a>

    </section>
  <?php endwhile; ?>
</main>

<?php
get_footer();
?>