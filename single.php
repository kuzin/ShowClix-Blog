<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
<div id="wrapper">
    <div id="container">
        <div id="faux-col">
        	<div id="page-wrap">
            	<?php get_template_part( 'loop', 'single' ); ?>
            </div>
            <div id="sidebar-wrap">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>