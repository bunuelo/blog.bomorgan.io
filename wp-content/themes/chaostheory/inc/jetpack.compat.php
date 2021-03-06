<?php
/**
 * Compatibility settings and functions for Jetpack.
 * See http://jetpack.me/support/infinite-scroll/
 *
 * @package Chaostheory
 */


/**
 * Add support for Infinite Scroll.
 */
function chaostheory_infinite_scroll_init() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'content',
		'type'      => 'click',
		'render'    => 'chaostheory_infinite_scroll_render',
	) );
}
add_action( 'after_setup_theme', 'chaostheory_infinite_scroll_init' );

/**
 * Set the code to be rendered on for calling posts,
 * hooked to template parts when possible.
 *
 * Note: must define a loop.
 */
function chaostheory_infinite_scroll_render() {
	while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-meta">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<ul>
				<li class="entry-date"><a href="<?php the_permalink(); ?>"><?php printf( __( '%1$s &#8211; %2$s', 'chaostheory' ), get_the_date(), get_the_time() ); ?></a></li>
				<li class="entry-category"><?php printf( __( 'Posted in %s', 'chaostheory' ), get_the_category_list( ', ' ) ); ?></li>
				<?php the_tags( '<li class="entry-tags">'. __( 'Tagged', 'chaostheory' ) . ' ', ', ', '</li>' ); ?>
				<?php edit_post_link( __( 'Edit', 'chaostheory' ), '<li class="entry-editlink">', '</li>' ); ?>
				<li class="entry-commentlink"><?php comments_popup_link( __( 'Leave a Comment', 'chaostheory' ), __( 'Comments (1)', 'chaostheory' ), __( 'Comments (%)', 'chaostheory' ) ); ?></li>
			</ul>
		</div>
		<div class="entry-content">
			<?php the_content( '<span class="more-link">' . __( 'Read More &raquo;', 'chaostheory' ) . '</span>' ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages: ', 'chaostheory' ), 'after' => '</div>' ) ); ?>
		</div>
	</div><!-- .post -->

	<?php if ( comments_open() ) comments_template( '', true ); ?>
	<?php endwhile;
}
