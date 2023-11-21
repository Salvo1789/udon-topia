<?php
/**
 * Template Name: Home Page Template
 *
 * @package Best_Minimal_Restaurant
 * @author  PriceListo
 */

?>
	<!---- Header ---->
	<?php get_header(); ?>

	<main id="site-main primary" class="site-main">
		<div id="site-content" class="minimal-content-area">
			<?php
				// Home page template parts.
				get_template_part( "template-parts/{$active_template}/content", 'home' );

			

				// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
				endif;

			?>
		</div>
	</main>

	<!---- Footer ---->
	<?php get_footer(); ?>
