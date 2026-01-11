document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.services-slider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.services-slide');
    const dotsContainer = slider.parentElement.querySelector('.slider-controls-dots');
    let currentIndex = 0;
    let autoSlideInterval;
    const autoSlideDelay = 7000; // 7 секунд

    // Защита от слишком частых свайпов
    let isSwiping = false;
    let swipeCooldown = 1000; // 1 секунда задержки между свайпами
    let lastSwipeTime = 0;

    // Создаем точки управления
    function createDots() {
        dotsContainer.innerHTML = ''; // Очищаем контейнер

        slides.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('slider-dot');
            if (index === currentIndex) {
                dot.classList.add('active');
            }

            dot.setAttribute('aria-label', `Перейти к слайду ${index + 1}`);
            dot.addEventListener('click', () => {
                goToSlide(index);
                resetAutoSlide();
            });

            dotsContainer.appendChild(dot);
        });
    }

    // Показать слайд по индексу
    function showSlide(index) {
        // Скрываем все слайды
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });

        // Обновляем точки
        const dots = dotsContainer.querySelectorAll('.slider-dot');
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });

        slider.setAttribute('data-current', index);
        currentIndex = index;
    }

    // Перейти к конкретному слайду
    function goToSlide(index) {
        if (index < 0) index = slides.length - 1;
        if (index >= slides.length) index = 0;
        showSlide(index);
    }

    // Следующий слайд
    function nextSlide() {
        let nextIndex = currentIndex + 1;
        if (nextIndex >= slides.length) nextIndex = 0;
        showSlide(nextIndex);
    }

    // Предыдущий слайд
    function prevSlide() {
        let prevIndex = currentIndex - 1;
        if (prevIndex < 0) prevIndex = slides.length - 1;
        showSlide(prevIndex);
    }

    // Запустить автопрокрутку
    function startAutoSlide() {
        stopAutoSlide(); // Сначала останавливаем существующий интервал
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

    // Обработчики клавиатуры для доступности
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            resetAutoSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            resetAutoSlide();
        }
    });

    // Остановка при наведении, запуск при уходе
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);

    // Остановка при фокусе на точках
    dotsContainer.addEventListener('mouseenter', stopAutoSlide);
    dotsContainer.addEventListener('mouseleave', startAutoSlide);

    // Инициализация
    createDots();
    showSlide(currentIndex);
    startAutoSlide();

    // Очистка при выгрузке страницы
    window.addEventListener('beforeunload', stopAutoSlide);

    // Возможность переключения свайпом на мобильных устройствах
    let touchStartX = 0;
    let touchEndX = 0;
    let touchStartTime = 0;

    slider.addEventListener('touchstart', (e) => {
        if (isSwiping) return;

        touchStartX = e.changedTouches[0].screenX;
        touchStartTime = Date.now();
        stopAutoSlide();
        isSwiping = true;
    }, { passive: true });

    slider.addEventListener('touchmove', (e) => {
        if (!isSwiping) return;
        e.preventDefault();
    }, { passive: false });

    slider.addEventListener('touchend', (e) => {
        if (!isSwiping) return;

        touchEndX = e.changedTouches[0].screenX;
        const touchTime = Date.now() - touchStartTime;

        // Проверяем, можно ли делать свайп (защита от слишком частых свайпов)
        const now = Date.now();
        if (now - lastSwipeTime < swipeCooldown) {
            isSwiping = false;
            startAutoSlide();
            return;
        }

        handleSwipe(touchTime);
        lastSwipeTime = now;
        isSwiping = false;
        startAutoSlide();
    }, { passive: true });

    function handleSwipe(touchTime) {
        const swipeThreshold = 50; // минимальное расстояние свайпа
        const maxSwipeTime = 500; // максимальное время для свайпа (0.5 сек)

        // Проверяем, был ли это быстрый свайп
        if (touchTime > maxSwipeTime) {
            return; // Слишком медленный жест - не считаем свайпом
        }

        const swipeDistance = touchEndX - touchStartX;

        // Если свайп достаточно длинный и быстрый
        if (swipeDistance < -swipeThreshold) {
            // Свайп влево = следующий слайд
            nextSlide();
            resetAutoSlide(); // Полный сброс таймера
        } else if (swipeDistance > swipeThreshold) {
            // Свайп вправо = предыдущий слайд
            prevSlide();
            resetAutoSlide(); // Полный сброс таймера
        }
    }

    // Добавляем CSS класс для индикации свайпа (опционально)
    slider.style.transition = 'transform 0.3s ease';

    // Предотвращаем свайпы на точках
    dotsContainer.addEventListener('touchstart', (e) => {
        e.stopPropagation();
    });
});