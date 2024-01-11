<?php
/**
 * Title: Testimonial on Background
 * Slug: quickwp/testimonial-on-background
 * Categories: quickwp/testimonials
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

$images = array(
	QUICKWP_URL . 'assets/images/qwp-img-02.webp',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-3","textColor":"contrast-4","layout":{"type":"constrained","contentSize":""},"metadata":{"name":"Testimonial"}} -->
<div class="wp-block-group alignfull has-contrast-4-color has-base-3-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","textColor":"base","fontSize":"x-large"} -->
		<p class="has-text-align-center has-base-color has-text-color has-x-large-font-size"><?php echo esc_html( $quickwp_strings['testimonial'] ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
		<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"},"metadata":{"name":"Testimonial source"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"align":"center","width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
			<figure class="wp-block-image aligncenter size-thumbnail is-resized has-custom-border"><img alt="" style="border-radius:100px;aspect-ratio:1;object-fit:cover;width:60px"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"0"}}}} -->
			<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:0"><?php echo esc_html( $quickwp_strings['testimonial_name'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"contrast-3","fontSize":"small"} -->
			<p class="has-text-align-center has-contrast-3-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300"></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
