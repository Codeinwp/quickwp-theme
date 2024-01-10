<?php
/**
 * Title: Team Columns
 * Slug: quickwp/team-columns
 * Categories: quickwp/team
 */

$quickwp_strings = apply_filters('quickwp_strings', array());

$images = array(
	QUICKWP_URL . 'assets/img/qwp-img-05.webp',
	QUICKWP_URL . 'assets/img/qwp-img-04.webp',
	QUICKWP_URL . 'assets/img/qwp-img-03.webp',
	QUICKWP_URL . 'assets/img/qwp-img-02.webp',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"},"metadata":{"name":"Team members"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html($quickwp_strings['team_section_title']); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
		<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color">A placeholder description that you can replace with your own content.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-right:0;padding-left:0">
		<!-- First Column -->
		<!-- wp:column {"layout":{"type":"default"}} -->
		<div class="wp-block-column">
			<!-- wp:image {"id":236,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-style-default"><img <?php echo 'src="' . esc_url($images[0]) . '"'; ?> alt="" class="wp-image-236" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
				<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html($quickwp_strings['team_member']); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html($quickwp_strings['member_role']); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Second Column -->
		<!-- wp:column {"layout":{"type":"default"}} -->
		<div class="wp-block-column">
			<!-- wp:image {"id":235,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-style-default"><img <?php echo 'src="' . esc_url($images[1]) . '"'; ?> alt="" class="wp-image-235" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
				<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html($quickwp_strings['team_member']); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html($quickwp_strings['member_role']); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Third Column -->
		<!-- wp:column {"layout":{"type":"default"}} -->
		<div class="wp-block-column">
			<!-- wp:image {"id":234,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-style-default"><img <?php echo 'src="' . esc_url($images[2]) . '"'; ?> alt="" class="wp-image-234" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
				<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html($quickwp_strings['team_member']); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html($quickwp_strings['member_role']); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Fourth Column -->
		<!-- wp:column {"layout":{"type":"default"}} -->
		<div class="wp-block-column">
			<!-- wp:image {"id":233,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-style-default"><img <?php echo 'src="' . esc_url($images[3]) . '"'; ?> alt="" class="wp-image-233" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
				<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html($quickwp_strings['team_member']); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html($quickwp_strings['member_role']); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
