<?php
/**
 * Title: Content on Background
 * Slug: quickwp/content-on-background
 * Categories: quickwp/content
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

$images = array(
	apply_filters( 'quickwp/content-on-background/image', QUICKWP_URL . 'assets/images/qwp-img-09.webp' ),
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-4"}}}},"backgroundColor":"base-3","textColor":"contrast-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-4-color has-base-3-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php echo esc_html( apply_filters( 'quickwp/content-on-background/subtitle', $quickwp_strings['content_subtitle'] ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php echo esc_html( apply_filters( 'quickwp/content-on-background/title', $quickwp_strings['content_title'] ) ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php echo esc_html( apply_filters( 'quickwp/content-on-background/paragraph-1', $quickwp_strings['paragraph_text'] ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:image {"align":"wide","id":240,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image alignwide size-large is-style-default"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-240"/></figure>
	<!-- /wp:image -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html( apply_filters( 'quickwp/content-on-background/paragraph-2', $quickwp_strings['paragraph_text'] ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html( apply_filters( 'quickwp/content-on-background/heading', $quickwp_strings['section_title'] ) ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php echo esc_html( apply_filters( 'quickwp/content-on-background/paragraph-3', $quickwp_strings['paragraph_text'] ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link wp-element-button"><?php echo esc_html( apply_filters( 'quickwp/content-on-background/button', $quickwp_strings['button_text_2'] ) ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
