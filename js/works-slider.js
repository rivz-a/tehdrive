document.addEventListener('DOMContentLoaded', function () {
  const slider = document.querySelector('.works-slider');
  if (!slider) return;

  const slides = slider.querySelectorAll('.works-slide');
  const dotsContainer = slider.parentElement.querySelector('.slider-dots');
  const prevBtn = slider.parentElement.querySelector('.slider-prev');
  const nextBtn = slider.parentElement.querySelector('.slider-next');
  let currentIndex = 0;
  let autoSlideInterval;
  const autoSlideDelay = 7000; // 7 секунд

  // Создание точек
  function createDots() {
    if (!dotsContainer) return;
    dotsContainer.innerHTML = '';
    slides.forEach((_, i) => {
      const dot = document.createElement('button');
      dot.classList.add('slider-dot');
      if (i === currentIndex) dot.classList.add('active');
      dot.setAttribute('aria-label', `Перейти к работе ${i + 1}`);
      dot.dataset.index = i;
      dot.addEventListener('click', () => goToSlide(i));
      dotsContainer.appendChild(dot);
    });
  }

  // Показать слайд по индексу
  function showSlide(index) {
    // Сбрасываем все классы
    slides.forEach(slide => {
      slide.classList.remove('active', 'prev', 'next');
    });

    // Устанавливаем классы
    const current = slides[index];
    current.classList.add('active');

    // Предыдущий слайд
    const prevIndex = (index - 1 + slides.length) % slides.length;
    const prev = slides[prevIndex];
    prev.classList.add('prev');

    // Следующий слайд
    const nextIndex = (index + 1) % slides.length;
    const next = slides[nextIndex];
    next.classList.add('next');

    currentIndex = index;
    updateDots();
  }

  // Обновление активной точки
  function updateDots() {
    if (!dotsContainer) return;
    const dots = dotsContainer.querySelectorAll('.slider-dot');
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === currentIndex);
    });
  }

  // Перейти к слайду
  function goToSlide(index) {
    currentIndex = index;
    showSlide(currentIndex);
    resetAutoSlide();
  }

  // Следующий слайд
  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  // Предыдущий слайд
  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
  }

  // Запустить автопрокрутку
  function startAutoSlide() {
    stopAutoSlide();
    autoSlideInterval = setInterval(nextSlide, autoSlideDelay);
  }

  // Остановить автопрокрутку
  function stopAutoSlide() {
    if (autoSlideInterval) {
      clearInterval(autoSlideInterval);
      autoSlideInterval = null;
    }
  }

  // Сброс и перезапуск автопрокрутки
  function resetAutoSlide() {
    stopAutoSlide();
    startAutoSlide();
  }

  // Обработчики кнопок
  nextBtn.addEventListener('click', () => {
    nextSlide();
    resetAutoSlide();
  });

  prevBtn.addEventListener('click', () => {
    prevSlide();
    resetAutoSlide();
  });

  // Остановка при наведении
  slider.addEventListener('mouseenter', stopAutoSlide);
  slider.addEventListener('mouseleave', startAutoSlide);

  // Инициализация
  createDots();
  showSlide(currentIndex);
  startAutoSlide();

  // Очистка при выгрузке страницы
  window.addEventListener('beforeunload', stopAutoSlide);
});