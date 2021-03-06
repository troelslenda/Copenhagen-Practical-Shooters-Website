<?php
/**
 * The template for displaying image attachments.
 *
 * @package influence
 * @since influence 1.0
 * @license GPL 2.0
 */

get_header();
?>

<section id="primary" class="content-area image-attachment">
	<div id="content" class="site-content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-meta">
					<?php echo influence_get_post_meta() ?>
					<?php edit_post_link( __( 'Edit', 'influence' ), '<span class="sep"> | </span> <span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-meta -->

				<nav id="image-navigation" class="site-navigation">
					<span class="previous-image"><?php previous_image_link( false, __( '&larr; Previous', 'influence' ) ); ?></span>
					<span class="next-image"><?php next_image_link( false, __( 'Next &rarr;', 'influence' ) ); ?></span>
				</nav><!-- #image-navigation -->
			</header><!-- .entry-header -->

			<div class="entry-content">

				<div class="entry-attachment">
					<div class="attachment">
						<?php $next_attachment_url = influence_next_attachment_url(); ?>

						<a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment">
							<?php
							$attachment_size = apply_filters( 'influence_attachment_size', array( 1200, 1200 ) ); // Filterable image size.
							echo wp_get_attachment_image( $post->ID, $attachment_size );
							?>
						</a>
					</div><!-- .attachment -->

					<?php if ( ! empty( $post->post_excerpt ) ) : ?>
					<div class="entry-caption">
						<?php the_excerpt(); ?>
					</div><!-- .entry-caption -->
					<?php endif; ?>
				</div><!-- .entry-attachment -->

				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'influence' ), 'after' => '</div>' ) ); ?>

			</div><!-- .entry-content -->

			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'influence' ), ' <span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</article><!-- #post-<?php the_ID(); ?> -->

		<?php comments_template(); ?>

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content .site-content -->
</section><!-- #primary .content-area .image-attachment -->

<?php get_footer(); ?>