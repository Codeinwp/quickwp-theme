<?php
/**
 * Title: Hero 3
 * Slug: quickwp/hero-3
 * Categories: quickwp/heroes_page_titles
 */

$quickwp_strings = apply_filters( 'quickwp_strings', array() );

$images = array(
	QUICKWP_URL . 'assets/img/qwp-img-09.webp',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">
			<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
				<h1 class="wp-block-heading alignwide has-text-align-left"><?php echo esc_html( $quickwp_strings['hero_title'] ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:list {"className":"is-style-checkmark-list"} -->
					<ul class="is-style-checkmark-list">
						<!-- wp:list-item -->
						<li><?php echo esc_html( $quickwp_strings['quickwp_feature_1'] ); ?></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->

					<!-- wp:list {"className":"is-style-checkmark-list"} -->
					<ul class="is-style-checkmark-list">
						<!-- wp:list-item -->
						<li><?php echo esc_html( $quickwp_strings['quickwp_feature_2'] ); ?></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->

					<!-- wp:list {"className":"is-style-checkmark-list"} -->
					<ul class="is-style-checkmark-list">
						<!-- wp:list-item -->
						<li><?php echo esc_html( $quickwp_strings['quickwp_feature_3'] ); ?></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"large"} -->
			<p class="has-text-align-left has-contrast-2-color has-text-color has-link-color has-large-font-size"><?php echo esc_html( $quickwp_strings['feature_description'] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:image {"align":"wide","id":240,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image alignwide size-full is-style-default"><img <?php echo 'src="' . esc_url( $images[0] ) . '"'; ?> alt="" class="wp-image-240" /></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
