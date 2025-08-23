<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="min-h-screen flex flex-col">
    <header class="fixed w-full top-0 h-[56px] md:h-[96px]">
      <section class="h-full">
        <div class="container flex items-center md:items-end justify-between">
          <?php
            $page_id = 69;
            $header_logo_id = get_field('logo_dark', $page_id);
            $logo = wp_get_attachment_image_src($header_logo_id, 'full'); 
    
            if ($logo[0]) { 
                echo '<a href="' . esc_url(home_url('/')) . '" data-animate="animate-fade-down" class="site-logo md:mb-[16px] md:me-[16px]">';
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                echo '</a>';
            } else {
                echo '<h1 class="site-title"><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
            }
          ?>
          <div class="header-container bg-[#FEFEFE] hidden md:flex items-center justify-between w-full  h-[78px] rounded-[100px] border-[1px] border-[#CCD6E0] px-[16px] ml-auto max-w-[628.79px]">
            <?php 
              wp_nav_menu([
                'theme_location' => 'header-menu',
              ]);
            ?>
            <a href="" data-animate="animate-fade-right animate-once" class="text-[#FEFEFE] bg-[#191919] h-[46px] flex items-center px-[32px] rounded-[100px] no-underline font-semibold tracking-[0.25px]">Login</a>
          </div>
          <button id="mobileMenuBtn" data-animate="animate-fade-right" class="block md:hidden top-4 right-4 z-50 flex flex-col items-center justify-center space-y-[6px] w-10 h-10 focus:outline-none">
            <span class="block h-[2px] w-6 bg-black transition-transform duration-300 ease-in-out"></span>
            <span class="block h-[2px] w-6 bg-black transition-transform duration-300 ease-in-out"></span>
          </button>
          <?php
            $img_url = get_template_directory_uri() . '/assets/images/mobile-menu-background.png';
          ?>
          <div style="background-image: url('<?php echo esc_url($img_url); ?>'); background-size: cover; background-position: center;" id="mobileMenu" class="h-[100vh] fixed inset-0 bg-white z-40 hidden flex-col items-center justify-center space-y-6 text-xl top-[56px]">
            <?php 
              wp_nav_menu([
                'theme_location' => 'mobile-menu',
              ]);
            ?>
          </div>
        </div>
      </section>
    </header>
    