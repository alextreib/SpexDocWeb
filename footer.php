<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" role="contentinfo" class="header-footer-group">

	<div class="section-inner">

		<div class="footer-logo">
						<?php twentytwenty_site_logo(); ?>
		</div>
		<div class="footer-credits">

			<p class="footer-copyright">&copy;

				<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
			</p><!-- .footer-copyright -->

		</div><!-- .footer-credits -->

		<a class="to-the-top" href="#page-top">
			<span class="to-the-top-long">
				<?php
				/* translators: %s: HTML character for up arrow. */
				printf(__('To the top %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
				?>
			</span><!-- .to-the-top-long -->
			<span class="to-the-top-short">
				<?php
				/* translators: %s: HTML character for up arrow. */
				printf(__('Up %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
				?>
			</span><!-- .to-the-top-short -->
		</a><!-- .to-the-top -->

	</div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>