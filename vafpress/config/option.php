<?php

return array(
	'title' => __('Vafpress Option Panel', 'vp_textdomain'),
	'page' => __('Vafpress Menu', 'vp_textdomain'),
	'logo' => '',
	'menus' => array(
		array(
			'title' => __('Standard HTML Controls', 'vp_textdomain'),
			'name' => 'menu_1',
			'icon' => '/icon/standard.png',
			'menus' => array(
				array(
					'title' => __('Regular', 'vp_textdomain'),
					'name' => 'submenu_1',
					'icon' => '/icon/standard-regular.png',
					'sections' => array(
						array(
							'title' => __('TextBox and TextArea', 'vp_textdomain'),
							'name' => 'section_1',
							'description' => __('TextBox and TextArea Showcase', 'vp_textdomain'),
							'fields' => array(
								array(
									'type' => 'textbox',
									'name' => 'tb_1',
									'label' => __('Alphabet', 'vp_textdomain'),
									'description' => __('Only alphabets allowed here.', 'vp_textdomain'),
									'default' => 'abcdefg',
									'validation' => 'alphabet',
								),
								array(
									'type' => 'textbox',
									'name' => 'tb_2',
									'label' => __('Alphanumeric', 'vp_textdomain'),
									'description' => __('Only alphabets and numbers allowed here.', 'vp_textdomain'),
									'default' => 'abcd123',
									'validation' => 'alphanumeric',
								),
								array(
									'type' => 'textbox',
									'name' => 'tb_3',
									'label' => __('Numeric', 'vp_textdomain'),
									'description' => __('Only numbers allowed here.', 'vp_textdomain'),
									'default' => '123',
									'validation' => 'numeric',
								),
								array(
									'type' => 'textbox',
									'name' => 'tb_4',
									'label' => __('Email', 'vp_textdomain'),
									'description' => __('Only valid email allowed here.', 'vp_textdomain'),
									'default' => 'contact@vafour.com',
									'validation' => 'email',
								),
								array(
									'type' => 'textbox',
									'name' => 'tb_5',
									'label' => __('URL', 'vp_textdomain'),
									'description' => __('Only valid URL allowed here.', 'vp_textdomain'),
									'default' => 'http://vafpress.com',
									'validation' => 'url',
								),
								array(
									'type' => 'textarea',
									'name' => 'ta_1',
									'label' => __('Textarea', 'vp_textdomain'),
									'description' => __('Everytime you need long text..', 'vp_textdomain'),
									'height' => '300',
									'default' => 'lorem ipsum',
								),
							),
						),
						array(
							'name' => 'section_2',
							'title' => __('Multiple Choices', 'vp_textdomain'),
							'description' => __('Controls with multiple specified options.', 'vp_textdomain'),
							'fields' => array(
								array(
									'type' => 'checkbox',
									'name' => 'cb_1',
									'label' => __('CheckBox with Min and Max Selected Validation', 'vp_textdomain'),
									'description' => __('Minimum selected of 2 items and maximum selected of 2 items, in other words need to choose exactly 2 items.', 'vp_textdomain'),
									'validation' => 'minselected[2]|maxselected[2]',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
										),
									),
									'default' => array(
										'value_1',
									),
								),
								array(
									'type' => 'checkbox',
									'name' => 'cb_2',
									'label' => __('CheckBox with Required Validation', 'vp_textdomain'),
									'description' => __('Required to choose anything.', 'vp_textdomain'),
									'validation' => 'required',
									'default' => '',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
										),
									),
								),
								array(
									'type' => 'radiobutton',
									'name' => 'rb_1',
									'label' => __('RadioButton', 'vp_textdomain'),
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
										),
									),
									'default' => array(
										'value_3',
									),
								),
								array(
									'type' => 'select',
									'name' => 'ss_1',
									'label' => __('Single Select Box', 'vp_textdomain'),
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
										),
									),
									'default' => array(
										'value_3',
									),
								),
								array(
									'type' => 'select',
									'name' => 'ss_2',
									'label' => __('Select Box with Get Categories Data Source', 'vp_textdomain'),
									'items' => array(
										'data' => array(
											array(
												'type' => 'function',
												'name' => 'vp_get_categories(test,ting)',
											),
										),
									),
									'default' => array(
										'{{last}}',
									),
								),
								array(
									'type' => 'multiselect',
									'name' => 'ms_1',
									'label' => __('Multiple Select Box', 'vp_textdomain'),
									'description' => __('Minimum selected of 2 items and maximum selected of 3 items.', 'vp_textdomain'),
									'validation' => 'minselected[2]|maxselected[3]',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
										),
									),
									'default' => array(
										'{{first}}',
										'{{last}}',
									),
								),
							),
						),
					),
				),
				array(
					'title' => __('Image', 'vp_textdomain'),
					'name' => 'submenu_2',
					'icon' => '/icon/standard-image.png',
					'sections' => array(
						array(
							'title' => __('Check Images', 'vp_textdomain'),
							'fields' => array(
								array(
									'type' => 'checkimage',
									'name' => 'ci_1',
									'label' => __('Various Sized Images', 'vp_textdomain'),
									'description' => __('CheckImage with unspecified item max height and item max width', 'vp_textdomain'),
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/100x100',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/120x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x120',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/50x50',
										),
									),
								),
								array(
									'type' => 'checkimage',
									'name' => 'ci_2',
									'label' => __('Specified Images Maximum Height', 'vp_textdomain'),
									'description' => __('CheckImage with specified item max height', 'vp_textdomain'),
									'item_max_height' => '70',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/100x100',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/120x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x120',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/50x50',
										),
									),
									'default' => array(
										'value_1',
										'value_2',
									),
								),
								array(
									'type' => 'checkimage',
									'name' => 'ci_3',
									'label' => __('Specified Images Maximum Width', 'vp_textdomain'),
									'description' => __('CheckImage with specified item max width', 'vp_textdomain'),
									'item_max_width' => '50',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/100x100',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/120x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x120',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/50x50',
										),
									),
									'default' => array(
										'value_3',
										'value_4',
									),
								),
								array(
									'type' => 'checkimage',
									'name' => 'ci_4',
									'label' => __('Specified Images Maximum Width and Height', 'vp_textdomain'),
									'description' => __('CheckImage with specified item max width and item max height', 'vp_textdomain'),
									'item_max_height' => '70',
									'item_max_width' => '70',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/100x100',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/120x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x120',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/50x50',
										),
									),
									'default' => array(
										'value_1',
										'value_4',
									),
								),
								array(
									'type' => 'checkimage',
									'name' => 'ci_5',
									'label' => __('Validation Rules Applied', 'vp_textdomain'),
									'description' => __('Minimun selected of 2 items and Maximum selected of 3 items.', 'vp_textdomain'),
									'item_max_height' => '70',
									'item_max_width' => '70',
									'validation' => 'minselected[2]|maxselected[3]',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x80',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x80',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x80',
										),
									),
									'default' => array(
										'value_1',
									),
								),
							),
						),
						array(
							'title' => __('Radio Images', 'vp_textdomain'),
							'fields' => array(
								array(
									'type' => 'radioimage',
									'name' => 'ri_1',
									'label' => __('Various Sized Images', 'vp_textdomain'),
									'description' => __('RadioImage with unspecified item max height and item max width', 'vp_textdomain'),
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/100x100',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/120x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x120',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/50x50',
										),
									),
								),
								array(
									'type' => 'radioimage',
									'name' => 'ri_2',
									'label' => __('Specified Images Maximum Height', 'vp_textdomain'),
									'description' => __('RadioImage with specified item max height', 'vp_textdomain'),
									'item_max_height' => '70',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/100x100',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/120x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x120',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/50x50',
										),
									),
									'default' => array(
										'value_1',
									),
								),
								array(
									'type' => 'radioimage',
									'name' => 'ri_3',
									'label' => __('Specified Images Maximum Width', 'vp_textdomain'),
									'description' => __('RadioImage with specified item max width', 'vp_textdomain'),
									'item_max_width' => '50',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/100x100',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/120x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x120',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/50x50',
										),
									),
									'default' => array(
										'value_3',
									),
								),
								array(
									'type' => 'radioimage',
									'name' => 'ri_4',
									'label' => __('Specified Images Maximum Width and Height', 'vp_textdomain'),
									'description' => __('RadioImage with specified item max width and item max height', 'vp_textdomain'),
									'item_max_height' => '70',
									'item_max_width' => '70',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/100x100',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/120x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x120',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/50x50',
										),
									),
									'default' => array(
										'value_4',
									),
								),
								array(
									'type' => 'radioimage',
									'name' => 'ri_5',
									'label' => __('Validation Rules Applied', 'vp_textdomain'),
									'description' => __('Required to Choose.', 'vp_textdomain'),
									'item_max_height' => '70',
									'item_max_width' => '70',
									'validation' => 'required',
									'items' => array(
										array(
											'value' => 'value_1',
											'label' => __('Label 1', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x80',
										),
										array(
											'value' => 'value_2',
											'label' => __('Label 2', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x80',
										),
										array(
											'value' => 'value_3',
											'label' => __('Label 3', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x80',
										),
										array(
											'value' => 'value_4',
											'label' => __('Label 4', 'vp_textdomain'),
											'img' => 'http://placehold.it/80x80',
										),
									),
								),
							),
						),
					),
				),
			),
		),
		array(
			'title' => __('Special Controls', 'vp_textdomain'),
			'name' => 'menu_2',
			'icon' => '/icon/special.png',
					'sections' => array(
						array(
							'title' => __('Section 1', 'vp_textdomain'),
							'fields' => array(
								array(
									'type' => 'toggle',
									'name' => 'tg_1',
									'label' => __('Toggle', 'vp_textdomain'),
									'description' => __('Suits the need to ask user a yes or no option.', 'vp_textdomain'),
									'default' => '1',
								),
								array(
									'type' => 'slider',
									'name' => 'sl_1',
									'label' => __('Decimal Slider', 'vp_textdomain'),
									'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
									'min' => '-10',
									'max' => '17.5',
									'step' => '0.1',
									'default' => '15.9',
								),
								array(
									'type' => 'slider',
									'name' => 'sl_2',
									'label' => __('Custom Step Slider', 'vp_textdomain'),
									'description' => __('This slider has minimum value of 100, maximum value of 1000, sliding step of 5 and default value 275, everything can be customized.', 'vp_textdomain'),
									'min' => '100',
									'max' => '1000',
									'step' => '5',
									'default' => '275',
								),
								array(
									'type' => 'upload',
									'name' => 'up_1',
									'label' => __('Upload', 'vp_textdomain'),
									'description' => __('Media uploader, using the powerful WP Media Upload', 'vp_textdomain'),
									'default' => 'http://placehold.it/70x70',
								),
								array(
									'type' => 'color',
									'name' => 'cl_1',
									'label' => __('Color 1', 'vp_textdomain'),
									'description' => __('Color Picker, you can set the default color.', 'vp_textdomain'),
									'default' => '#3eb9e6',
								),
								array(
									'type' => 'color',
									'name' => 'cl_2',
									'label' => __('Color 2', 'vp_textdomain'),
									'description' => __('Color Picker, you can set the default color.', 'vp_textdomain'),
									'default' => '#98ed28',
								),
								array(
									'type' => 'date',
									'name' => 'dt_1',
									'label' => __('International Date Format', 'vp_textdomain'),
									'description' => __('Date Picker with International date format.', 'vp_textdomain'),
									'format' => 'yy-mm-dd',
									'default' => '2012-12-12',
								),
								array(
									'type' => 'date',
									'name' => 'dt_2',
									'label' => __('Asian Date Format', 'vp_textdomain'),
									'description' => __('Date Picker with Asian date format.', 'vp_textdomain'),
									'format' => 'dd-mm-yy',
									'default' => '',
									'validation' => 'required',
								),
								array(
									'type' => 'date',
									'name' => 'dt_3',
									'label' => __('Ranged Date Picker', 'vp_textdomain'),
									'description' => __('The range can be exact date or formatted string to define the offset from today, for example "+1D" will be parsed as tommorow date, or "+1D +1W", please refer to [jQueryUI Datepicker Docs](http://jqueryui.com/datepicker/#min-max)', 'vp_textdomain'),
									'min_date' => '1-1-2000',
									'max_date' => 'today',
									'format' => 'yy-mm-dd',
									'default' => '-1W',
								),
							),
						),
					),
		),
		array(
			'title' => __('Custom Data Source', 'vp_textdomain'),
			'name' => 'menu_3',
			'icon' => '/icon/datasources.png',
					'sections' => array(
						array(
							'title' => __('Data Source and Special Default', 'vp_textdomain'),
							'fields' => array(
								array(
									'type' => 'multiselect',
									'name' => 'ms_categories',
									'label' => __('Categories', 'vp_textdomain'),
									'description' => __('MultiSelect field with WP Categories Data Source and **{{first}}** **{{last}}** default items.', 'vp_textdomain'),
									'items' => array(
										'data' => array(
											array(
												'type' => 'function',
												'name' => 'vp_get_categories',
											),
										),
									),
									'default' => array(
										'{{first}}',
										'{{last}}',
									),
								),
								array(
									'type' => 'select',
									'name' => 'se_pages',
									'label' => __('Pages', 'vp_textdomain'),
									'description' => __('Select field with WP Pages Data Source', 'vp_textdomain'),
									'items' => array(
										'data' => array(
											array(
												'type' => 'function',
												'name' => 'vp_get_pages',
											),
										),
									),
								),
								array(
									'type' => 'checkbox',
									'name' => 'cb_users',
									'label' => __('Users Data Source', 'vp_textdomain'),
									'description' => __('Checkbox field with WP Users Data Source and **{{all}}** default items.', 'vp_textdomain'),
									'items' => array(
										'data' => array(
											array(
												'type' => 'function',
												'name' => 'vp_get_users',
											),
										),
									),
									'default' => array(
										'{{all}}',
									),
								),
								array(
									'type' => 'radiobutton',
									'name' => 'rb_roles',
									'label' => __('Roles', 'vp_textdomain'),
									'description' => __('RadioButton field with WP Roles Data Source and **{{last}}** default item.', 'vp_textdomain'),
									'items' => array(
										'data' => array(
											array(
												'type' => 'function',
												'name' => 'vp_get_roles',
											),
										),
									),
									'default' => array(
										'{{last}}',
									),
								),
								array(
									'type' => 'multiselect',
									'name' => 'ms_tags',
									'label' => __('Tags', 'vp_textdomain'),
									'description' => __('MultiSelect field with WP Tags Data Source and **{{first}}** default items.', 'vp_textdomain'),
									'items' => array(
										'data' => array(
											array(
												'type' => 'function',
												'name' => 'vp_get_tags',
											),
										),
									),
									'default' => array(
										'{{first}}',
									),
								),
								array(
									'type' => 'select',
									'name' => 'se_posts',
									'label' => __('Posts', 'vp_textdomain'),
									'description' => __('Select field with WP Post Data Source', 'vp_textdomain'),
									'items' => array(
										'data' => array(
											array(
												'type' => 'function',
												'name' => 'vp_get_posts',
											),
										),
									),
								),
							),
						),
					),
		),
	)
);

/**
 *EOF
 */