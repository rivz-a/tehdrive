<?php

/**
 * Template Name: Автопокраска
 *
 * @package tehdrive
 */

get_header();
?>

<main id="primary" class="site-main container">

  <?php tehdrive_breadcrumbs(); ?>

  <!-- Баннер -->
  <section class="kuzovnoy-remont-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-img-3.jpg" alt="Мастер полирует кузов">
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
      <a href="/avtopokraska/malyarnye-raboty/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Малярные работы</h3>
          <p>От 5000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-supportov/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска суппортов</h3>
          <p>От 3000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/polnaya-pokraska-avtomobilya/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Полная покраска автомобиля</h3>
          <p>От 60000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-detalej-avtomobilya/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска деталей автомобиля</h3>
          <p>От 7000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-motoczikla/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска мотоцикла</h3>
          <p>От 25000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/chastichnaya-pokraska/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Частичная покраска</h3>
          <p>От 15000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-kryshi-avtomobilya/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска крыши автомобиля</h3>
          <p>От 18000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-kryla/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска крыла</h3>
          <p>От 12000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-dveri-avtomobilya/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска двери автомобиля</h3>
          <p>От 14000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-kapota/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска капота</h3>
          <p>От 16000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-bampera/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска бампера</h3>
          <p>От 11000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-bagazhnika/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска багажника</h3>
          <p>От 14000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/avtopokraska/pokraska-bokovogo-zerkala/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Покраска бокового зеркала</h3>
          <p>От 4000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>
    </div>
  </section>

  <!-- Вытягивание кузова стапелем -->
  <section class="kuzovnoy-remont-stapel">
    <h2>Автопокраска</h2>
    <div class="kuzovnoy-remont-wrap hero-content">
      <div class="kuzovnoy-remont-text">
        <p>
          Автопокраска — это не только внешний вид автомобиля, но и защита кузова от коррозии и внешних воздействий. Качественно выполненные покрасочные работы позволяют восстановить заводской облик и сохранить эстетичность автомобиля на долгие годы.</p>
        <p>Мы выполняем покраску с применением профессиональных лакокрасочных материалов и современного оборудования. Подготовка поверхности, подбор цвета и нанесение покрытия осуществляются с соблюдением технологических процессов и рекомендаций производителей.</p>
        <p>Контроль условий покраски и опыт мастеров обеспечивают равномерное покрытие, точное попадание в цвет и долговечный результат без дефектов, сохраняя презентабельный вид автомобиля после ремонта.</p>
        <a href="#" class="btn btn-primary">Узнать подробнее</a>
      </div>
      <div class="kuzovnoy-remont-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/img-10.png" alt="Автопокраска">
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