<?php
/**
 * Contact Page Template Custom Fields
 *
 * @package Best_Minimal_Restaurant
 * @author  PriceListo
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
		array(
			'key'                   => 'group_5f18cf277cd34',
			'title'                 => esc_html__( 'Home', 'best-minimal-restaurant' ),
			'fields'                => array(
				array(
					'key'               => 'field_home5f1bbca489ad6',
					'label'             => esc_html__( 'Show/Hide Sections', 'best-minimal-restaurant' ),
					'name'              => 'home-visible-sections',
					'type'              => 'checkbox',
					'instructions'      => esc_html__( 'Uncheck section(s) to be hided from the page!', 'best-minimal-restaurant' ),
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'choices'           => array(
						'hero'    => esc_html__( 'Show Hero Section', 'best-minimal-restaurant' ),
						'about'   => esc_html__( 'Show About Section', 'best-minimal-restaurant' ),
						'feature' => esc_html__( 'Show Feature Section', 'best-minimal-restaurant' ),
						'offer'   => esc_html__( 'Show Offer Section', 'best-minimal-restaurant' ),
					),
					'allow_custom'      => 0,
					'default_value'     => array(
						0 => 'hero',
						1 => 'about',
						2 => 'feature',
						3 => 'offer',
					),
					'layout'            => 'horizontal',
					'toggle'            => 0,
					'return_format'     => 'value',
					'save_custom'       => 0,
				),
				array(
					'key'               => 'field_home5f18d48e35aec',
					'label'             => esc_html__( 'Hero Section', 'best-minimal-restaurant' ),
					'name'              => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => array(
						array(
							array(
								'field'    => 'field_home5f1bbca489ad6',
								'operator' => '==',
								'value'    => 'hero',
							),
						),
					),
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'placement'         => 'top',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_home5f18cf8d87b95',
					'label'             => esc_html__( 'Background', 'best-minimal-restaurant' ),
					'name'              => 'background-hero',
					'type'              => 'image',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'url',
					'preview_size'      => 'large',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
					'default_value'     => urestaurany_get_attachment_id_by_name( 'urest-minimal-homepage-banner' ),
				),
				array(
					'key'               => 'field_home5f18cfeb87b96',
					'label'             => esc_html__( 'Heading', 'best-minimal-restaurant' ),
					'name'              => 'heading-hero',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__( 'We serve quality food', 'best-minimal-restaurant' ),
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
				array(
					'key'               => 'field_home5f18d00b87b97',
					'label'             => esc_html__( 'Subheading', 'best-minimal-restaurant' ),
					'name'              => 'subheading-hero',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s stan', 'best-minimal-restaurant' ),
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
				array(
					'key'               => 'field_home5f18d92035aed',
					'label'             => esc_html__( 'About Section', 'best-minimal-restaurant' ),
					'name'              => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => array(
						array(
							array(
								'field'    => 'field_home5f1bbca489ad6',
								'operator' => '==',
								'value'    => 'about',
							),
						),
					),
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'placement'         => 'top',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_home5f18d94435aee',
					'label'             => esc_html__( 'Image', 'best-minimal-restaurant' ),
					'name'              => 'about_image',
					'type'              => 'image',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'url',
					'preview_size'      => 'medium',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
					'default_value'     => urestaurany_get_attachment_id_by_name( 'urest-minimal-homepage-about-background' ),
				),
				array(
					'key'               => 'field_home5f18d9be35aef',
					'label'             => esc_html__( 'Title', 'best-minimal-restaurant' ),
					'name'              => 'title-about',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__( 'Who we are', 'best-minimal-restaurant' ),
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
				array(
					'key'               => 'field_home5f18d9de35af0',
					'label'             => esc_html__( 'Content', 'best-minimal-restaurant' ),
					'name'              => 'content-about',
					'type'              => 'wysiwyg',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__(
						'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s stan
    
    dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.dard dummy text ever since the 1500s,ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.',
						'best-minimal-restaurant'
					),
					'tabs'              => 'all',
					'toolbar'           => 'full',
					'media_upload'      => 0,
					'delay'             => 0,
				),
				array(
					'key'               => 'field_home5f18da4735af1',
					'label'             => esc_html__( 'Button Text', 'best-minimal-restaurant' ),
					'name'              => 'button-text-about',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__( 'Read More', 'best-minimal-restaurant' ),
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
				array(
					'key'               => 'field_home5f18daa335af2',
					'label'             => esc_html__( 'Button Link', 'best-minimal-restaurant' ),
					'name'              => 'button-link-about',
					'type'              => 'url',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_home5f18def52b5ad',
					'label'             => esc_html__( 'Feature Section', 'best-minimal-restaurant' ),
					'name'              => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => array(
						array(
							array(
								'field'    => 'field_home5f1bbca489ad6',
								'operator' => '==',
								'value'    => 'feature',
							),
						),
					),
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'placement'         => 'top',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_home5f18df062b5ae',
					'label'             => esc_html__( 'Background', 'best-minimal-restaurant' ),
					'name'              => 'background-feature',
					'type'              => 'image',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'return_format'     => 'url',
					'preview_size'      => 'medium',
					'library'           => 'all',
					'min_width'         => '',
					'min_height'        => '',
					'min_size'          => '',
					'max_width'         => '',
					'max_height'        => '',
					'max_size'          => '',
					'mime_types'        => '',
					'default_value'     => urestaurany_get_attachment_id_by_name( 'urest-minimal-homepage-feature-background' ),
				),
				array(
					'key'               => 'field_home5f18df472b5af',
					'label'             => esc_html__( 'Title', 'best-minimal-restaurant' ),
					'name'              => 'title-feature',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__( 'Our Food', 'best-minimal-restaurant' ),
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
				array(
					'key'               => 'field_home5f18df622b5b0',
					'label'             => esc_html__( 'Content', 'best-minimal-restaurant' ),
					'name'              => 'content-feature',
					'type'              => 'wysiwyg',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__( 'dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, e the 1500s,', 'best-minimal-restaurant' ),
					'tabs'              => 'all',
					'toolbar'           => 'full',
					'media_upload'      => 0,
					'delay'             => 0,
				),
				array(
					'key'               => 'field_home5f18dfc42b5b1',
					'label'             => esc_html__( 'Button Text', 'best-minimal-restaurant' ),
					'name'              => 'button-text-feature',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__( 'See Menu', 'best-minimal-restaurant' ),
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
				array(
					'key'               => 'field_home5f18dfee2b5b2',
					'label'             => esc_html__( 'Button Link', 'best-minimal-restaurant' ),
					'name'              => 'button-link-feature',
					'type'              => 'url',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => '',
					'placeholder'       => '',
				),
				array(
					'key'               => 'field_home5f18ea9751fcd',
					'label'             => esc_html__( 'Offer Section', 'best-minimal-restaurant' ),
					'name'              => '',
					'type'              => 'tab',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => array(
						array(
							array(
								'field'    => 'field_home5f1bbca489ad6',
								'operator' => '==',
								'value'    => 'offer',
							),
						),
					),
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'placement'         => 'top',
					'endpoint'          => 0,
				),
				array(
					'key'               => 'field_home5f18eaa451fce',
					'label'             => esc_html__( 'Title', 'best-minimal-restaurant' ),
					'name'              => 'title-offer',
					'type'              => 'text',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__( 'What We Offer', 'best-minimal-restaurant' ),
					'placeholder'       => '',
					'prepend'           => '',
					'append'            => '',
					'maxlength'         => '',
				),
				array(
					'key'               => 'field_home5f18eac451fcf',
					'label'             => esc_html__( 'Content', 'best-minimal-restaurant' ),
					'name'              => 'content-offer',
					'type'              => 'wysiwyg',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'default_value'     => esc_html__( 'dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, e the 1500s,', 'best-minimal-restaurant' ),
					'tabs'              => 'all',
					'toolbar'           => 'full',
					'media_upload'      => 0,
					'delay'             => 0,
				),
				array(
					'key'               => 'field_home5f18eaf051fd0',
					'label'             => esc_html__( 'Food Category', 'best-minimal-restaurant' ),
					'name'              => 'food-categories',
					'type'              => 'group',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'layout'            => 'block',
					'sub_fields'        => array(
						array(
							'key'               => 'field_home5f18eb2351fd1',
							'label'             => esc_html__( 'Category 1', 'best-minimal-restaurant' ),
							'name'              => '',
							'type'              => 'tab',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'placement'         => 'top',
							'endpoint'          => 0,
						),
						array(
							'key'               => 'field_home5f18eb8951fd2',
							'label'             => esc_html__( 'Food Category title', 'best-minimal-restaurant' ),
							'name'              => 'food-category-title-1',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => esc_html__( 'Italian Cousine', 'best-minimal-restaurant' ),
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
						array(
							'key'               => 'field_home5f18ebbc51fd3',
							'label'             => esc_html__( 'Food Category Icon', 'best-minimal-restaurant' ),
							'name'              => 'food-category-icon-1',
							'type'              => 'image',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'array',
							'preview_size'      => 'thumbnail',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => '',
							'default_value'     => urestaurany_get_attachment_id_by_name( 'urest-minimal-homepage-food-cat-1' ),
						),
						array(
							'key'               => 'field_home5f190068af32f',
							'label'             => esc_html__( 'Food Category Target URL', 'best-minimal-restaurant' ),
							'name'              => 'food-category-target-url-1',
							'type'              => 'url',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
						array(
							'key'               => 'field_home5f18ebee51fd4',
							'label'             => esc_html__( 'Category 2', 'best-minimal-restaurant' ),
							'name'              => '',
							'type'              => 'tab',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'placement'         => 'top',
							'endpoint'          => 0,
						),
						array(
							'key'               => 'field_home5f18ebfc51fd5',
							'label'             => esc_html__( 'Food Category Title', 'best-minimal-restaurant' ),
							'name'              => 'food-category-title-2',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => esc_html__( 'Sea Food', 'best-minimal-restaurant' ),
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
						array(
							'key'               => 'field_home5f18ec2b51fd6',
							'label'             => esc_html__( 'Food Category Icon', 'best-minimal-restaurant' ),
							'name'              => 'food-category-icon-2',
							'type'              => 'image',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'array',
							'preview_size'      => 'thumbnail',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => '',
							'default_value'     => urestaurany_get_attachment_id_by_name( 'urest-minimal-homepage-food-cat-2' ),
						),
						array(
							'key'               => 'field_home5f1900b3af330',
							'label'             => esc_html__( 'Food Category Target URL', 'best-minimal-restaurant' ),
							'name'              => 'food-category-target-url-2',
							'type'              => 'url',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
						array(
							'key'               => 'field_home5f18ec980c2d6',
							'label'             => esc_html__( 'Category 3', 'best-minimal-restaurant' ),
							'name'              => '',
							'type'              => 'tab',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'placement'         => 'top',
							'endpoint'          => 0,
						),
						array(
							'key'               => 'field_home5f18ecaa0c2d7',
							'label'             => esc_html__( 'Food Category Title', 'best-minimal-restaurant' ),
							'name'              => 'food-category-title-3',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => esc_html__( 'Snacks', 'best-minimal-restaurant' ),
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
						array(
							'key'               => 'field_home5f18ecca0c2d8',
							'label'             => esc_html__( 'Food Category Icon', 'best-minimal-restaurant' ),
							'name'              => 'food-category-icon-3',
							'type'              => 'image',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'array',
							'preview_size'      => 'thumbnail',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => '',
							'default_value'     => urestaurany_get_attachment_id_by_name( 'urest-minimal-homepage-food-cat-3' ),
						),
						array(
							'key'               => 'field_home5f1900c8af331',
							'label'             => esc_html__( 'Food Category Target URL', 'best-minimal-restaurant' ),
							'name'              => 'food-category-target-url-3',
							'type'              => 'url',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
						array(
							'key'               => 'field_home5f18ed070c2d9',
							'label'             => esc_html__( 'Food Category 4', 'best-minimal-restaurant' ),
							'name'              => '',
							'type'              => 'tab',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'placement'         => 'top',
							'endpoint'          => 0,
						),
						array(
							'key'               => 'field_home5f18ed180c2da',
							'label'             => esc_html__( 'Food Category Title', 'best-minimal-restaurant' ),
							'name'              => 'food-category-title-4',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => esc_html__( 'Continental Dish', 'best-minimal-restaurant' ),
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
						array(
							'key'               => 'field_home5f18ed390c2db',
							'label'             => esc_html__( 'Food Category Icon', 'best-minimal-restaurant' ),
							'name'              => 'food-category-icon-4',
							'type'              => 'image',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'array',
							'preview_size'      => 'thumbnail',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => '',
							'default_value'     => urestaurany_get_attachment_id_by_name( 'urest-minimal-homepage-food-cat-4' ),
						),
						array(
							'key'               => 'field_home5f1900e6af333',
							'label'             => esc_html__( 'Food Category Target URL', 'best-minimal-restaurant' ),
							'name'              => 'food-category-target-url-4',
							'type'              => 'url',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
					),
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'template-home.php',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => array(
				0  => 'the_content',
				1  => 'excerpt',
				2  => 'discussion',
				3  => 'comments',
				4  => 'revisions',
				6  => 'author',
				7  => 'format',
				8  => 'page_attributes',
				9  => 'featured_image',
				10 => 'categories',
				11 => 'tags',
				12 => 'send-trackbacks',
			),
			'active'                => true,
			'description'           => '',
		)
	);

endif;