<?php
/**
 * Template Name: One column, no sidebar
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
<div id="wrapper">
    <div id="container">
        <div id="faux-col one-col">
        	<div id="page-wrap one-col">
            	<?php get_template_part( 'loop', 'page' ); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>