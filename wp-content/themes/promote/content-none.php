<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package promote
 */

?>

<section class="no-results not-found">
	<div id="sub_banner">
 		<h1><?php single_post_title(); ?></h1>
		<div class='h-line'></div>
	</div><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p class="pique-get-started"><?php printf( wp_kses( __( 'Ready to publish promoter first post? <a href="%1$s">Get started here</a>.', 'promote' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched promoter search terms. Please try again with some different keywords.', 'promote' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what promote&rsquo;re looking for. Perhaps searching can help.', 'promote' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
