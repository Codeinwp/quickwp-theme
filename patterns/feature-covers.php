<?php
/**
 * Title: Feature covers
 * Slug: quickwp/feature-covers
 * Categories: quickwp/features
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

$images = array(
	esc_url( QUICKWP_URL . 'assets/img/qwp-img-02.webp' ),
	esc_url( QUICKWP_URL . 'assets/img/qwp-img-03.webp' ),
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns alignfull" style="margin-top:0;margin-bottom:0">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":<?php echo $images[0]; ?>,"id":233,"dimRatio":50,"minHeight":50,"minHeightUnit":"vh","contentPosition":"bottom left","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40);min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-233" alt="" src=<?php echo $images[0]; ?> data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:heading {"textAlign":"left"} -->
				<h2 class="wp-block-heading has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html( $quickwp_strings['button_text_2'] ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":<?php echo $images[1]; ?>,"id":234,"dimRatio":50,"minHeight":100,"minHeightUnit":"%","contentPosition":"bottom left","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40);min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-234" alt="" src=<?php echo $images[1]; ?> data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:heading {"textAlign":"left"} -->
				<h2 class="wp-block-heading has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html( $quickwp_strings['button_text_2'] ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
