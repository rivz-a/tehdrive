<?php

/**
 * Template Name: Контакты
 *
 * @package tehdrive
 */

get_header();
?>

<main id="primary" class="site-main container">

  <?php tehdrive_breadcrumbs(); ?>

  <!-- Заголовок -->
  <section class="contacts-header">
    <h1>КОНТАКТЫ</h1>
  </section>

  <!-- Информация -->
  <section class="contacts-info">
    <div class="contacts-grid">
      <!-- Адрес -->
      <div class="contact-item">
        <h3>Адрес</h3>
        <p>108802, г. Москва, Новомосковский административный округ, район Коммунарка, 6, квартал № 70</p>
      </div>

      <!-- Телефоны -->
      <div class="contact-item">
        <h3>Телефоны</h3>
        <p><a href="tel:+79031770613">+7 (903) 571 9999</a></p>
      </div>

      <!-- Время работы -->
      <div class="contact-item">
        <h3>Время работы</h3>
        <p>Ежедневно<br>с 9:00 до 20:00</p>
      </div>

      <!-- E-mail -->
      <div class="contact-item">
        <h3>E-mail</h3>
        <p><a href="mailto:tehdrive@tehdrive.ru">tehdrive@tehdrive.ru</a></p>
      </div>

      <!-- Мы в Telegram -->
      <div class="contact-item">
        <h3>Мы в Telegram:</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/telegram-qr.png" alt="QR-код для Telegram" width="120">
      </div>

      <!-- Остались вопросы? -->
      <div class="contact-item contact-item-last hero-content">
        <h3>Остались вопросы?<br>Позвоните нам</h3>
        <a href="#" class="btn btn-primary popmake-90">Заказать звонок</a>
      </div>
    </div>
  </section>

  <!-- Карта -->
  <section class="contacts-map">
    <h3>Мы на карте</h3>
    <div class="map-wrapper">
      <!-- Здесь можно вставить iframe Яндекс.Карт или Google Maps -->
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8d9dcb605266be0ac3c367f4bb22942e41116f58badaa00eeca8ba18393b3ab8&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
  </section>
</main>

<!-- КАК ЗАПИСАТЬСЯ -->
<?php get_template_part('template-parts/block', 'how-to-book'); ?>

<?php
get_footer();
?>