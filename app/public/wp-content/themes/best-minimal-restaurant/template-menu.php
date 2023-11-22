<?php
/**
 * Template Name: Menu Page Template
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
				// Menu page template parts.
				get_template_part( "template-parts/{$active_template}/content", 'menu' );

			
			

			?>
			
		</div>
	</main>

	<!---- Footer ---->
	<?php get_footer(); ?>
