<?php
/**
 * Standalone Local PHP Router for Griya Karuna Theme Preview
 * Allows instant live preview via PHP built-in web server without requiring MySQL/WP installation.
 */

// Mock WordPress functions if not defined
if (!function_exists('add_action')) {
  function add_action($tag, $function_to_add) {}
}
if (!function_exists('add_theme_support')) {
  function add_theme_support($feature) {}
}
if (!function_exists('register_nav_menus')) {
  function register_nav_menus($locations = array()) {}
}
if (!function_exists('register_post_type')) {
  function register_post_type($post_type, $args = array()) {}
}
if (!function_exists('wp_head')) {
  function wp_head() {
    echo '<link rel="stylesheet" href="/style.css">';
    echo '<script src="/assets/js/navigation.js" defer></script>';
  }
}
if (!function_exists('wp_footer')) {
  function wp_footer() {}
}
if (!function_exists('wp_body_open')) {
  function wp_body_open() {}
}
if (!function_exists('language_attributes')) {
  function language_attributes() { echo 'lang="id"'; }
}
if (!function_exists('bloginfo')) {
  function bloginfo($show = '') { echo 'Griya Karuna'; }
}
if (!function_exists('esc_url')) {
  function esc_url($url) { return htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); }
}
if (!function_exists('home_url')) {
  function home_url($path = '/') { return $path; }
}
if (!function_exists('has_nav_menu')) {
  function has_nav_menu($location) { return false; }
}
if (!function_exists('get_header')) {
  function get_header() { require __DIR__ . '/header.php'; }
}
if (!function_exists('get_footer')) {
  function get_footer() { require __DIR__ . '/footer.php'; }
}
if (!function_exists('body_class')) {
  function body_class() { echo 'class="griyakaruna-theme"'; }
}
if (!function_exists('is_front_page')) {
  function is_front_page() {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return ($uri === '/' || $uri === '/index.php' || $uri === '');
  }
}
if (!function_exists('is_page')) {
  function is_page($page) {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return (strpos($uri, $page) !== false);
  }
}
if (!function_exists('have_posts')) {
  function have_posts() { return false; }
}
if (!function_exists('the_title')) {
  function the_title($before = '', $after = '') { echo $before . 'Cerita dari Rumah Singgah' . $after; }
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Serve static files directly
if (file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
  return false;
}

// Route to template files
if ($uri === '/' || $uri === '' || $uri === '/index.php') {
  require __DIR__ . '/front-page.php';
} elseif (strpos($uri, 'tentang-kami') !== false) {
  require __DIR__ . '/page-tentang-kami.php';
} elseif (strpos($uri, 'program') !== false) {
  require __DIR__ . '/page-program.php';
} elseif (strpos($uri, 'publikasi') !== false) {
  require __DIR__ . '/page-publikasi.php';
} elseif (strpos($uri, 'hubungi-kami') !== false) {
  require __DIR__ . '/page-hubungi-kami.php';
} elseif (strpos($uri, 'artikel') !== false) {
  require __DIR__ . '/single.php';
} else {
  require __DIR__ . '/front-page.php';
}
