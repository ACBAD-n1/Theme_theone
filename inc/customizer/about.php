<?php 
/**
 * TheOne Theme home about Customizer
 *
 * @package TheOne
 */

//** */
//** About Section */
//** */

$wp_customize->add_section('about_section', [
    'title'                 =>      __('Customize About Section'),
    'priority'              =>      2,
    'capability'            =>      'edit_theme_options',
    'panel'                 =>      'theone_panel'
]);


// About Title
$wp_customize->add_setting('about_title', [
    'type'                  =>      'theme_mod',
    'default'               =>      __('Why Choose Our WordPress Theme?', 'theone'),
    'sanitize_callback'     =>      'sanitize_text_field'
]);
$wp_customize->add_control('about_title', [
    'label'                 =>      __('Here You Can Customize the About Title', 'theone'),
    'section'               =>      'about_section',
    'setting'               =>      'about_title',
    'type'                  =>      'text'
]);

// Define an array of cards with default values
$cards = [
    [
        'id'                =>  'card_1',
        'default_title'     =>  __('Optimized for Sales', 'theone'),
        'default_content'   =>  __('Our theme is designed to help you convert visitors into customers with high-speed performance, clean layouts, and optimized user journeys.', 'theone'),
    ],
    [
        'id'                =>  'card_2',
        'default_title'     =>  __('Fully Customizable', 'theone'),
        'default_content'   =>  __('With easy-to-use options, tweak the design, layout, and functionality to perfectly suit your brand without touching a single line of code.', 'theone'),
    ],
    [
        'id'                =>  'card_3',
        'default_title'     =>  __('Mobile-Responsive', 'theone'),
        'default_content'   =>  __('Deliver a flawless shopping experience on all devices, from desktops to smartphones, ensuring maximum engagement wherever your customers are.', 'theone'),
    ],
    [
        'id'                =>  'card_4',
        'default_title'     =>  __('SEO-Friendly', 'theone'),
        'default_content'   =>  __('Built with SEO best practices in mind, get better rankings and attract organic traffic with a theme that Google loves.', 'theone'),
    ],
    [
        'id'                =>  'card_5',
        'default_title'     =>  __('WooCommerce Ready', 'theone'),
        'default_content'   =>  __('Seamlessly integrated with WooCommerce, giving you full control to create your ideal eCommerce store.', 'theone'),
    ],
    
];

// Loop through each card and dynamically create settings and controls
foreach($cards as $card) {
    // Setting and Control for titles
    $wp_customize->add_setting($card['id'] . '_title', [
        'type'                  =>      'theme_mod',
        'default'               =>      $card['default_title'],
        'sanitize_callback'     =>      'sanitize_text_field',
    ]);
    $wp_customize->add_control($card['id'] . '_title', [
        'label'                 =>      __('Customize the' . ucfirst( $card['id']) . ' Title', 'theone'),
        'section'               =>      'about_section',
        'type'                  =>      'text',
    ]);

    // Setting and Control For Contents
    $wp_customize->add_setting($card['id'] . '_content', [
        'type'                  =>      'theme_mod',
        'default'               =>      $card['default_content'],
        'sanitize_callback'     =>      'sanitize_text_field',
    ]);
    $wp_customize->add_control($card['id'] . '_content', [
        'label'                 =>      __('Customize The' . ucfirst($card['id']) . ' Content', 'theone'),
        'section'               =>      'about_section',
        'type'                  =>      'textarea',
    ]);

}

// About Image
$wp_customize->add_setting('about_image', [
    'type'                  =>      'theme_mod',
    'default'               =>      '',
    'sanitize_callback'     =>      'esc_url_raw',
]);
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', [
    'label'                 =>      __('Here You Can Customize the Benefits Image', 'theone'),
    'section'               =>      'about_section',
    'description'           =>      __('Upload an image for the About benefit section', 'theone'), 
]));

