<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'radiate_credits' ); ?>
			<?php _e( '&copy;Alles voor de Kunsten i.s.m ', 'Rutger Kroon' ); ?>
			<a href="http://rutgerkroon.nl/" rel="generator" target="_blank"><?php _e( 'Rutger Kroon' ); ?></a>
			<span class="sep"> | </span>
			<a href="http://facebook.com/" rel="generator"><?php _e( '<i class="fa fa-facebook"></i>' ); ?></a>
			<span class="sep"> | </span>
			<!--<a href="http://twitter.com/" rel="generator"><//?php _e( 'Twitter' ); ?></a>-->
			<a href="#" rel="generator"><i class="fa fa-twitter"></i></a>

		</div><!-- .site-info -->

	</footer><!-- #colophon -->
   <a href="#masthead" id="scroll-up"><span class="genericon genericon-collapse"></span></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
