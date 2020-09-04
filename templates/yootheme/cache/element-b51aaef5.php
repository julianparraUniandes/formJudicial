<?php // @file C:/xampp/htdocs/formacionjudicialpr/templates/yootheme/vendor/yootheme/builder/elements/overlay/element.json

return [
  '@import' => "{$file['dirname']}/element.php",
  'name' => 'overlay',
  'title' => 'Overlay',
  'icon' => $this->get('url:images/icon.svg'),
  'iconSmall' => $this->get('url:images/iconSmall.svg'),
  'element' => true,
  'width' => 500,
  'defaults' => [
    'overlay_mode' => 'cover',
    'overlay_hover' => true,
    'overlay_style' => 'overlay-primary',
    'text_color' => 'light',
    'overlay_position' => 'center',
    'overlay_transition' => 'fade',
    'title_element' => 'h3',
    'meta_style' => 'meta',
    'meta_align' => 'bottom',
    'text_align' => 'center',
    'margin' => 'default'
  ],
  'placeholder' => [
    'props' => [
      'title' => 'Title',
      'meta' => '',
      'content' => '',
      'image' => '',
      'hover_image' => ''
    ]
  ],
  'templates' => [
    'render' => "{$file['dirname']}/templates/template.php",
    'content' => "{$file['dirname']}/templates/content.php"
  ],
  'fields' => [
    'image' => $this->get('builder:image'),
    'image_width' => [
      'label' => 'Width',
      'attrs' => [
        'placeholder' => 'auto'
      ]
    ],
    'image_height' => [
      'label' => 'Height',
      'attrs' => [
        'placeholder' => 'auto'
      ]
    ],
    'image_alt' => [
      'label' => 'Image Alt',
      'enable' => 'image'
    ],
    'title' => [
      'label' => 'Title'
    ],
    'meta' => [
      'label' => 'Meta'
    ],
    'content' => [
      'label' => 'Content',
      'type' => 'editor'
    ],
    'link' => $this->get('builder:link'),
    'link_target' => $this->get('builder:link_target'),
    'hover_image' => [
      'label' => 'Hover Image',
      'description' => 'Select an optional image that appears on hover.',
      'type' => 'image'
    ],
    'overlay_mode' => [
      'label' => 'Mode',
      'description' => 'When using cover mode, you need to set the text color manually.',
      'type' => 'select',
      'options' => [
        'Cover' => 'cover',
        'Caption' => 'caption'
      ]
    ],
    'overlay_hover' => [
      'type' => 'checkbox',
      'text' => 'Display overlay on hover'
    ],
    'overlay_transition_background' => [
      'type' => 'checkbox',
      'text' => 'Animate background only',
      'enable' => 'overlay_hover && overlay_mode == \'cover\''
    ],
    'overlay_style' => [
      'label' => 'Style',
      'description' => 'Select a style for the overlay.',
      'type' => 'select',
      'options' => [
        'None' => '',
        'Overlay Default' => 'overlay-default',
        'Overlay Primary' => 'overlay-primary',
        'Tile Default' => 'tile-default',
        'Tile Muted' => 'tile-muted',
        'Tile Primary' => 'tile-primary',
        'Tile Secondary' => 'tile-secondary'
      ]
    ],
    'text_color' => [
      'label' => 'Text Color',
      'description' => 'Set light or dark color mode for text, buttons and controls.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Light' => 'light',
        'Dark' => 'dark'
      ],
      'enable' => '!overlay_style || overlay_style && overlay_mode == \'cover\''
    ],
    'text_color_hover' => [
      'type' => 'checkbox',
      'text' => 'Inverse the text color on hover',
      'enable' => '!overlay_style && hover_image || overlay_style && overlay_mode == \'cover\' && overlay_hover && overlay_transition_background'
    ],
    'overlay_padding' => [
      'label' => 'Padding',
      'description' => 'Set the padding between the overlay and its content.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Small' => 'small',
        'Large' => 'large',
        'None' => 'none'
      ]
    ],
    'overlay_position' => [
      'label' => 'Position',
      'description' => 'Select the overlay or content position.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom',
        'Left' => 'left',
        'Right' => 'right',
        'Top Left' => 'top-left',
        'Top Center' => 'top-center',
        'Top Right' => 'top-right',
        'Bottom Left' => 'bottom-left',
        'Bottom Center' => 'bottom-center',
        'Bottom Right' => 'bottom-right',
        'Center' => 'center',
        'Center Left' => 'center-left',
        'Center Right' => 'center-right'
      ]
    ],
    'overlay_margin' => [
      'label' => 'Margin',
      'description' => 'Apply a margin between the overlay and the image container.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large'
      ],
      'enable' => 'overlay_style'
    ],
    'overlay_maxwidth' => [
      'label' => 'Max Width',
      'description' => 'Set the maximum content width.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ],
      'enable' => '!$match(overlay_position, \'(^top$|^bottom$)\')'
    ],
    'overlay_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the overlay.',
      'type' => 'select',
      'options' => [
        'Fade' => 'fade',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down',
        'Slide Top Small' => 'slide-top-small',
        'Slide Bottom Small' => 'slide-bottom-small',
        'Slide Left Small' => 'slide-left-small',
        'Slide Right Small' => 'slide-right-small',
        'Slide Top Medium' => 'slide-top-medium',
        'Slide Bottom Medium' => 'slide-bottom-medium',
        'Slide Left Medium' => 'slide-left-medium',
        'Slide Right Medium' => 'slide-right-medium',
        'Slide Top 100%' => 'slide-top',
        'Slide Bottom 100%' => 'slide-bottom',
        'Slide Left 100%' => 'slide-left',
        'Slide Right 100%' => 'slide-right'
      ],
      'enable' => 'overlay_hover'
    ],
    'image_transition' => [
      'label' => 'Transition',
      'description' => 'Select an image transition. If the hover image is set, the transition takes place between the two images. If <i>None</i> is selected, the hover image fades in.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None (Fade if hover image)' => '',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down'
      ]
    ],
    'image_min_height' => [
      'label' => 'Min Height',
      'description' => 'Set the minimum image height.',
      'type' => 'range',
      'attrs' => [
        'min' => 200,
        'max' => 500,
        'step' => 20
      ]
    ],
    'image_box_shadow' => [
      'label' => 'Box Shadow',
      'description' => 'Select the image\'s box shadow size.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ]
    ],
    'image_hover_box_shadow' => [
      'label' => 'Hover Box Shadow',
      'description' => 'Select the image\'s box shadow size on hover.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Small' => 'small',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge'
      ]
    ],
    'image_box_decoration' => [
      'label' => 'Box Decoration',
      'description' => 'Select the image\'s box decoration style. Note: The Mask option is not supported by all styles and may have no visible effect.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Default' => 'default',
        'Primary' => 'primary',
        'Secondary' => 'secondary',
        'Floating Shadow' => 'shadow',
        'Mask' => 'mask'
      ]
    ],
    'image_box_decoration_inverse' => [
      'type' => 'checkbox',
      'text' => 'Inverse style',
      'enable' => '$match(image_box_decoration, \'^(default|primary|secondary)$\')'
    ],
    'title_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the title.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Fade' => 'fade',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down',
        'Slide Top Small' => 'slide-top-small',
        'Slide Bottom Small' => 'slide-bottom-small',
        'Slide Left Small' => 'slide-left-small',
        'Slide Right Small' => 'slide-right-small',
        'Slide Top Medium' => 'slide-top-medium',
        'Slide Bottom Medium' => 'slide-bottom-medium',
        'Slide Left Medium' => 'slide-left-medium',
        'Slide Right Medium' => 'slide-right-medium',
        'Slide Top 100%' => 'slide-top',
        'Slide Bottom 100%' => 'slide-bottom',
        'Slide Left 100%' => 'slide-left',
        'Slide Right 100%' => 'slide-right'
      ],
      'enable' => 'overlay_hover'
    ],
    'title_style' => [
      'label' => 'Style',
      'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Primary' => 'heading-primary',
        'H1' => 'h1',
        'H2' => 'h2',
        'H3' => 'h3',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'title'
    ],
    'title_decoration' => [
      'label' => 'Decoration',
      'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Divider' => 'divider',
        'Bullet' => 'bullet',
        'Line' => 'line'
      ],
      'enable' => 'title'
    ],
    'title_color' => [
      'label' => 'Color',
      'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Muted' => 'muted',
        'Emphasis' => 'emphasis',
        'Primary' => 'primary',
        'Success' => 'success',
        'Warning' => 'warning',
        'Danger' => 'danger',
        'Background' => 'background'
      ],
      'enable' => 'title'
    ],
    'title_element' => [
      'label' => 'HTML Element',
      'description' => 'Choose one of the six heading elements to fit your semantic structure.',
      'type' => 'select',
      'options' => [
        'H1' => 'h1',
        'H2' => 'h2',
        'H3' => 'h3',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'title'
    ],
    'title_margin' => [
      'label' => 'Margin Top',
      'description' => 'Set the top margin.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'None' => 'remove'
      ],
      'enable' => 'title'
    ],
    'meta_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the meta text.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Fade' => 'fade',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down',
        'Slide Top Small' => 'slide-top-small',
        'Slide Bottom Small' => 'slide-bottom-small',
        'Slide Left Small' => 'slide-left-small',
        'Slide Right Small' => 'slide-right-small',
        'Slide Top Medium' => 'slide-top-medium',
        'Slide Bottom Medium' => 'slide-bottom-medium',
        'Slide Left Medium' => 'slide-left-medium',
        'Slide Right Medium' => 'slide-right-medium',
        'Slide Top 100%' => 'slide-top',
        'Slide Bottom 100%' => 'slide-bottom',
        'Slide Left 100%' => 'slide-left',
        'Slide Right 100%' => 'slide-right'
      ],
      'enable' => 'overlay_hover'
    ],
    'meta_style' => [
      'label' => 'Style',
      'description' => 'Select a predefined meta text style, including color, size and font-family.',
      'type' => 'select',
      'options' => [
        'Default' => '',
        'Meta' => 'meta',
        'H4' => 'h4',
        'H5' => 'h5',
        'H6' => 'h6'
      ],
      'enable' => 'meta'
    ],
    'meta_color' => [
      'label' => 'Color',
      'description' => 'Select the text color.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Muted' => 'muted',
        'Emphasis' => 'emphasis',
        'Primary' => 'primary',
        'Success' => 'success',
        'Warning' => 'warning',
        'Danger' => 'danger'
      ],
      'enable' => 'meta'
    ],
    'meta_align' => [
      'label' => 'Alignment',
      'description' => 'Align the meta text above or below the title.',
      'type' => 'select',
      'options' => [
        'Top' => 'top',
        'Bottom' => 'bottom'
      ],
      'enable' => 'meta'
    ],
    'meta_margin' => [
      'label' => 'Margin Top',
      'description' => 'Set the top margin.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'None' => 'remove'
      ],
      'enable' => 'meta'
    ],
    'content_transition' => [
      'label' => 'Transition',
      'description' => 'Select a hover transition for the content.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'None' => '',
        'Fade' => 'fade',
        'Scale Up' => 'scale-up',
        'Scale Down' => 'scale-down',
        'Slide Top Small' => 'slide-top-small',
        'Slide Bottom Small' => 'slide-bottom-small',
        'Slide Left Small' => 'slide-left-small',
        'Slide Right Small' => 'slide-right-small',
        'Slide Top Medium' => 'slide-top-medium',
        'Slide Bottom Medium' => 'slide-bottom-medium',
        'Slide Left Medium' => 'slide-left-medium',
        'Slide Right Medium' => 'slide-right-medium',
        'Slide Top 100%' => 'slide-top',
        'Slide Bottom 100%' => 'slide-bottom',
        'Slide Left 100%' => 'slide-left',
        'Slide Right 100%' => 'slide-right'
      ],
      'enable' => 'overlay_hover'
    ],
    'content_style' => [
      'label' => 'Style',
      'description' => 'Select a predefined text style, including color, size and font-family.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Default' => '',
        'Lead' => 'lead'
      ],
      'enable' => 'content'
    ],
    'content_margin' => [
      'label' => 'Margin Top',
      'description' => 'Set the top margin.',
      'type' => 'select',
      'default' => '',
      'options' => [
        'Small' => 'small',
        'Default' => '',
        'Medium' => 'medium',
        'Large' => 'large',
        'X-Large' => 'xlarge',
        'None' => 'remove'
      ],
      'enable' => 'content'
    ],
    'text_align' => $this->get('builder:text_align'),
    'text_align_breakpoint' => $this->get('builder:text_align_breakpoint'),
    'text_align_fallback' => $this->get('builder:text_align_fallback'),
    'maxwidth' => $this->get('builder:maxwidth'),
    'maxwidth_align' => $this->get('builder:maxwidth_align'),
    'maxwidth_breakpoint' => $this->get('builder:maxwidth_breakpoint'),
    'margin' => $this->get('builder:margin'),
    'margin_remove_top' => $this->get('builder:margin_remove_top'),
    'margin_remove_bottom' => $this->get('builder:margin_remove_bottom'),
    'animation' => $this->get('builder:animation'),
    '_parallax_button' => $this->get('builder:_parallax_button'),
    'visibility' => $this->get('builder:visibility'),
    'container_padding_remove' => $this->get('builder:container_padding_remove'),
    'name' => $this->get('builder:name'),
    'status' => $this->get('builder:status'),
    'id' => $this->get('builder:id'),
    'class' => $this->get('builder:cls'),
    'css' => [
      'label' => 'CSS',
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-image</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-hover-image</code>',
      'type' => 'editor',
      'editor' => 'code',
      'mode' => 'css',
      'attrs' => [
        'debounce' => 500
      ]
    ]
  ],
  'fieldset' => [
    'default' => [
      'type' => 'tabs',
      'fields' => [
        0 => [
          'title' => 'Content',
          'fields' => [
            0 => 'image',
            1 => [
              'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
              'name' => '_image_dimension',
              'type' => 'grid',
              'width' => '1-2',
              'fields' => [
                0 => 'image_width',
                1 => 'image_height'
              ]
            ],
            2 => 'image_alt',
            3 => 'title',
            4 => 'meta',
            5 => 'content',
            6 => 'link',
            7 => 'link_target',
            8 => 'hover_image'
          ]
        ],
        1 => [
          'title' => 'Settings',
          'fields' => [
            0 => [
              'label' => 'Overlay',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'overlay_mode',
                1 => 'overlay_hover',
                2 => 'overlay_transition_background',
                3 => 'overlay_style',
                4 => 'text_color',
                5 => 'text_color_hover',
                6 => 'overlay_padding',
                7 => 'overlay_position',
                8 => 'overlay_margin',
                9 => 'overlay_maxwidth',
                10 => 'overlay_transition'
              ]
            ],
            1 => [
              'label' => 'Image',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'image_transition',
                1 => 'image_min_height',
                2 => 'image_box_shadow',
                3 => 'image_hover_box_shadow',
                4 => 'image_box_decoration',
                5 => 'image_box_decoration_inverse'
              ]
            ],
            2 => [
              'label' => 'Title',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'title_transition',
                1 => 'title_style',
                2 => 'title_decoration',
                3 => 'title_color',
                4 => 'title_element',
                5 => 'title_margin'
              ]
            ],
            3 => [
              'label' => 'Meta',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'meta_transition',
                1 => 'meta_style',
                2 => 'meta_color',
                3 => 'meta_align',
                4 => 'meta_margin'
              ]
            ],
            4 => [
              'label' => 'Content',
              'type' => 'group',
              'divider' => true,
              'fields' => [
                0 => 'content_transition',
                1 => 'content_style',
                2 => 'content_margin'
              ]
            ],
            5 => [
              'label' => 'General',
              'type' => 'group',
              'fields' => [
                0 => 'text_align',
                1 => 'text_align_breakpoint',
                2 => 'text_align_fallback',
                3 => 'maxwidth',
                4 => 'maxwidth_align',
                5 => 'maxwidth_breakpoint',
                6 => 'margin',
                7 => 'margin_remove_top',
                8 => 'margin_remove_bottom',
                9 => 'animation',
                10 => '_parallax_button',
                11 => 'visibility',
                12 => 'container_padding_remove'
              ]
            ]
          ]
        ],
        2 => $this->get('builder:advanced')
      ]
    ]
  ]
];
