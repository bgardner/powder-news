<?php
/**
 * Title: Footer with site title, text, links.
 * Slug: powder/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"200px","bottom":"100px"},"blockGap":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","className":"is-style-pull-100","layout":{"type":"constrained"},"fontSize":"x-small"} -->
<div class="wp-block-group alignfull is-style-pull-100 has-base-color has-contrast-background-color has-text-color has-background has-link-color has-x-small-font-size" style="padding-top:200px;padding-bottom:100px">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"60px"}}}} -->
<div class="wp-block-group alignwide" style="padding-bottom:60px">
<!-- wp:image {"align":"center","id":7,"width":36,"height":48,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><a href="https://powder.design/"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/site-logo.png'; ?>" alt="Powder News" class="wp-image-7" width="36" height="48"/></a></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Made with Powder', 'powder-news' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"#333333","width":"1px"},"bottom":{"color":"#333333","width":"1px"}},"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"0px"}}}} -->
<div class="wp-block-group alignwide" style="border-top-color:#333333;border-top-width:1px;border-bottom-color:#333333;border-bottom-width:1px;margin-top:0px;padding-top:40px;padding-bottom:40px">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:30px;padding-bottom:30px">
<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noreferrer noopener">View on LinkedIn</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
<!-- wp:group {"style":{"border":{"right":{"color":"#333333"},"left":{"color":"#333333"}}}} -->
<div class="wp-block-group" style="border-right-color:#333333;border-left-color:#333333">
<!-- wp:list {"className":"has-text-align-center is-style-no-disc"} -->
<ul class="has-text-align-center is-style-no-disc">
<!-- wp:list-item -->
<li>“<?php echo esc_html__( 'Just be yourself, there is no one better', 'powder-news' ); ?>.”</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>—Taylor Swift</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noreferrer noopener">Follow on Twitter</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"60px"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:60px">
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>© 2022</p>
<!-- /wp:paragraph -->
<!-- wp:site-title {"isLink":false,"style":{"typography":{"fontWeight":"300"}},"fontSize":"x-small"} /-->
</div>
<!-- /wp:group -->
<!-- wp:paragraph -->
<p> · </p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="https://wordpress.org/themes/powder-news/" data-type="URL" data-id="https://wordpress.org/themes/powder-news/">Theme</a> by <a href="https://briangardner.com/" data-type="URL" data-id="https://briangardner.com/">Brian Gardner</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph -->
<p><a href="#">Twitter</a> · <a href="#">Instagram</a> · <a href="#">LinkedIn</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
