<?php
/**
 * Title: Content Plain
 * Slug: quickwp/content-plain
 * Categories: quickwp/content
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:paragraph -->
	<p><?php echo esc_html( $quickwp_strings['paragraph_text'] ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
