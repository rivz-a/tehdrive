<?php
/**
 * The template for displaying a single post
 *
 * @package tehdrive
 */

get_header();
?>

<main id="primary" class="site-main container">

	<?php tehdrive_breadcrumbs(); ?>

	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<?php
			// Навигация между записями (предыдущая / следующая)
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Предыдущая запись', 'tehdrive' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Следующая запись', 'tehdrive' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			?>

		</article>

	<?php endwhile; ?>

	<!-- ЭТАПЫ РАБОТЫ -->
  <?php get_template_part('template-parts/block', 'stages-work'); ?>

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