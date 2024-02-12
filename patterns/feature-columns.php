<?php
/**
 * Title: Feature Columns
 * Slug: quickwp/feature-columns
 * Categories: quickwp/features
 */
require_once QUICKWP_PATH . 'inc/class-content.php';

$content = new ThemeIsle\QuickWPTheme\Content( 'feature-columns', 'features' );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"},"metadata":{}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"},"metadata":{"name":"section title"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php $content->string( 'title', 'feature_section_title', 'title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color has-large-font-size"><?php $content->string( 'subtitle', 'feature_description', 'subtitle' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":241,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="<?php $content->image( 'item-1/image', 'qwp-img-08.webp' ); ?>" alt="" class="wp-image-241" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php $content->string( 'item-1/title', 'feature_title', 'item-1/title' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php $content->string( 'item-2/description', 'feature_description', 'item-2/description' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php $content->string( 'item-1/button', 'button_text', 'item-1/button' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":241,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="<?php $content->image( 'item-2/image', 'qwp-img-06.webp' ); ?>" alt="" class="wp-image-241" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php $content->string( 'item-2/title', 'feature_title', 'item-2/title' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php $content->string( 'item-2/description', 'feature_description', 'item-2/description' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php $content->string( 'item-2/button', 'button_text', 'item-2/button' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":241,"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="<?php $content->image( 'item-3/image', 'qwp-img-09.webp' ); ?>" alt="" class="wp-image-241" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php $content->string( 'item-3/title', 'feature_title', 'item-3/title' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php $content->string( 'item-3/description', 'feature_description', 'item-3/description' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php $content->string( 'item-3/button', 'button_text', 'item-3/button' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
	<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
