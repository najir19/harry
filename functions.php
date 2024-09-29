<?php

/**
 * Essential harry theme supports
 * */
function harry_theme_setup() {
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

}

add_action('after_setup_theme', 'harry_theme_setup');

function harry_header() {
    get_template_part('template-parts/header/header1');
}

function harry_preloader() {
    get_template_part('template-parts/header/preloader');
}

// call enque
include_once 'inc/common/scripts.php';
include_once 'inc/harry-kirki.php';
include_once 'inc/template-function.php';
