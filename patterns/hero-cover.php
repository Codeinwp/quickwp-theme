<?php
/**
 * Title: Hero Cover
 * Slug: quickwp/hero-cover
 * Categories: quickwp/heroes_page_titles
 */
require_once QUICKWP_PATH . 'inc/class-content.php';

$content = new ThemeIsle\QuickWPTheme\Content( 'hero-cover', 'hero' );

$cover = $content->get_image( 'image', 'qwp-img-09.webp' );
?>

<!-- wp:cover {"url":"<?php echo $cover; ?>","id":240,"dimRatio":50,"minHeight":70,"minHeightUnit":"vh","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40);min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-240" alt="" src="<?php echo $cover; ?>" data-object-fit="cover" /><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php $content->string( 'subtitle', 'subtitle', 'subtitle' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":1} -->
<h1 class="wp-block-heading has-text-align-left"><?php $content->string( 'title', 'hero_title', 'title' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php $content->string( 'button-primary', 'button_text_2', 'button-primary' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php $content->string( 'button-secondary', 'button_text_2', 'button-secondary' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
