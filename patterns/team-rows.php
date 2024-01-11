<?php
/**
 * Title: Team rows
 * Slug: quickwp/team-rows
 * Categories: quickwp/team
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

$images = array(
	QUICKWP_URL . 'assets/img/qwp-img-05.webp', // Image 1 path
	QUICKWP_URL . 'assets/img/qwp-img-02.webp', // Image 2 path
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-4"}}}},"backgroundColor":"base-3","textColor":"contrast-4","layout":{"type":"constrained"},"metadata":{}} -->
<div class="wp-block-group alignfull has-contrast-4-color has-base-3-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- Repeating Section Start -->
		<?php for ( $i = 0; $i < 2; $i++ ) : ?>
		<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
			<!-- wp:image {"id":236,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url( $images[ $i ] ); ?>" alt="" class="wp-image-236"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"textAlign":"left"} -->
			<h2 class="wp-block-heading has-text-align-left"><?php echo esc_html( $quickwp_strings['team_member'] ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html( $quickwp_strings['member_role'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html( $quickwp_strings['paragraph_text'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- Social links section remains unchanged -->
		</div>
		<!-- /wp:column -->
		<?php endfor; ?>
		<!-- Repeating Section End -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
