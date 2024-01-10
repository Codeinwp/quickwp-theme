<?php
/**
 * Title: Features Row
 * Slug: quickwp/features-row
 * Categories: quickwp/features
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-4"}}}},"backgroundColor":"base-3","textColor":"contrast-4","layout":{"type":"constrained"},"metadata":{}} -->
<div class="wp-block-group alignfull has-contrast-4-color has-base-3-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"4px"}}}} -->
        <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:4px;padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"left","level":3} -->
            <h3 class="wp-block-heading has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"4px"}}}} -->
        <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:4px;padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"left","level":3} -->
            <h3 class="wp-block-heading has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"4px"}}}} -->
        <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-width:4px;padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"left","level":3} -->
            <h3 class="wp-block-heading has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_title'] ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
