<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ThemeGrill
 * @subpackage Radiate-Child
 * @since Radiate 1.0
 */
?>
	<div id="secondary" class="side-area" role="complementary">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<!--<//?php the_content(); ?>-->
			<?php endwhile; ?>
		<?php endif; ?>
	</div><!-- #secondary -->
