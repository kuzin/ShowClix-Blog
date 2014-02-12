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
        	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		
		m=s.getElementsByTagName(o)
		[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-41980729-4', 'showclix.com');
		ga('send', 'pageview');
    </script>

</body></html>
