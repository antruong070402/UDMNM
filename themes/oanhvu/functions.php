<?php
/**
 * Pressword Simple Theme functions and definitions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function pressword_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'pressword'),
    ));

    // Switch default core markup for search form, comment form, and comments
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'pressword_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function pressword_content_width() {
    $GLOBALS['content_width'] = apply_filters('pressword_content_width', 1200);
}
add_action('after_setup_theme', 'pressword_content_width', 0);

/**
 * Register widget area.
 */
function pressword_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'pressword'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'pressword'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'pressword_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function pressword_scripts() {
    wp_enqueue_style('pressword-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Add Font Awesome 6.5.0 from CDN
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0');
    
    // Add custom JavaScript
    wp_enqueue_script('pressword-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'pressword_scripts');

/**
 * Default menu fallback
 */
function pressword_default_menu() {
    echo '<ul id="primary-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Trang chủ</a></li>';
    echo '<li><a href="' . esc_url(home_url('/Blog/')) . '">Phật Pháp</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Tin Tức</a></li>';
    echo '<li><a href="' . esc_url(home_url('/trang-mau/')) . '">Tu Học Huấn Luyện </a></li>';
    echo '<li><a href="' . esc_url(home_url('/nhac-gdpt/')) . '"><i class="fas fa-music"></i> Danh sách nhạc GDPT</a></li>';
    echo '</ul>';
}

/**
 * Custom excerpt length
 */
function pressword_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'pressword_excerpt_length');

/**
 * Custom excerpt more
 */
function pressword_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'pressword_excerpt_more');
