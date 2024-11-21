<?php
new \Kirki\Panel(
    'harry_panel',
    [
        'priority' => 10,
        'title' => esc_html__('Harry Options', 'harry'),
        'description' => esc_html__('Harry Options', 'harry'),
    ]
);

// harry header info
function harry_header_info() {
    new \Kirki\Section(
        'harry_header_info',
        [
            'title' => esc_html__('Header ', 'harry'),
            'description' => esc_html__('Harry Header Info', 'harry'),
            'panel' => 'harry_panel',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_email',
            'label' => esc_html__('Enter Email Address', 'harry'),
            'section' => 'harry_header_info',
            'default' => esc_html__('info@example.com', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_phone',
            'label' => esc_html__('Enter Phone Number', 'harry'),
            'section' => 'harry_header_info',
            'default' => esc_html__('+964 742 44 763', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_timing',
            'label' => esc_html__('Enter Your Timing', 'harry'),
            'section' => 'harry_header_info',
            'default' => esc_html__('Sunday-Thures 10am-07pm', 'harry'),
            'priority' => 10,
        ]
    );
}
harry_header_info();

// harry side bar info
function harry_sidebar_info() {
    new \Kirki\Section(
        'harry_sidebar_info',
        [
            'title' => esc_html__('Harry Sidebar Info', 'harry'),
            'description' => esc_html__('Harry Sidebar Info', 'harry'),
            'panel' => 'harry_panel',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_email',
            'label' => esc_html__('Enter Sidebar Email Address', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => esc_html__('info@example.com', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_phone',
            'label' => esc_html__('Enter Sidebar Phone Number', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => esc_html__('+964 742 44 763', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_button',
            'label' => esc_html__('Sidebar Button', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => esc_html__('Getting Started', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_button_url',
            'label' => esc_html__('Header sidebar button url', 'harry'),
            'section' => 'harry_sidebar_info',
            'default' => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );
}
harry_sidebar_info();

// harry logo section
function harry_logo_section() {
    new \Kirki\Section(
        'harry_logo',
        [
            'title' => esc_html__('Logo', 'harry'),
            'description' => esc_html__('Header Logo', 'harry'),
            'panel' => 'harry_panel',
            'priority' => 160,
        ]
    );
    // Harry Main logo
    new \Kirki\Field\Image(
        [
            'settings' => 'harry_logo',
            'label' => esc_html__('Logo', 'harry'),
            'description' => esc_html__('Please Upload Your Logo', 'harry'),
            'section' => 'harry_logo',
            'default' => get_template_directory_uri() . '/assets/img/logo/logo-black.svg',
        ]
    );
    // Harry Search logo
    new \Kirki\Field\Image(
        [
            'settings' => 'harry_search_logo',
            'label' => esc_html__('Search Logo', 'harry'),
            'description' => esc_html__('Please Upload Your Logo', 'harry'),
            'section' => 'harry_logo',
            'default' => get_template_directory_uri() . '/assets/img/logo/logo.svg',
        ]
    );
    // Harry Sidebar Logo
    new \Kirki\Field\Image(
        [
            'settings' => 'harry_sidebar_logo',
            'label' => esc_html__('Sidebar Logo', 'harry'),
            'description' => esc_html__('Please Upload Your Logo', 'harry'),
            'section' => 'harry_logo',
            'default' => get_template_directory_uri() . '/assets/img/logo/logo-black.svg',
        ]
    );
}
harry_logo_section();