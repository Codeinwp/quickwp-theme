<?php
/**
 * Title: Content Columns
 * Slug: quickwp/content-columns
 * Categories: quickwp/content
 */
require_once QUICKWP_PATH . 'inc/class-content.php';

$content = new ThemeIsle\QuickWPTheme\Content( 'content-columns', 'content' );
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
				<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php $content->string( 'subtitle', 'content_subtitle', 'subtitle' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:heading -->
				<h2 class="wp-block-heading"><?php $content->string( 'title', 'content_title', 'title' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php $content->string( 'paragraph-1', 'paragraph_text', 'paragraph-1' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size"><?php $content->string( 'paragraph-2', 'feature_description', 'paragraph-2' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php $content->string( 'paragraph-3', 'paragraph_text', 'paragraph-3' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size"><?php $content->string( 'paragraph-4', 'paragraph_text', 'paragraph-4' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:image {"id":234,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php $content->image( 'image', 'qwp-img-03.webp' ); ?>" alt="" class="wp-image-234"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
