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

    		<div class='wrap' style="width:960px; margin: 0 auto; padding: 15px 0;">
                <span id="tos">
                    Use of ShowClix is subject to our <a href="http://www.showclix.com/tos">Terms of Service</a>.
                    Copyright &copy; <?= date('Y'); ?> ShowClix Inc.
                    All Rights Reserved.
                </span>
            </div>


	</footer>

</body>
</html>