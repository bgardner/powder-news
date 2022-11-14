<?php
/**
 * Title: 404 error content.
 * Slug: powder/404
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"30px","bottom":"var:preset|spacing|small","left":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"backgroundColor":"contrast","textColor":"base","fontSize":"max-36"} -->
<h1 class="has-text-align-center has-base-color has-contrast-background-color has-text-color has-background has-max-36-font-size" style="padding-top:var(--wp--preset--spacing--small);padding-right:30px;padding-bottom:var(--wp--preset--spacing--small);padding-left:30px;font-style:normal;font-weight:300"><?php echo esc_html__( 'Not found, error 404', 'powder' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"30px","bottom":"var:preset|spacing|medium","left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:30px;padding-bottom:var(--wp--preset--spacing--medium);padding-left:30px">
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Oops, the page you are looking for does not exist or is no longer available. Please use the search form below to find your way.', 'powder-news' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"showLabel":false,"width":80,"widthUnit":"%","buttonText":"Search","align":"center"} /-->
</div>
<!-- /wp:group -->