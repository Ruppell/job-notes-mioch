<?php
/**
 * @see https://www.advancedcustomfields.com/resources/acf_register_block_type/
 * @see https://developer.wordpress.org/resource/dashicons/
 * @see https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Medic In One Colon Health
 */

/**
 * Register block categories.
 *
 * @param $categories
 * @param $post
 *
 * @return array
 */
function mioch_acf_block_categories( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'mio',
				'title' => __( 'Medic In One', 'mioch_flex' ),
			),
		)
	);
}

add_filter( 'block_categories', 'mioch_acf_block_categories', 10, 2 );

/*
 * ====================================================================
 * Posts Carousel
 * ====================================================================
 */

add_action( 'acf/init', 'mioch_acf_init_posts_carousel_types' );

function mioch_acf_init_posts_carousel_types() {

	if ( function_exists( 'acf_register_block_type' ) ) {

		// register posts carousel.
		acf_register_block_type(
			array(
				'name'            => 'mio-posts-carousel',
				'title'           => __( 'Posts Carousel' ),
				'description'     => __( 'A carousel with the latest posts.' ),
				'render_template' => 'partials/blocks/home/posts-carousel.php',
				'enqueue_style'   => get_stylesheet_directory_uri() . '/partials/blocks/home/posts-carousel.css',
        'enqueue_script'  => get_stylesheet_directory_uri() . '/partials/blocks/home/posts-carousel.js',
				'category'        => 'mio',
				'icon'            => array(
					'background' => '#ff8822',
					'foreground' => '#fff',
					'src'        => 'text',
				),
				'keywords'        => array( 'posts', 'carousel' ),
				'supports'        => array(
					'align'      => false,
					'align_text' => false,
				),
			)


		);

	}
}

 add_action( 'acf/init', 'mioch_acf_init_posts_carousel_fields' );

function mioch_acf_init_posts_carousel_fields() {
	if ( function_exists( 'acf_add_local_field_group' ) ) {

		acf_add_local_field_group(
			array(
				'key'      => 'block-posts-carousel',
				'title'    => 'Block Posts Carousel',
				'fields'   => array(
					array(
						'key'           => 'posts-cat',
						'name'          => 'taxonomy_terms',
						'label'         => __( 'Category', 'mioch_flex' ),
						'type'          => 'taxonomy',
						'field_type'		=> 'multi_select',
					),
					array(
						'key'           => 'posts-count',
						'name'          => 'posts-count',
						'label'         => __( 'Post per page', 'mioch_flex' ),
						'type'          => 'range',
						'min' 					=> '4',
						'max' 					=> '24',
					),
					array(
						'key'           => 'section-heading',
						'name'          => 'section-heading',
						'label'         => __( 'Section heading', 'mioch_flex' ),
						'type'          => 'text',
					),
					array(
						'key'           => 'archive-url',
						'name'          => 'archive-url',
						'label'         => __( 'Archive page url', 'mioch_flex' ),
						'type'          => 'url',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/mio-posts-carousel',
						),
					),
				),
			)
		);

	}
}


/*
 * ====================================================================
 * Features Carousel
 * ====================================================================
 */

 add_action( 'acf/init', 'mioch_acf_init_features_carousel_types' );

 function mioch_acf_init_features_carousel_types() {

 	if ( function_exists( 'acf_register_block_type' ) ) {

 		// register features carousel.
 		acf_register_block_type(
      array(
 				'name'            => 'mio-features-carousel',
 				'title'           => __( 'Features Carousel' ),
 				'description'     => __( 'A block showing a slider with titles.' ),
 				'render_template' => 'partials/blocks/home/features-carousel.php',
 				'enqueue_style'   => get_stylesheet_directory_uri() . '/partials/blocks/home/features-carousel.css',
        'enqueue_script'  => get_stylesheet_directory_uri() . '/partials/blocks/home/features-carousel.js',
 				'category'        => 'mio',
 				'icon'            => array(
 					'background' => '#ff8822',
 					'foreground' => '#fff',
 					'src'        => 'text',
 				),
 				'keywords'        => array( 'features', 'carousel' ),
 				'supports'        => array(
 					'align'      => false,
 					'align_text' => false,
 				),
 			)
 		);

 	}
 }




add_action( 'after_setup_theme', 'mioch_acf_init_features_carousel_fields', 10 );

function mioch_acf_init_features_carousel_fields() {
	if ( function_exists( 'acf_add_local_field_group' ) ) {

		// add fields for introduction slider.
		acf_add_local_field_group(
			array(
				'key'      => 'block-features-carousel',
				'title'    => 'Block Features Carousel',
				'fields'   => array(
					array(
						'key'        => 'block-features-carousel-items',
						'name'       => 'features-carousel-list-items',
						'label'      => __( 'Slider Items', 'mioch_flex' ),
						'type'       => 'repeater',
						'layout'     => 'block',
						'sub_fields' => array(
							array(
								'key'           => 'slide-title',
								'name'          => 'title',
								'label'         => __( 'Title', 'mioch_flex' ),
								'type'          => 'text',
							),
              array(
								'key'           => 'slide-icon',
								'name'          => 'icon',
								'label'         => __( 'Icon', 'mioch_flex' ),
								'type'          => 'select',
                'choices'       => FONT_AWESOME_ICONS,
							),
							array(
								'key'           => 'slide-details',
								'name'          => 'details',
								'label'         => __( 'Details', 'mioch_flex' ),
								'type'          => 'repeater',
                'layout'     => 'block',
                'sub_fields' => array(
    							array(
    								'key'           => 'details-heading',
    								'name'          => 'heading',
    								'label'         => __( 'Heading', 'mioch_flex' ),
    								'type'          => 'text',
    							),
                  array(
    								'key'           => 'details-text',
    								'name'          => 'text',
    								'label'         => __( 'Text', 'mioch_flex' ),
    								'type'          => 'textarea',
    							),
                  array(
    								'key'           => 'details-icon',
    								'name'          => 'details-icon',
    								'label'         => __( 'Icon', 'mioch_flex' ),
    								'type'          => 'select',
                    'choices'       => FONT_AWESOME_ICONS,
    							),
                  array(
    								'key'           => 'details-url',
    								'name'          => 'url',
    								'label'         => __( 'Url', 'mioch_flex' ),
    								'type'          => 'url',
    							),
                  array(
    								'key'           => 'details-image',
    								'name'          => 'image',
    								'label'         => __( 'Image', 'mioch_flex' ),
    								'type'          => 'image',
    								'return_format' => 'id',
    								'preview_size'  => 'medium',
    							),
                )
							),

						),
					),

				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/mio-features-carousel',
						),
					),
				),
			)
		);

	}
}
