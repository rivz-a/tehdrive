<?php

/**
 * tehdrive functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tehdrive
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tehdrive_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tehdrive, use a find and replace
		* to change 'tehdrive' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('tehdrive', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'tehdrive'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tehdrive_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'tehdrive_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tehdrive_content_width()
{
	$GLOBALS['content_width'] = apply_filters('tehdrive_content_width', 640);
}
add_action('after_setup_theme', 'tehdrive_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tehdrive_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'tehdrive'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'tehdrive'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'tehdrive_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tehdrive_scripts()
{
	wp_enqueue_style('tehdrive-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('tehdrive-style', 'rtl', 'replace');

	wp_enqueue_script('tehdrive-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// Подключаем слайдер услуг
	wp_enqueue_script(
		'tehdrive-services-slider',
		get_template_directory_uri() . '/js/services-slider.js',
		array(),
		_S_VERSION,
		true
	);

	// Слайдер "Наши работы"
	wp_enqueue_script(
		'tehdrive-works-slider',
		get_template_directory_uri() . '/js/works-slider.js',
		array(),
		_S_VERSION,
		true
	);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'tehdrive_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Хлебные крошки для темы tehdrive
 *
 * @return void
 */
if (!function_exists('tehdrive_breadcrumbs')) {
	function tehdrive_breadcrumbs()
	{
		// Не показываем на главной
		if (is_front_page() || is_home()) {
			return;
		}

		echo '<nav class="breadcrumbs" aria-label="Хлебные крошки">';
		echo '<ol>';

		// Ссылка на главную
		echo '<li><a href="' . esc_url(home_url('/')) . '">Главная</a></li>';

		if (is_category()) {
			// Только рубрика — без "Блог"
			echo '<li>' . single_cat_title('', false) . '</li>';
		} elseif (is_single()) {
			// Для записей — показываем рубрику(и), но не "Блог", если не задана страница записей
			$categories = get_the_category();
			if ($categories) {
				// Берём первую рубрику (или можно показать все)
				$category = $categories[0];
				echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
			}
			echo '<li>' . get_the_title() . '</li>';
		} elseif (is_page()) {
			// Иерархия страниц
			$post = get_post();
			if ($post->post_parent) {
				$parent_id = $post->post_parent;
				$parents   = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					$parents[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
					$parent_id = $page->post_parent;
				}
				$parents = array_reverse($parents);
				foreach ($parents as $parent) {
					echo $parent;
				}
			}
			echo '<li>' . get_the_title() . '</li>';
		} elseif (is_search()) {
			echo '<li>Результаты поиска: ' . esc_html(get_search_query()) . '</li>';
		} elseif (is_404()) {
			echo '<li>Ошибка 404</li>';
		} elseif (is_tag()) {
			echo '<li>Метка: ' . single_tag_title('', false) . '</li>';
		} elseif (is_author()) {
			echo '<li>Автор: ' . esc_html(get_the_author_meta('display_name', get_query_var('author'))) . '</li>';
		} elseif (is_date()) {
			echo '<li>Архив по дате</li>';
		} elseif (is_tax()) {
			$term = get_queried_object();
			if ($term && !is_wp_error($term)) {
				$taxonomy = get_taxonomy($term->taxonomy);
				if ($taxonomy) {
					echo '<li>' . esc_html($taxonomy->labels->name) . '</li>';
					echo '<li>' . esc_html($term->name) . '</li>';
				}
			}
		}

		echo '</ol>';
		echo '</nav>';
	}
}