<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_category-photo-credit',
		'title' => 'Category - Photo Credit',
		'fields' => array (
			array (
				'key' => 'field_54ff1e1409828',
				'label' => 'Category - Photo Credit',
				'name' => 'category_-_photo_credit',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Photo by + username',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_category-color',
		'title' => 'Category - Color',
		'fields' => array (
			array (
				'key' => 'field_54ff1dddd200d',
				'label' => 'Category - Color',
				'name' => 'category_-_color',
				'type' => 'color_picker',
				'default_value' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
