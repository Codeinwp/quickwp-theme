<?php
/**
 * Title: Features grid
 * Slug: quickwp/features-grid
 * Categories: quickwp/features
 */
require_once QUICKWP_PATH . 'inc/class-content.php';

$content = new ThemeIsle\QuickWPTheme\Content( 'features-grid', 'features' );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","className":"is-style-asterisk"} -->
		<h2 class="wp-block-heading has-text-align-center is-style-asterisk"><?php $content->string( 'title', 'feature_section_title', 'title' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
		<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color"><?php $content->string( 'description', 'section_description', 'description' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
			<div class="wp-block-column has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk"><?php $content->string( 'item-1/title', 'feature_title', 'item-1/title' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php $content->string( 'item-1/description', 'feature_description', 'item-1/description' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
			<div class="wp-block-column has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk"><?php $content->string( 'item-2/title', 'feature_title', 'item-2/title' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php $content->string( 'item-2/description', 'feature_description', 'item-2/description' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->


			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
			<div class="wp-block-column has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk"><?php $content->string( 'item-3/title', 'feature_title', 'item-3/title' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php $content->string( 'item-3/description', 'feature_description', 'item-3/description' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
			<div class="wp-block-column has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk"><?php $content->string( 'item-4/title', 'feature_title', 'item-4/title' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php $content->string( 'item-4/description', 'feature_description', 'item-4/description' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
			<div class="wp-block-column has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk"><?php $content->string( 'item-5/title', 'feature_title', 'item-5/title' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php $content->string( 'item-5/description', 'feature_description', 'item-5/description' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
			<div class="wp-block-column has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-asterisk"} -->
				<h3 class="wp-block-heading has-text-align-left is-style-asterisk"><?php $content->string( 'item-6/title', 'feature_title', 'item-6/title' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php $content->string( 'item-6/description', 'feature_description', 'item-6/description' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
