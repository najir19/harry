<?php

// harry main logo
function harry_logo() {
    $harry_header_logo = get_theme_mod('harry_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_header_logo); ?>" alt="<?php echo esc_attr__('logo', 'harry') ?>">
    </a>
    <?php
}

// harry search logo
function harry_search_logo() {
    $harry_search_logo = get_theme_mod('harry_search_logo', get_template_directory_uri() . '/assets/img/logo/logo.svg');
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_search_logo); ?>" alt="<?php echo esc_attr__('logo', 'harry') ?>">
    </a>
    <?php
}

// harry sidebar logo
function harry_sidebar_logo() {
    $harry_sidebar_logo = get_theme_mod('harry_sidebar_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_sidebar_logo); ?>" alt="<?php echo esc_attr__('logo', 'harry') ?>">
    </a>
    <?php
}

// harry Main menu
function harry_menu() {
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'menu_class' => 'main-menu-class',
            'menu_id' => 'main-menu-id',
            'fallback_cb' => 'Harry_walker_Nav_Menu::fallback',
            'walker' => new Harry_Walker_Nav_Menu,
        )
    );
}
// harry side info menu
function harry_side_menu() {
    wp_nav_menu(
        array(
            'theme_location' => 'sidebar-menu',
            'menu_class' => 'sidebar-menu',
            'menu_id' => 'sidebar-menu',
            'fallback_cb' => 'Harry_walker_Nav_Menu::fallback',
            'walker' => new Harry_Walker_Nav_Menu,
        )
    );
}