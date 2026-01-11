<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'tehdrive'); ?></a>

		<header id="masthead" class="site-header">
			<div class="header-container">
				<!-- Логотип слева -->
				<div class="site-branding">
					<?php the_custom_logo(); ?>
					<?php if (! has_custom_logo()) : ?>
						<?php if (is_front_page() && is_home()) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php endif; ?>
						<?php $description = get_bloginfo('description', 'display'); ?>
						<?php if ($description || is_customize_preview()) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<!-- Навигационное меню по центру -->
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation menu', 'tehdrive'); ?>">
						<svg width="42" height="42" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="4" y="6" width="16" height="2" rx="1" fill="#333" />
							<rect x="8" y="12" width="16" height="2" rx="1" fill="#333" />
							<rect x="4" y="18" width="16" height="2" rx="1" fill="#333" />
						</svg>
					</button>

					<!-- Кнопка "закрыть" (скрыта по умолчанию) -->
					<button class="menu-close" aria-label="<?php esc_attr_e('Закрыть', 'tehdrive'); ?>" style="display: none;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18 6L6 18" stroke="#333" stroke-width="2" stroke-linecap="round" />
							<path d="M6 6L18 18" stroke="#333" stroke-width="2" stroke-linecap="round" />
						</svg>
					</button>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						)
					);
					?>
				</nav><!-- #site-navigation -->

				<!-- Кнопки справа -->
				<div class="header-actions">
					<a href="#" class="btn btn-outline popmake-90">Заказать звонок</a>
					<a href="tel:+79035719999" class="btn btn-primary">+7 (903) 571 9999</a>
				</div><!-- .header-actions -->
			</div><!-- .header-container -->
		</header><!-- #masthead -->