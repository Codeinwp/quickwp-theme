<?php
/**
 * Title: Call to action 1
 * Slug: quickwp/call-to-action-1
 * Categories: call_to_action
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );


?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-4"}}}},"backgroundColor":"accent","textColor":"contrast-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-4-color has-accent-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"left","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-left has-xx-large-font-size"><?php echo esc_html( $quickwp_strings['quickwp_cta_title'] ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"left","fontSize":"large"} -->
		<p class="has-text-align-left has-large-font-size"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons alignwide">
		<!-- wp:button {"backgroundColor":"base-3","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-fill","fontSize":"large"} -->
		<div class="wp-block-button has-custom-font-size is-style-fill has-large-font-size">
			<a class="wp-block-button__link has-base-3-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60)"><?php echo esc_html( $quickwp_strings['button_text_2'] ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->