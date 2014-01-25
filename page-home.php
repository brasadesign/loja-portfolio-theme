<?php
/**
 * Template Name: Home
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts

 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

// Enqueue showcase script for the slider
wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/showcase.js', array( 'jquery' ), '2011-04-28' );

get_header(); ?>
		<div id="primary" class="showcase">
		<div id="content" role="main">


					<div id="intro-bloco">
					
				<?php while ( have_posts() ) : the_post(); ?>

				<?php endwhile; ?>
					<?php
					/**
					 * We are using a heading by rendering the_content
					 * If we have content for this page, let's display it.
					 */
					if ( '' != get_the_content() )
						get_template_part( 'content', 'intro' );
				?>
						</div>
	

		</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
