<?php

/**
 * Template Name: Главная страница
 *
 * @package tehdrive
 */

get_header();
?>

<main id="primary" class="site-main front-page">

  <!-- HERO -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>
          <span class="hero-highlight">ТЕХДРАЙВ.</span><br>
          Выпрямляем.<br>
          Красим.<br>
          Настраиваем.<br>
          Полный цикл<br>
          для вашего авто
        </h1>
        <p>Получите бесплатную консультацию и предварительную оценку работ от наших мастеров</p>
        <a href="#" class="btn btn-primary popmake-90">Заказать звонок</a>
        <p class="privacy-note">Сохраняем конфиденциальность ваших данных</p>
      </div>
      <div class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/main-img.png" alt="Mercedes-Benz на подъёмнике">
      </div>
    </div>
  </section>

  <!-- НАШИ УСЛУГИ -->
  <section class="services">
    <div class="container">
      <h2>Наши услуги</h2>

      <!-- Стрелки управления -->
      <div class="slider-controls-dots">
        <!-- Точки будут добавлены через JS -->
      </div>

      <!-- Слайдер услуг -->
      <div class="services-slider" data-current="0">
        <!-- Слайд 1 -->
        <div class="services-slide">
          <div class="service-card">
            <div class="service-content">
              <h3>Кузовной ремонт</h3>
              <p>Работаем с повреждениями любой сложности — от мелких дефектов до серьёзных восстановительных работ</p>
              <div class="service-actions">
                <a href="#" class="btn btn-outline popmake-90">Заказать звонок</a>
                <a href="#" class="btn btn-secondary">Подробнее</a>
              </div>
            </div>
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Мастер полирует кузов">
            </div>
          </div>

          <div class="services-list">
            <button class="service-tag">Штабель вытяжения</button>
            <button class="service-tag">Ремонт бамперов</button>
            <button class="service-tag">Ремонт кузова без покраски</button>
            <button class="service-tag">Арматурные работы</button>
            <button class="service-tag">Жестяные работы</button>
            <button class="service-tag">Ремонт вмятин</button>
            <button class="service-tag">Ремонт суппортов</button>
            <button class="service-tag">Локальный ремонт кузова автомобиля</button>
            <button class="service-tag">Восстановление геометрии кузова</button>
            <button class="service-tag">Ремонт и замена порогов</button>
            <button class="service-tag">Ремонт кузова автомобиля</button>
            <button class="service-tag">Ремонт и замена фар автомобиля</button>
            <button class="service-tag">Ремонт крышки багажника</button>
            <button class="service-tag">Ремонт и замена крыла автомобиля</button>
            <button class="service-tag">Ремонт двери автомобиля</button>
            <button class="service-tag">Ремонт и замена лонжеронов</button>
            <button class="service-tag">Ремонт крыши автомобиля</button>
            <button class="service-tag">Ремонт бокового зеркала заднего вида</button>
            <button class="service-tag">Ремонт рамы</button>
            <button class="service-tag">Стапельные работы</button>
            <button class="service-tag">Сварочные работы</button>
          </div>
        </div>

        <!-- Слайд 2 -->
        <div class="services-slide">
          <div class="service-card">
            <div class="service-content">
              <h3>Сход-развал</h3>
              <p>Точная настройка углов установки колёс на современном 3D-оборудовании</p>
              <div class="service-actions">
                <a href="#" class="btn btn-outline popmake-90">Заказать звонок</a>
                <a href="#" class="btn btn-secondary">Подробнее</a>
              </div>
            </div>
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="3D сход-развал">
            </div>
          </div>

          <div class="services-list">
            <button class="service-tag">3D сход-развал</button>
            <button class="service-tag">Балансировка колес</button>
            <button class="service-tag">Диагностика подвески</button>
            <!-- добавьте свои теги -->
          </div>
        </div>

        <!-- Слайд 3 -->
        <div class="services-slide">
          <div class="service-card">
            <div class="service-content">
              <h3>Слесарный ремонт</h3>
              <p>Работаем с повреждениями любой сложности — от мелких дефектов до серьёзных восстановительных работ</p>
              <div class="service-actions">
                <a href="#" class="btn btn-outline popmake-90">Заказать звонок</a>
                <a href="#" class="btn btn-secondary">Подробнее</a>
              </div>
            </div>
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-03.png" alt="3D сход-развал">
            </div>
          </div>

          <div class="services-list">
            <button class="service-tag">Замена сцепления</button>
            <button class="service-tag">Замена тормозных дисков</button>
            <button class="service-tag">Замена тормозных колодок</button>
            <button class="service-tag">Ремонт рулевого управления</button>
            <button class="service-tag">Ремонт двигателя</button>
            <button class="service-tag">Ремонт подвески</button>
            <button class="service-tag">Ремонт топливной системы</button>
            <button class="service-tag">Ремонт выхлопной системы</button>
            <button class="service-tag">Ремонт системы охлаждения двигателя</button>
            <button class="service-tag">Проточка тормозных дисков</button>
            <button class="service-tag">Ремонт тормозной системы</button>
            <button class="service-tag">Замена глушителя</button>
          </div>
        </div>

        <!-- Слайд 4 -->
        <div class="services-slide">
          <div class="service-card">
            <div class="service-content">
              <h3>Автопокраска</h3>
              <p>Профессиональная покраска в специализированной камере с соблюдением всех технологических этапов</p>
              <div class="service-actions">
                <a href="#" class="btn btn-outline popmake-90">Заказать звонок</a>
                <a href="#" class="btn btn-secondary">Подробнее</a>
              </div>
            </div>
            <div class="service-image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-04.png" alt="Авто в покрасочной камере">
            </div>
          </div>

          <div class="services-list">
            <button class="service-tag">Малярные работы</button>
            <button class="service-tag">Покраска суппортов</button>
            <button class="service-tag">Полная покраска автомобиля</button>
            <button class="service-tag">Покраска деталей автомобиля</button>
            <button class="service-tag">Покраска мотоцикла</button>
            <button class="service-tag">Частичная покраска</button>
            <button class="service-tag">Покраска крыши автомобиля</button>
            <button class="service-tag">Покраска крыла</button>
            <button class="service-tag">Покраска двери автомобиля</button>
            <button class="service-tag">Покраска капота</button>
            <button class="service-tag">Покраска бампера</button>
            <button class="service-tag">Покраска багажника</button>
            <button class="service-tag">Покраска бокового зеркала</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ПРЕИМУЩЕСТВА -->
  <?php get_template_part('template-parts/block', 'advantages'); ?>

  <!-- КАК ЗАПИСАТЬСЯ -->
  <?php get_template_part('template-parts/block', 'how-to-book'); ?>

  <!-- НАШИ РАБОТЫ -->
  <?php get_template_part('template-parts/block', 'our-works'); ?>

  <!-- ЛОГОТИПЫ АВТОМОБИЛЕЙ -->
  <?php get_template_part('template-parts/block', 'car-brands'); ?>

</main>

<?php
get_footer();
?>