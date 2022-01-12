<?php
/**
 * VW Education Lite: Block Patterns
 *
 * @package VW Education Lite
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-education-lite',
		array( 'label' => __( 'VW Education Lite', 'vw-education-lite' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-education-lite/banner-section',
		array(
			'title'      => __( 'Banner Section', 'vw-education-lite' ),
			'categories' => array( 'vw-education-lite' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png\",\"id\":3668,\"dimRatio\":60,\"overlayColor\":\"black\",\"align\":\"full\",\"className\":\"sliderbox\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim-60 has-black-background-color has-background-dim sliderbox\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png)\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"full\",\"className\":\"mx-md-0 mx-1\"} -->\n<div class=\"wp-block-columns alignfull mx-md-0 mx-1\"><!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"90%\",\"className\":\"slider-content\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center slider-content\" style=\"flex-basis:90%\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":35}}} -->\n<h1 class=\"has-text-align-center has-white-color has-text-color\" style=\"font-size:35px\"><strong>LOREM IPSUM IS SIMPLY DUMMY TEXT OF PRINTING</strong></h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center\",\"style\":{\"typography\":{\"fontSize\":14}}} -->\n<p class=\"has-text-align-center text-center\" style=\"font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#99ce34\",\"text\":\"#222222\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-text-color has-background no-border-radius\" style=\"background-color:#99ce34;color:#222222\">Know More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-education-lite/feature-section',
		array(
			'title'      => __( 'Featured Section', 'vw-education-lite' ),
			'categories' => array( 'vw-education-lite' ),
			'content'    => "<!-- wp:group {\"align\":\"full\",\"className\":\"featured-box mx-md-5 mx-2 my-5\"} -->\n<div class=\"wp-block-group alignfull featured-box mx-md-5 mx-2 my-5\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"className\":\"mb-4\",\"style\":{\"typography\":{\"fontSize\":30}}} -->\n<h2 class=\"has-text-align-center mb-4\" style=\"font-size:30px\">OUR FEATURED COURSES</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"align\":\"wide\",\"className\":\"courses-col mx-2\"} -->\n<div class=\"wp-block-columns alignwide courses-col mx-2\"><!-- wp:column {\"className\":\"courses-box mb-4\"} -->\n<div class=\"wp-block-column courses-box mb-4\"><!-- wp:image {\"id\":3641,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/feature1.png\" alt=\"\" class=\"wp-image-3641\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"level\":3,\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":18}}} -->\n<h3 class=\"has-white-color has-text-color\" style=\"font-size:18px\">MASTER IN DIGITAL MARKETING</h3>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"courses-box mb-4\"} -->\n<div class=\"wp-block-column courses-box mb-4\"><!-- wp:image {\"id\":3645,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/feature2.png\" alt=\"\" class=\"wp-image-3645\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"level\":3,\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":18}}} -->\n<h3 class=\"has-white-color has-text-color\" style=\"font-size:18px\">FINANCIAL ANAYLYST</h3>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"courses-box mb-4\"} -->\n<div class=\"wp-block-column courses-box mb-4\"><!-- wp:image {\"id\":3646,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/feature3.png\" alt=\"\" class=\"wp-image-3646\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"level\":3,\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":18}}} -->\n<h3 class=\"has-white-color has-text-color\" style=\"font-size:18px\">SPORT EXERCISE SCIENCE</h3>\n<!-- /wp:heading --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->",
		)
	);
}