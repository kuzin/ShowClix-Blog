<?php
/**
 * The template for displaying Category Archive pages.
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
				<h1 class="category-title"><?php
					printf( __( 'Category Archives: <strong>%s</strong>', 'starkers' ), '' . single_cat_title( '', false ) . '' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				get_template_part( 'loop', 'category' );
				?>
            </div>
        <div id="sidebar-wrap">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>