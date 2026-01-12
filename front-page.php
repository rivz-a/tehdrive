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
            <a href="/kuzovnoj-remont/shtabelnye-raboty-vytyazhenie/" class="service-tag">Штабель вытяжения</a>
            <a href="/kuzovnoj-remont/remont-bamperov/" class="service-tag">Ремонт бамперов</a>
            <a href="/kuzovnoj-remont/remont-kuzova-bez-pokraski/" class="service-tag">Ремонт кузова без покраски</a>
            <a href="/kuzovnoj-remont/armaturnye-raboty/" class="service-tag">Арматурные работы</a>
            <a href="/kuzovnoj-remont/zhestyanye-raboty/" class="service-tag">Жестяные работы</a>
            <a href="/kuzovnoj-remont/remont-vmyatin/" class="service-tag">Ремонт вмятин</a>
            <a href="/kuzovnoj-remont/remont-supportov/" class="service-tag">Ремонт суппортов</a>
            <a href="/kuzovnoj-remont/remont-skolov/" class="service-tag">Ремонт сколов</a>
            <a href="/kuzovnoj-remont/lokalnyj-remont-kuzova/" class="service-tag">Локальный ремонт кузова автомобиля</a>
            <a href="/kuzovnoj-remont/vosstanovlenie-geometrii-kuzova/" class="service-tag">Восстановление геометрии кузова</a>
            <a href="/kuzovnoj-remont/remont-i-zamena-porogov/" class="service-tag">Ремонт и замена порогов</a>
            <a href="/kuzovnoj-remont/remont-kuzova-avtomobilya/" class="service-tag">Ремонт кузова автомобиля</a>
            <a href="/kuzovnoj-remont/remont-i-zamena-far-avtomobilya/" class="service-tag">Ремонт и замена фар автомобиля</a>
            <a href="/kuzovnoj-remont/remont-kryshki-bagazhnika/" class="service-tag">Ремонт крышки багажника</a>
            <a href="/kuzovnoj-remont/remont-i-zamena-kryla-avtomobilya/" class="service-tag">Ремонт и замена крыла автомобиля</a>
            <a href="/kuzovnoj-remont/remont-dveri-avtomobilya/" class="service-tag">Ремонт двери автомобиля</a>
            <a href="/kuzovnoj-remont/remont-i-zamena-lonzheronov/" class="service-tag">Ремонт и замена лонжеронов</a>
            <a href="/kuzovnoj-remont/remont-kryshi-avtomobilya/" class="service-tag">Ремонт крыши автомобиля</a>
            <a href="/kuzovnoj-remont/remont-bokovogo-zerkala-zadnego-vida/" class="service-tag">Ремонт бокового зеркала заднего вида</a>
            <a href="/kuzovnoj-remont/remont-ramy/" class="service-tag">Ремонт рамы</a>
            <a href="/kuzovnoj-remont/stapelnye-raboty/" class="service-tag">Стапельные работы</a>
            <a href="/kuzovnoj-remont/svarochnye-raboty/" class="service-tag">Сварочные работы</a>
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
            <a href="/shod-razval/3d-shod-razval/" class="service-tag">3D сход-развал</a>
            <a href="/shod-razval/balansirovka-koles/" class="service-tag">Балансировка колес</a>
            <a href="/shod-razval/diagnostika-podveski/" class="service-tag">Диагностика подвески</a>
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
            <a href="/slesarnyj-remont/zamena-sczepleniya/" class="service-tag">Замена сцепления</a>
            <a href="/slesarnyj-remont/zamena-tormoznyh-diskov/" class="service-tag">Замена тормозных дисков</a>
            <a href="/slesarnyj-remont/zamena-tormoznyh-kolodok/" class="service-tag">Замена тормозных колодок</a>
            <a href="/slesarnyj-remont/remont-rulevogo-upravleniya/" class="service-tag">Ремонт рулевого управления</a>
            <a href="/slesarnyj-remont/remont-dvigatelya/" class="service-tag">Ремонт двигателя</a>
            <a href="/slesarnyj-remont/remont-podveski/" class="service-tag">Ремонт подвески</a>
            <a href="/slesarnyj-remont/remont-toplivnoj-sistemy/" class="service-tag">Ремонт топливной системы</a>
            <a href="/slesarnyj-remont/remont-vyhlopnoj-sistemy/" class="service-tag">Ремонт выхлопной системы</a>
            <a href="/slesarnyj-remont/remont-sistemy-ohlazhdeniya-dvigatelya/" class="service-tag">Ремонт системы охлаждения двигателя</a>
            <a href="/slesarnyj-remont/protochka-tormoznyh-diskov/"  class="service-tag">Проточка тормозных дисков</a>
            <a href="/slesarnyj-remont/remont-tormoznoj-sistemy/" class="service-tag">Ремонт тормозной системы</a>
            <a href="/slesarnyj-remont/zamena-glushitelya/"  class="service-tag">Замена глушителя</a>
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
            <a href="/avtopokraska/malyarnye-raboty/"  class="service-tag">Малярные работы</a>
            <a href="/avtopokraska/pokraska-supportov/"  class="service-tag">Покраска суппортов</a>
            <a href="/avtopokraska/polnaya-pokraska-avtomobilya/" class="service-tag">Полная покраска автомобиля</a>
            <a href="/avtopokraska/pokraska-detalej-avtomobilya/" class="service-tag">Покраска деталей автомобиля</a>
            <a href="/avtopokraska/pokraska-motoczikla/" class="service-tag">Покраска мотоцикла</a>
            <a href="/avtopokraska/chastichnaya-pokraska/" class="service-tag">Частичная покраска</a>
            <a href="/avtopokraska/pokraska-kryshi-avtomobilya/" class="service-tag">Покраска крыши автомобиля</a>
            <a href="/avtopokraska/pokraska-kryla/" class="service-tag">Покраска крыла</a>
            <a href="/avtopokraska/pokraska-dveri-avtomobilya/" class="service-tag">Покраска двери автомобиля</a>
            <a href="/avtopokraska/pokraska-kapota/" class="service-tag">Покраска капота</a>
            <a href="/avtopokraska/pokraska-bampera/" class="service-tag">Покраска бампера</a>
            <a href="/avtopokraska/pokraska-bagazhnika/" class="service-tag">Покраска багажника</a>
            <a href="/avtopokraska/pokraska-bokovogo-zerkala/" class="service-tag">Покраска бокового зеркала</a>
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