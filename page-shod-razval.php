<?php

/**
 * Template Name: Сход-развал
 *
 * @package tehdrive
 */

get_header();
?>

<main id="primary" class="site-main container">

  <?php tehdrive_breadcrumbs(); ?>

  <!-- Баннер -->
  <section class="kuzovnoy-remont-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-img-1.jpg" alt="Мастер полирует кузов">
    <div class="kuzovnoy-remont-header">
      <?php the_title('<h2>', '</h2>'); ?>
    </div>
  </section>

  <!-- Описание -->
  <?php get_template_part('template-parts/block', 'description'); ?>

  <!-- Мы делаем -->
  <section class="kuzovnoy-remont-services">
    <h2>Мы делаем</h2>
    <div class="kuzovnoy-remont-container">

      <div class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Диагностика подвески</h3>
          <p>От 2000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>

      <div class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Балансировка колес</h3>
          <p>От 1000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>

      <div class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>3D сход-развал</h3>
          <p>От 2000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- Вытягивание кузова стапелем -->
  <section class="kuzovnoy-remont-stapel">
    <h2>Сход-развал</h2>
    <div class="kuzovnoy-remont-wrap hero-content">
      <div class="kuzovnoy-remont-text">
        <p>
          Сход-развал — важная процедура для устойчивости автомобиля, точности управления и равномерного износа шин. Корректная настройка углов установки колёс напрямую влияет на безопасность и комфорт при движении.</p>
        <p>Мы выполняем сход-развал на современном высокоточном оборудовании, которое позволяет учитывать конструктивные особенности конкретной модели автомобиля. Процедура проводится с соблюдением заводских параметров и рекомендаций производителя.</p>
        <p>Точная калибровка и опыт специалистов обеспечивают правильную геометрию подвески, улучшая управляемость, снижая нагрузку на элементы ходовой части и продлевая срок службы шин.
        </p>
        <a href="#" class="btn btn-primary">Узнать подробнее</a>
      </div>
      <div class="kuzovnoy-remont-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/img-08.png" alt="Сход-развал">
      </div>
    </div>
  </section>


  <!-- ЭТАПЫ РАБОТЫ -->
  <?php get_template_part('template-parts/block', 'stages-work'); ?>

  <!-- Выводим контент страницы из админки -->
  <?php
  while (have_posts()) :
    the_post();
  ?>

    <!-- Основной контент (то, что вы написали в админке) -->
    <div class="entry-content">
      <?php the_content(); ?>
    </div>

  <?php endwhile; ?>

</main>

<!-- ПРЕИМУЩЕСТВА -->
<?php get_template_part('template-parts/block', 'advantages'); ?>

<!-- КАК ЗАПИСАТЬСЯ -->
<?php get_template_part('template-parts/block', 'how-to-book'); ?>

<!-- НАШИ РАБОТЫ -->
<?php get_template_part('template-parts/block', 'our-works'); ?>

<!-- ЛОГОТИПЫ АВТОМОБИЛЕЙ -->
<?php get_template_part('template-parts/block', 'car-brands'); ?>

<?php
get_footer();
?>