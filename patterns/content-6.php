<?php
/**
 * Title: Content 6
 * Slug: quickwp/content-6
 * Categories: quickwp/content
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

$images = array(
	QUICKWP_URL . 'assets/images/qwp-img-06.webp', // Image path
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-4"}}}},"backgroundColor":"base-3","textColor":"contrast-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-4-color has-base-3-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"id":242,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-242" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"stretch","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:50%">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100%">
				<!-- wp:paragraph {"fontSize":"x-large"} -->
				<p class="has-x-large-font-size"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"layout":{"type":"constrained","contentSize":"300px","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} -->
					<p><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html( $quickwp_strings['button_text_2'] ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
