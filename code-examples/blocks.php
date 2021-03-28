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
 * Home Block
 * ====================================================================
 */

add_action( 'acf/init', 'mioch_acf_init_home_bock_types' );

function mioch_acf_init_home_bock_types() {

	if ( function_exists( 'acf_register_block_type' ) ) {

		// register introduction slider.
		acf_register_block_type(
			array(
				'name'            => 'mio-home-slider-introduction',
				'title'           => __( 'Slider Introduction' ),
				'description'     => __( 'A block showing a slider with titles.' ),
				'render_template' => 'partials/blocks/home/slider-introduction.php',
				'enqueue_style'   => get_stylesheet_directory_uri() . '/partials/blocks/home/slider-introduction.css',
				'category'        => 'mio',
				'icon'            => array(
					'background' => '#ff8822',
					'foreground' => '#fff',
					'src'        => 'text',
				),
				'keywords'        => array( 'slider', 'home' ),
				'supports'        => array(
					'align'      => false,
					'align_text' => false,
				),
				// TODO: implement example.
			)
		);

	}
}

function mioch_acf_init_home_block_fields() {
	if ( function_exists( 'acf_add_local_field_group' ) ) {

		// add fields for introduction slider.
		acf_add_local_field_group(
			array(
				'key'      => 'block-introduction-slider',
				'title'    => 'Block Introduction Slider',
				'fields'   => array(
					array(
						'key'        => 'block-introduction-slider-items',
						'name'       => 'introduction-slider-list-items',
						'label'      => __( 'Slider Items', 'mioch_flex' ),
						'type'       => 'repeater',
						'layout'     => 'block',
						'sub_fields' => array(
							array(
								'key'           => 'slide-title',
								'name'          => 'title',
								'label'         => __( 'Title', 'mioch_flex' ),
								'type'          => 'text',
								'default_value' => 'Lorem ipsum dolor sit amet',
							),
							array(
								'key'           => 'slide-url',
								'name'          => 'url',
								'label'         => __( 'Url', 'mioch_flex' ),
								'type'          => 'url',
								'default_value' => 'https://example.com',
							),
							array(
								'key'           => 'slide-image',
								'name'          => 'image',
								'label'         => __( 'Image', 'mioch_flex' ),
								'type'          => 'image',
								'return_format' => 'id',
								'preview_size'  => 'medium',
							),
						),
					),

				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/mio-home-slider-introduction',
						),
					),
				),
			)
		);

	}
}

add_action( 'after_setup_theme', 'mioch_acf_init_home_block_fields', 10 );
