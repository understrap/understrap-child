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


	<?php echo get_the_post_thumbnail( $post->ID, 'folio-image'); ?>
	
	<div class="post-gallery-link float-right"> <?php $len=strlen($galleryId); if ($len > 1) { ?> <a href="<?php echo $galleryId; ?>"><div class="gallery-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="30.28" viewBox="0 0 35 30.28">
  <image id="Gallery.svg" width="35" height="30.28" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAi4AAAHlBAMAAAAgo2oGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAGFBMVEX///9NTlBNTlBNTlBNTlD+/v7///8AAAC5j/9KAAAABHRSTlMAAP3+SIQmcQAAAAFiS0dEBxZhiOsAAAAJcEhZcwAALiMAAC4jAXilP3YAAAAHdElNRQfhBhoXASHtM7Q2AAAC9UlEQVR42u3Zu01DQRBA0RVQgPlUYjcAwi7BJUD/JRDawRPyExZc1udmI+0Ec9IdY1V3u9tou45l3O9vo3cuXLhw4cIlEBcuXLhw4VKICxcuXLhwKcSFCxcuRZfDcbKu5fI5Vx9cuHDhwoVLIC5cuHDhwqUQFy5cuHDhUogLFy5cuHApxIULFy5/6fJw9ubt8dQzFy5cuHDhwoULl0xcuHDhwoVLIS5cuHDhwqUQFy5cuHDhUogLFy5cuHApxIULFy5cuBTiwoULFy5cCnG5xOVs2J/uf+HChQsXLly4cAnFhQsXLly4FOLChQsXLlwKceHChQsXLoW4cOHChQuXQly4cOHChUshLly4cOHCpRAXLly4cOFSiAsXLly4cCnEhQsXLly4FOLChQsXLlwKceHChQsXLoW4cOHChQuXQly4cOHChUshLly4cOHCpRAXLly4cOFSiAsXLly4cCnEhQsXLly4FOLChQsXLlwKceHChQsXLoW4cOHChQuXQly4cOHChUshLly4cOHCpRAXLly4cOFSiAsXLly4cCnEhQsXLly4FOLChQsXLlwKceHChQsXLoW4cOHChQuXQly4cOHChUshLly4cOHCpRAXLly4cOFSiAsXLly4cCnEhQsXLly4FOLChQsXLlwKceHChQsXLoW4cOHChQuXQly4cOHChUshLly4cOHCpRAXLly4cOFSiAsXLly4cCnEhQsXLly4FOLChQsXLlwKceHChUve5ThZV3KZOS5cuHDhwqUQFy5cuHDhUogLFy5cuHApxIULFy4Vl6fdbbRd6TJX45u4cOHChQsXLlyKceHChQsXLoW4cOHChQuXX20zVseFCxcuXGou88aFCxcuXLgU4sKFCxcuXApx4cKFCxcuhbhw4cKFS91lsjZjdVy4cOHChQsXLlyCceHChQsXLoV+6LJ+e964LMdlOS7LcVmOy3KX/Sj88165cOHChQuXQFy4cOHChUshLly4cOHCpRAXLly4cKm7fAHffAQ8PA7PYAAAAABJRU5ErkJggg=="/>
</svg></div></a><?php }?></div>
	<header class="entry-header pt-3">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h4 class='subheading'><?php echo esc_html(get_post_meta($post_id, 'subheading', true)); ?></h3>
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
