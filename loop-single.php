<?php
/**
 * The loop that displays a single post.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<!-- <nav>
		          <?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'starkers' ) . ' %title' ); ?>
		          <?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'starkers' ) . '' ); ?>
		      </nav> -->

        <? if (has_post_thumbnail($post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <?php $videoembed = get_post_meta($post->ID, "videoembed", true); ?>
			<? if ($videoembed !== ''): ?>
				<div class="video_style">
				    <?= $videoembed; ?>
				</div>
			<? else: ?>
    			<div id="featured-image" style="width:660px;"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'starkers' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><img style="width: 100%" src="<?php echo $image[0]; ?>" alt="feature-image-<?=$post->ID?>"/></a></div>
            <? endif; ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('featured'); ?>>
        <? else: ?>
            <div id="shim">
                <?php $videoembed = get_post_meta($post->ID, "videoembed", true); ?>
    			<? if ($videoembed !== ''): ?>
    				<div class="video_style">
    				    <?= $videoembed; ?>
    				</div>
                <? endif; ?>
            </div>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <? endif; ?>

			<header>
				<h1><?php the_title(); ?></h1>
			</header>

			<?php the_content(); ?>

			<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>



			<footer>

                    <div class="primary">
                        <span class="author">
                            <?php starkers_posted_by(); ?>
                        </span>
                        <span class="published">
                            <?php starkers_posted_on(); ?>
                        </span>
                        <?php if ( count( get_the_category() ) ) : ?>
                            <span class="category">
                                <?php printf( __( 'Posted in %2$s', 'starkers' ),
                                    'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
                            </span>
                        <?php endif; ?>
                        <span class="entry-tags">
                            <?php $tags_list = get_the_tag_list( '', ', ' ); if ( $tags_list ):?>
                            <?php printf( '', 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> |
                            <?php endif; ?>
                        </span>
                        <span class="comment-count">
                            <?php comments_popup_link( __( 'Leave a comment', 'starkers' ),
                                __( '1 Comment', 'starkers' ), __( '% Comments', 'starkers' ) ); ?>
                        </span>
                        <?php if (count(edit_post_link)):?>
                            <span class="edit-this">
                                <?php edit_post_link( __( 'Edit', 'starkers' )); ?>
                            </span>
                        <?php endif; ?>
                    </div>

			</footer>

		</article>

		<nav>
			<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'starkers' ) . ' %title' ); ?>
			<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'starkers' ) . '' ); ?>
			<div class="clearfix"></div>
		</nav>

		<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>