<?php
/**
 * Title: Features grid
 * Slug: quickwp/features-grid
 * Categories: quickwp/features
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","className":"is-style-asterisk"} -->
<h2 class="wp-block-heading has-text-align-center is-style-asterisk"><?php echo esc_html( $quickwp_strings['feature_section_title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color"><?php echo esc_html( $quickwp_strings['section_description'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide">
    <?php for ($i = 0; $i < 3; $i++): ?>
    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
    <div class="wp-block-column has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-asterisk"} -->
    <h3 class="wp-block-heading has-text-align-left is-style-asterisk"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"left"} -->
    <p class="has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    <?php endfor; ?>
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide">
    <?php for ($i = 0; $i < 3; $i++): ?>
    <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
    <div class="wp-block-column has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-asterisk"} -->
    <h3 class="wp-block-heading has-text-align-left is-style-asterisk"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"left"} -->
    <p class="has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    <?php endfor; ?>
</div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->