<?php

/**
 * Template Name: Слесарный ремонт
 *
 * @package tehdrive
 */

get_header();
?>

<main id="primary" class="site-main container">

  <?php tehdrive_breadcrumbs(); ?>

  <!-- Баннер -->
  <section class="kuzovnoy-remont-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-img-2.jpg" alt="Мастер полирует кузов">
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
      <a href="/slesarnyj-remont/zamena-sczepleniya/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Замена сцепления</h3>
          <p>От 8000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/zamena-tormoznyh-diskov/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Замена тормозных дисков</h3>
          <p>От 5000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/zamena-tormoznyh-kolodok/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Замена тормозных колодок</h3>
          <p>От 3500 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/remont-rulevogo-upravleniya/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Ремонт рулевого управления</h3>
          <p>От 6000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/remont-dvigatelya/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Ремонт двигателя</h3>
          <p>От 15000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/remont-podveski/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Ремонт подвески</h3>
          <p>От 7000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/remont-toplivnoj-sistemy/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Ремонт топливной системы</h3>
          <p>От 5000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/remont-vyhlopnoj-sistemy/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Ремонт выхлопной системы</h3>
          <p>От 4000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/remont-sistemy-ohlazhdeniya-dvigatelya/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Ремонт системы охлаждения двигателя</h3>
          <p>От 4500 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/protochka-tormoznyh-diskov/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Проточка тормозных дисков</h3>
          <p>От 2500 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/remont-tormoznoj-sistemy/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Ремонт тормозной системы</h3>
          <p>От 5000 ₽</p>
        </div>
        <div class="kuzovnoy-remont-service-arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="#FF6B35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <a href="/slesarnyj-remont/zamena-glushitelya/" class="kuzovnoy-remont-service-item">
        <div class="kuzovnoy-remont-service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon.svg" alt="Ремонт авто" width="40" height="40">
        </div>
        <div class="kuzovnoy-remont-service-content">
          <h3>Замена глушителя</h3>
          <p>От 3500 ₽</p>
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
    <h2>слесарный ремонт</h2>
    <div class="kuzovnoy-remont-wrap hero-content">
      <div class="kuzovnoy-remont-text">
        <p>
          Слесарный ремонт — основа технической исправности и надёжной работы автомобиля. Своевременное обслуживание и устранение неисправностей позволяют избежать серьёзных поломок и сохранить ресурс основных узлов и агрегатов.</p>
        <p>Мы выполняем слесарные работы любой сложности с использованием профессионального инструмента и диагностического оборудования. Наши специалисты работают в соответствии с техническими регламентами и рекомендациями производителей автомобилей.</p>
        <p>Точный подход к ремонту и контроль на каждом этапе обеспечивают стабильную работу двигателя, подвески, тормозной системы и других важных компонентов, гарантируя безопасность и комфорт в эксплуатации автомобиля.</p>
        <a href="#" class="btn btn-primary">Узнать подробнее</a>
      </div>
      <div class="kuzovnoy-remont-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/img-09.png" alt="Слесарный ремонт">
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