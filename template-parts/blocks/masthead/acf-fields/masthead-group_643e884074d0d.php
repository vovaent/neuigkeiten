<?php
function neuigkeiten_register_masthead_acf_fields() {
	if ( function_exists( 'acf_add_local_field_group' ) ) :

		acf_add_local_field_group(
			array(
				'key'                   => 'group_643e884074d0d',
				'title'                 => 'Masthead',
				'fields'                => array(
					array(
						'key'               => 'field_643e88419cebe',
						'label'             => 'Main slider',
						'name'              => 'main_slider',
						'aria-label'        => '',
						'type'              => 'repeater',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'layout'            => 'block',
						'pagination'        => 0,
						'min'               => 0,
						'max'               => 0,
						'collapsed'         => '',
						'button_label'      => 'Add Row',
						'rows_per_page'     => 20,
						'sub_fields'        => array(
							array(
								'key'               => 'field_643e88ab9cebf',
								'label'             => 'Slider Image',
								'name'              => 'slider_image',
								'aria-label'        => '',
								'type'              => 'image',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'return_format'     => 'id',
								'library'           => 'all',
								'min_width'         => '',
								'min_height'        => '',
								'min_size'          => '',
								'max_width'         => '',
								'max_height'        => '',
								'max_size'          => '',
								'mime_types'        => '',
								'preview_size'      => 'medium',
								'parent_repeater'   => 'field_643e88419cebe',
							),
							array(
								'key'               => 'field_643e890c9cec0',
								'label'             => 'Content Title',
								'name'              => 'content_title',
								'aria-label'        => '',
								'type'              => 'text',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'maxlength'         => '',
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'parent_repeater'   => 'field_643e88419cebe',
							),
							array(
								'key'               => 'field_643e89209cec1',
								'label'             => 'Content Description',
								'name'              => 'content_description',
								'aria-label'        => '',
								'type'              => 'wysiwyg',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'tabs'              => 'all',
								'toolbar'           => 'full',
								'media_upload'      => 1,
								'delay'             => 0,
								'parent_repeater'   => 'field_643e88419cebe',
							),
						),
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/block-masthead',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
			)
		);

	endif;
}

add_action( 'acf/init', 'neuigkeiten_register_masthead_acf_fields' );