<!-- НАШИ РАБОТЫ -->
<section class="our-works">
  <div class="container">
    <h2>Наши работы</h2>

    <!-- Кнопки управления -->
    <div class="slider-nav">
      <button class="slider-prev" aria-label="Предыдущая работа">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
      <button class="slider-next" aria-label="Следующая работа">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>

    <!-- Слайдер работ -->
    <div class="works-slider" data-current="0">
      <div class="works-slide">
        <a href="/mercedes-e-klass-kak-zamena-tormoznyh-kolodok-vernula-bezopasnost-i-komfort/">
          <div class="work-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-15.jpg" alt="Mercedes-Benz GLS-Класс">
            <p>Заменили колодки на Mercedes-Benz GLS-Класс</p>
          </div>
        </a>
      </div>
      <div class="works-slide">
        <a href="/vosstanovlenie-bmw-x5/">
          <div class="work-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-16.jpg" alt="Ford Transit">
            <p>Покрасили Ford Transit</p>
          </div>
        </a>
      </div>
      <div class="works-slide">
        <a href="/kak-pravilnyj-shod-razval-vernul-avtomobilyu-nemeczkij-harakter/">
          <div class="work-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-17.jpg" alt="BMW 5 series Touring Octopus">
            <p>Сход - развал BMW 5 series Touring Octopus</p>
          </div>
        </a>
      </div>
    </div>

    <!-- Индикаторы -->
    <div class="slider-dots"></div>
  </div>
</section>