<?php

/**
 * Template Name: Кузовной ремонт
 *
 * @package tehdrive
 */

get_header();
?>

<main id="primary" class="site-main container">

  <?php tehdrive_breadcrumbs(); ?>

  <!-- Баннер -->
  <section class="kuzovnoy-remont-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-img.jpg" alt="Мастер полирует кузов">
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
          <h3>Штабельные работы (вытяжение)</h3>
          <p>От 15000 ₽</p>
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
          <h3>Ремонт бамперов</h3>
          <p>От 3500 ₽</p>
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
          <h3>Ремонт кузова без покраски</h3>
          <p>От 4000 ₽</p>
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
          <h3>Арматурные работы</h3>
          <p>От 5000 ₽</p>
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
          <h3>Жестяные работы</h3>
          <p>От 4500 ₽</p>
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
          <h3>Ремонт вмятин</h3>
          <p>От 2500 ₽</p>
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
          <h3>Ремонт суппортов</h3>
          <p>От 3000 ₽</p>
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
          <h3>Локальный ремонт кузова автомобиля</h3>
          <p>От 6000 ₽</p>
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
          <h3>Восстановление геометрии кузова</h3>
          <p>От 18000 ₽</p>
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
          <h3>Ремонт и замена порогов</h3>
          <p>От 8000 ₽</p>
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
          <h3>Ремонт кузова автомобиля</h3>
          <p>От 10000 ₽</p>
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
          <h3>Ремонт и замена фар автомобиля</h3>
          <p>От 3500 ₽</p>
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
          <h3>Ремонт крышки багажника</h3>
          <p>От 6000 ₽</p>
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
          <h3>Ремонт и замена крыла автомобиля</h3>
          <p>От 7000 ₽</p>
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
          <h3>Ремонт двери автомобиля</h3>
          <p>От 6500 ₽</p>
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
          <h3>Ремонт и замена лонжеронов</h3>
          <p>От 12000 ₽</p>
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
          <h3>Ремонт крыши автомобиля</h3>
          <p>От 15000 ₽</p>
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
          <h3>Ремонт бокового зеркала заднего вида</h3>
          <p>От 2500 ₽</p>
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
          <h3>Ремонт рамы</h3>
          <p>От 20000 ₽</p>
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
          <h3>Стапельные работы</h3>
          <p>От 15000 ₽</p>
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
          <h3>Сварочные работы</h3>
          <p>От 4000 ₽</p>
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
    <h2>Вытягивание кузова стапелем</h2>
    <div class="kuzovnoy-remont-wrap hero-content">
      <div class="kuzovnoy-remont-text">
        <p>
          Вытягивание кузова стапелем – один из сложнейших процессов в ремонте автомобиля. Только качественное оборудование и опыт мастера помогут вернуть первоначальную жесткость поврежденным элементам.
          Наш стапель представляет собой целый комплекс оборудования, включающий большое количество инструментов и приспособлений.
          Все это позволяет не только оказывать направленное силовое воздействие, но и дозировать нагрузку на кузов, распределяя ее в соответствии с заложенными требованиями.
        </p>
        <a href="#" class="btn btn-primary">Узнать подробнее</a>
      </div>
      <div class="kuzovnoy-remont-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="Вытягивание кузова стапелем">
      </div>
    </div>
  </section>


  <!-- ЭТАПЫ РАБОТЫ -->
  <?php get_template_part('template-parts/block', 'stages-work'); ?>

  <!-- ЭКОНОМИМ ВАШЕ ВРЕМЯ -->
  <?php get_template_part('template-parts/block', 'saving-time'); ?>

  <!-- Выводим заголовок и контент страницы из админки -->
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