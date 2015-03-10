<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_subtitle',
		'title' => 'subtitle',
		'fields' => array (
			array (
				'key' => 'field_54f0e99b27103',
				'label' => 'Subtitle',
				'name' => 'Subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
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
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


