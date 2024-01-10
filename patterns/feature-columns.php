<?php
/**
 * Title: Feature Columns
 * Slug: quickwp/feature-columns
 * Categories: quickwp/features
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

$images = array(
	QuickWP_URL . 'assets/img/qwp-img-02.webp',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"xx-large"} -->
		<h1 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size"><?php echo esc_html( $quickwp_strings['hero_title'] ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"large"} -->
		<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color has-large-font-size"><?php echo esc_html( $quickwp_strings['section_description'] ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php echo esc_html( $quickwp_strings['button_text_2'] ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html( $quickwp_strings['button_text'] ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:image {"align":"wide","id":240,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image alignwide size-full is-style-default"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-240" /></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
