<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
$posts_style = 'grid';


	
	
	get_sidebar( 'statichero' );

?>



<div class="wrapper" id="wrapper-home">

	<div class="container-fluid" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<div class="col-md-12 content-area" id="primary">

			<?php if ( 'masonry' === $posts_style ) : ?>

			<div class="card-columns"><?php endif; ?>
			
				<main class="site-main" id="main">
					<div class="row">
				<?php $latest_blog_posts = new WP_Query( array( 'category_name' => 'article' ) );?>
					<?php if ( $latest_blog_posts->have_posts() ) : ?>

						<?php /* Start the Loop */ ?>

						<?php while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

							<?php
							if ( 'masonry' === $posts_style ) :
								get_template_part( 'loop-templates/content', 'card' );
							elseif ( 'grid' === $posts_style ) :

								get_template_part( 'loop-templates/content', 'grid' );
							else :
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'loop-templates/content', get_post_format() );
							endif;
							?>

						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>
				<?php if ( 'masonry' === $posts_style ) : ?></div><?php endif; ?>
				</div>
			</main><!-- #main -->

			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
	

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
