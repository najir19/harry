<?php

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