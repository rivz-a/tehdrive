<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tehdrive
 */

?>

</main><!-- #main -->

<footer id="colophon" class="site-footer">
	<div class="footer-container">
		<!-- Левая колонка: логотип и описание -->
		<div class="footer-column footer-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="QR-код для Telegram" width="162">
			<p>Полный комплекс авторемонта. Быстро. Точно. С гарантией качества</p>
			<div class="footer-telegram">
				<h4>Мы в Telegram</h4>
				<img src="<?php echo get_template_directory_uri(); ?>/images/telegram-qr.png" alt="QR-код для Telegram" width="150">
			</div>
		</div>

		<!-- Центральная колонка: контакты -->
		<div class="footer-column footer-contacts">
			<h3>Наши контакты</h3>
			<div class="contact-item">
				<strong>Адрес</strong>
				<p>108802, г. Москва, Новомосковский административный округ, район Коммунарка, 6, квартал № 70</p>
			</div>
			<div class="contact-item">
				<strong>E-mail</strong>
				<p><a href="mailto:tehdrive@tehdrive.ru">tehdrive@tehdrive.ru</a></p>
			</div>
			<div class="contact-item">
				<strong>Телефоны</strong>
				<p>+7 (903) 571 9999</p>
			</div>
			<a href="#" class="btn btn-primary popmake-90">Заказать звонок</a>
		</div>

		<!-- Правые колонки: услуги -->
		<div class="footer-column">
			<h4>Кузовной ремонт</h4>
			<ul>
				<li><a href="#">Штабель вытяжения</a></li>
				<li><a href="#">Ремонт бамперов</a></li>
				<li><a href="#">Ремонт кузова без покраски</a></li>
				<li><a href="#">Арматурные работы</a></li>
				<li><a href="#">Жестяные работы</a></li>
				<li><a href="#">Ремонт вмятин</a></li>
				<li><a href="#">Ремонт сколов</a></li>
				<li><a href="#">Ремонт суппортов</a></li>
				<li><a href="#">Локальный ремонт кузова автомобиля</a></li>
				<li><a href="#">Восстановление геометрии кузова</a></li>
				<li><a href="#">Ремонт и замена порогов</a></li>
				<li><a href="#">Ремонт кузова автомобиля</a></li>
				<li><a href="#">Ремонт и замена фар автомобиля</a></li>
				<li><a href="#">Ремонт крышки багажника</a></li>
				<li><a href="#">Ремонт и замена крыла автомобиля</a></li>
				<li><a href="#">Ремонт двери автомобиля</a></li>
				<li><a href="#">Ремонт и замена лонжеронов</a></li>
				<li><a href="#">Ремонт крыши автомобиля</a></li>
				<li><a href="#">Ремонт бокового зеркала заднего вида</a></li>
				<li><a href="#">Ремонт рамы</a></li>
				<li><a href="#">Стапельные работы</a></li>
				<li><a href="#">Сварочные работы</a></li>
			</ul>
		</div>

		<div class="footer-column">
			<h4>Слесарный ремонт</h4>
			<ul>
				<li><a href="#">Замена сцепления</a></li>
				<li><a href="#">Замена тормозных дисков</a></li>
				<li><a href="#">Замена тормозных колодок</a></li>
				<li><a href="#">Ремонт рулевого управления</a></li>
				<li><a href="#">Ремонт двигателя</a></li>
				<li><a href="#">Ремонт подвески</a></li>
				<li><a href="#">Ремонт топливной системы</a></li>
				<li><a href="#">Ремонт выхлопной системы</a></li>
				<li><a href="#">Ремонт системы охлаждения двигателя</a></li>
				<li><a href="#">Ремонт тормозной системы</a></li>
				<li><a href="#">Замена глушителя</a></li>
			</ul>
		</div>

		<div class="footer-column">
			<h4>Сход-развал 3D</h4>
			<ul>
				<li><a href="#">3D сход-развал</a></li>
				<li><a href="#">Балансировка колес</a></li>
				<li><a href="#">Диагностика подвески</a></li>
			</ul>
		</div>

		<div class="footer-column">
			<h4>Автопокраска</h4>
			<ul>
				<li><a href="#">Малярные работы</a></li>
				<li><a href="#">Покраска суппортов</a></li>
				<li><a href="#">Полная покраска автомобиля</a></li>
				<li><a href="#">Покраска деталей автомобиля</a></li>
				<li><a href="#">Покраска мотоцикла</a></li>
				<li><a href="#">Частичная покраска</a></li>
				<li><a href="#">Покраска крыши автомобиля</a></li>
				<li><a href="#">Покраска крыла</a></li>
				<li><a href="#">Покраска двери автомобиля</a></li>
				<li><a href="#">Покраска капота</a></li>
				<li><a href="#">Покраска бампера</a></li>
				<li><a href="#">Покраска багажника</a></li>
				<li><a href="#">Покраска бокового зеркала</a></li>
			</ul>
		</div>

	</div>

	<!-- Юридический текст -->
	<div class="footer-disclaimer">
		<br><a href='<?php echo get_template_directory_uri(); ?>/politica.docx'>Политика компании в отношении обработки персональных данных</a><br>
		Обращаем ваше внимание на то, что данный Интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации. Для получения подробной информации о стоимости обращайтесь к менеджерам ТЕХДРАЙВ. Права на сайт принадлежат "ТЕХДРАЙВ" (ИНН 056209519680) тел. +7 (903) 571 9999, адрес эл. почты info@tehdrive.ru</p>
	</div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>