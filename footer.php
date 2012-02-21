<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<footer>

<?php
	get_sidebar( 'footer' );
?>

<style type="text/css" media="screen">
    .footer-wrap {
        width: 960px;
        margin: 0 auto;
        padding: 15px 0;
    }
</style>

        <div class="footer-wrap">

    		<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    			<?php bloginfo( 'name' ); ?> aniofniofaosinfasoin
    		</a>

		</div>

	</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>