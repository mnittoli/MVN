<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MVN
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mvn' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mvn' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mvn' ), 'mvn', '<a href="http://www.MikeNittoli.com" rel="designer">Michael Vincent Nittoli</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

	<script>	
		jQuery(function() {
			var isMenuOpen = false;
		jQuery ('.hamburger-icon').click(function() {
                      if (isMenuOpen) {
                                      jQuery('.header-text, .site-branding').show();
                                      jQuery('.header-menu').hide('slow');

		} else {
                var headerHeight = jQuery('#masterhead').css('height')
                alert(headerHeight);
                jQuery('.header-text,.site-branding').hide();
                                jQuery('.header-menu').show('slow');
		}

            });




		  jQuery('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = jQuery(this.hash);
		      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        jQuery('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1300);
		        return false;
		      }
		    }
		  });
		});
	</script>

</body>
</html>
