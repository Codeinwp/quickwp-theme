<?php
/**
 * Title: Content Columns
 * Slug: quickwp/content-columns
 * Categories: quickwp/content
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

$images = array(
	QUICKWP_URL . 'assets/images/qwp-img-03.webp',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
				<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html( $quickwp_strings['content_subtitle'] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:heading -->
				<h2 class="wp-block-heading"><?php echo esc_html( $quickwp_strings['content_title'] ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html( $quickwp_strings['paragraph_text'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html( $quickwp_strings['paragraph_text'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size"><?php echo esc_html( $quickwp_strings['paragraph_text'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:image {"id":234,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-234"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
