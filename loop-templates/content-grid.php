<?php
/**
 * Partial template to display latest posts (home.php) as grid.
 *
 * @package understrap
 */

$col = 4;
?>


	<div class="container-fluid article-card">

		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
		<div class="row card card-inverse ">
		
			
				<?php
					 $videourl = get_the_post_video_url();
					  $alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true ); ?>
				<?php if ($videourl): 
					$vimeourl = get_post_meta($post->ID, 'vimeo', true);
				?>
				
				<div class="featured-video-plus post-thumbnail fvp-responsive fvp-vimeo fvp-center">
						<video width= "100%" autoplay loop muted playsinline>
  <source src="<?php echo $vimeourl;?>">
  </video></div>
						
						
							
						<?php else :
							
						?>

				<img class="card-img "
				     src="<?php echo esc_html( get_the_post_thumbnail_url( $post->ID, 'homepage' ) ) ?>" alt="<?php echo esc_html( $alt ); ?>">
					 <?php endif;?> 
				<div class="card-img-overlay">

					<header class="entry-header">
						<div class="container">
							<?php digidol_site_title(2); ?>
 						<h4 class="card-title"><span class="zero">0</span><span class="point">.</span><span class="post-incr"><?php echo esc_html( get_post_meta($post->ID,'incr_number',true));  ?></span></h4> 

						<?php if ( 'post' === get_post_type() ) : ?>

							
						<?php endif; ?>
						</div>
					</header>

				</div>

			

			
		</div>
		</a>

	</div>

