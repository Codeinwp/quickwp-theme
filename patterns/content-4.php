<?php
/**
 * Title: Content 4
 * Slug: quickwp/content-4
 * Categories: quickwp/content
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size"><?php echo esc_html( apply_filters( 'quickwp/content-4/paragraph-1', $quickwp_strings['paragraph_text'] ) ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html( apply_filters( 'quickwp/content-4/paragraph-2', $quickwp_strings['paragraph_text'] ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html( apply_filters( 'quickwp/content-4/paragraph-3', $quickwp_strings['paragraph_text'] ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
