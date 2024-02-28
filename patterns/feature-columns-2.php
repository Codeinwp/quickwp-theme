<?php
/**
 * Title: Feature Columns 2
 * Slug: quickwp/feature-columns-2
 * Categories: quickwp/features
 */
require_once QUICKWP_PATH . 'inc/class-content.php';

$content = new ThemeIsle\QuickWPTheme\Content( 'feature-columns-2', 'features' );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:image {"id":241,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"is-style-default"} -->
	<figure class="wp-block-image size-full is-style-default"><img src="<?php $content->image( 'item-1/image', 'qwp-img-08.webp' ); ?>" alt="" class="wp-image-241" style="aspect-ratio:4/3;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php $content->string( 'item-1/title', 'content_title', 'item-1/title' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php $content->string( 'item-1/description', 'description', 'item-1/description' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php $content->string( 'item-1/button', 'button_text_2', 'item-1/button' ); ?></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:image {"id":242,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"is-style-default"} -->
	<figure class="wp-block-image size-full is-style-default"><img src="<?php $content->image( 'item-2/image', 'qwp-img-06.webp' ); ?>" alt="" class="wp-image-242" style="aspect-ratio:4/3;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php $content->string( 'item-2/title', 'content_title', 'item-2/title' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php $content->string( 'item-2/description', 'description', 'item-2/description' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php $content->string( 'item-2/button', 'button_text_2', 'item-2/button' ); ?></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
