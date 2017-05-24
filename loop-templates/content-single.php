<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */
global $galleryId;
$post_id = $post->ID;
$galleryId = get_post_meta($post_id, 'viewbook', true);
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


	<?php echo get_the_post_thumbnail( $post->ID, 'folio-image', array( 'class' => 'pb-3' )); ?>
	
	<div class="post-gallery-link float-right"> <?php $len=strlen($galleryId); if ($len > 1) { ?> <a href="<?php echo $galleryId; ?>"><i class="fa fa-picture-o" aria-hidden="true"></i></a><?php }?></div>
	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
