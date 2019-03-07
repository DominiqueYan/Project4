<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-info">
				<div class="footer-contact-info">
					<p><i class="fas fa-envelope"></i><a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('info@inhabitent.com')); ?></a></p>
               		<p><i class="fas fa-phone"></i><a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('778-456-7891')); ?></a></p>
                	<p>
					<span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
					<p>
				</div>
				
				<div class="footer-logo">
					<a href= "<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent footer logo"/></a>
           		</div>
			</div>
           	<div class="footer-copyright">
                <p>copyright &copy; 2019 inhabitent </p>	
			</div>
		</footer><!-- #colophon -->
		

		<?php wp_footer(); ?>

	</body>
</html>
