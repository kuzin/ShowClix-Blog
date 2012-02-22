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
                <span id="tos" style="font-size: 11px;color: #AAA;">
                    Use of ShowClix is subject to our <a href="http://www.showclix.com/tos">Terms of Service</a>.
                    Copyright &copy; <?= date('Y'); ?> ShowClix Inc.
                    All Rights Reserved.
                </span>
            </div>
	</footer>

	<script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1783789-3']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

</body></html>