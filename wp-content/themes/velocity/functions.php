<?php
function velocity_assets() {
  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_style(
    'fontawesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
    [],
    '6.5.1'
  );

  // Enqueue CSS
  wp_enqueue_style(
    'velocity-style',
    get_template_directory_uri() . '/assets/css/style.css',
    [], // Dependencies
    $theme_version, // Versioning for cache-busting
    'all' // Media
  );
  

  // Enqueue jQuery (WordPress includes it already)
  wp_enqueue_script('jquery');

  // Enqueue custom JS
  wp_enqueue_script(
    'velocity-script',
    get_template_directory_uri() . '/assets/js/script.js',
    ['jquery'], // jQuery as a dependency
    $theme_version, // Version
    true // Load in footer
  );
}
add_action('wp_enqueue_scripts', 'velocity_assets');

function velocity_theme_setup() {
  add_theme_support('custom-logo', [
    'height'      => 34,
    'width'       => 169,
    'flex-height' => true,
    'flex-width'  => true,
  ]);

  add_theme_support('menus');

  register_nav_menus([
    'header-menu' => 'Header Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
  ]);


}
add_action('after_setup_theme', 'velocity_theme_setup');

function velocity_add_data_attribute($atts, $item, $args) {
  if ($args->theme_location === 'header-menu' && $item->menu_item_parent == 0) {
      static $delay = 0;
      $atts['data-animate'] = 'animate-fade animate-once animate-duration-[2000ms]';
      $atts['style'] = 'animation-delay:' . $delay . 'ms;';
      $delay += 100;

      if (isset($atts['class'])) {
          $atts['class'] .= ' opacity-0';
      } else {
          $atts['class'] = 'opacity-0';
      }
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'velocity_add_data_attribute', 10, 3);


if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
      'page_title'    => 'Theme Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));
}
