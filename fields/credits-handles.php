<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_photo-credit',
		'title' => 'Photo Credit',
		'fields' => array (
			array (
				'key' => 'field_54ff1762dd9c4',
				'label' => 'Photo Credit',
				'name' => 'Photo Credit',
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
			'position' => 'normal',
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
		'id' => 'acf_twitter-handle',
		'title' => 'Twitter Handle',
		'fields' => array (
			array (
				'key' => 'field_54ff1a1ba2ebb',
				'label' => 'Twitter Handle',
				'name' => 'twitter_handle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Twitter username + link',
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
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
