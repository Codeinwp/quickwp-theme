<?php
/**
 * Title: Testimonial Columns
 * Slug: quickwp/testimonial-columns
 * Categories: quickwp/testimonials
 */

$quickwp_strings = apply_filters('quickwp_strings', array());

$images = array(
    QUICKWP_URL . 'assets/img/qwp-img-05.webp', // Image 1 path
    QUICKWP_URL . 'assets/img/qwp-img-02.webp', // Image 2 path
    QUICKWP_URL . 'assets/img/qwp-img-04.webp', // Image 3 path
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"metadata":{}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <?php for ($i = 0; $i < 3; $i++): ?>
            <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base-2","textColor":"contrast"} -->
            <div class="wp-block-column has-contrast-color has-base-2-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:image {"id":236,"width":"88px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-rounded"} -->
                <figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url($images[$i]); ?>" alt="" class="wp-image-236" style="aspect-ratio:1;object-fit:cover;width:88px"/></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"left","fontSize":"normal"} -->
                <p class="has-text-align-left has-normal-font-size"><?php echo esc_html($quickwp_strings['testimonial']); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|raft-accent"}}}},"textColor":"raft-accent","fontSize":"normal"} -->
                <p class="has-text-align-left has-raft-accent-color has-text-color has-link-color has-normal-font-size">★ ★ ★ ★ ★</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
                <p class="has-text-align-left has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php echo esc_html($quickwp_strings['testimonial_name']); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        <?php endfor; ?>
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
