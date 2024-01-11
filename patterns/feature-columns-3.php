<?php
/**
 * Title: Feature Columns 3
 * Slug: quickwp/feature-columns-3
 * Categories: quickwp/features
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

$images = array(
	QUICKWP_URL . 'assets/img/qwp-img-08.webp',
);

?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":241,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-241"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"is-style-asterisk"} -->
<h2 class="wp-block-heading is-style-asterisk"><?php echo esc_html( $quickwp_strings['section_title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $quickwp_strings['section_description'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- Repeating columns for features -->
<!-- Start of Feature Column 1 -->
<div class="wp-block-column" style="flex-basis:50%">
	<h3 class="wp-block-heading has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h3>
	<p class="has-text-align-left has-contrast-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
</div>
<!-- End of Feature Column 1 -->

<!-- Start of Feature Column 2 -->
<div class="wp-block-column" style="flex-basis:50%">
	<h3 class="wp-block-heading has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h3>
	<p class="has-text-align-left has-contrast-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
</div>
<!-- End of Feature Column 2 -->
</div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- Start of Feature Column 3 -->
<div class="wp-block-column" style="flex-basis:50%">
	<h3 class="wp-block-heading has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h3>
	<p class="has-text-align-left has-contrast-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
</div>
<!-- End of Feature Column 3 -->

<!-- Start of Feature Column 4 -->
<div class="wp-block-column" style="flex-basis:50%">
	<h3 class="wp-block-heading has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h3>
	<p class="has-text-align-left has-contrast-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
</div>
<!-- End of Feature Column 4 -->
</div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
