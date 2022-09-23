<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gka_theme
 */

?>

<section class="no-results not-found py-3">
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'gka_theme' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

		<div class="nothing-found">
			Sorry, no matches were found.<br>
			Please try again with some different keywords.
		</div>
		<?php
			get_search_form();

		else :
			?>

		<p><?php esc_html_e( '', 'gka_theme' ); ?>
		</p>
		<div class="nothing-found">
			It seems we can&rsquo;t find what you&rsquo;re looking for. <br>
			Perhaps searching can help.
		</div>
		<?php
			get_search_form();
		endif;
		?>
	</div>
</section>