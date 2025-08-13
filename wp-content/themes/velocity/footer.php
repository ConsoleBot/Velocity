    
        <footer class="mt-auto bg-[#191919]">
          <section>
            <div class="container">
              <div class="py-[80px] flex justify-between gap-[48px] md:gap-[16px] flex-col md:flex-row">
                <div class="max-w-[384px]">
                  <?php
                    $page_id = 69;
                    $header_logo_id = get_field('logo_light', $page_id);
                    $logo = wp_get_attachment_image_src($header_logo_id, 'full'); 
            
                    if ($logo[0]) {
                        echo '<a href="' . esc_url(home_url('/')) . '" class="block mb-[24px]">';
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        echo '</a>';
                    } else {
                        echo '<h1 class="site-title"><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
                    }
                  ?>
                  <div class="text-[16px] text-white leading-[24px] tracking-[0.4px]">
                    Velocity Properties, a product of Bermwood Consulting LLC
                  </div>
                  <div class="my-[24px] border-t-1 border-[#FEFEFE] w-[48px]"></div>
                  <div class="text-[16px] text-white leading-[24px] tracking-[0.4px] mb-[8px]">
                    3625 N. Janssen Avenue, Chicago, IL 60613
                  </div>
                  <div class="text-[16px] text-white leading-[24px] tracking-[0.4px]">
                    (312) 543-6986 | info@velocity.properties
                  </div>
                </div>
                <div class="flex-1 min-w-[240px] max-w-0">
                  <h1 class="text-white text-[20px] leading-[24px] tracking-[1px] mb-[32px] font-extrabold">Our Products</h1>
                  <?php
                    $menus = get_nav_menu_locations();
                    $menu_id   = $menus['header-menu'];
                    $menu_items = wp_get_nav_menu_items($menu_id);

                    $products_menu_id = null;
                    foreach ($menu_items as $item) {
                        if ($item->title === 'Products') {
                            $products_menu_id = $item->ID;
                            break;
                        }
                    }

                    $products_submenus = [];
                    if ($products_menu_id) {
                        foreach ($menu_items as $item) {
                            if ((int) $item->menu_item_parent === (int) $products_menu_id) {
                                $products_submenus[] = $item;
                            }
                        }
                    }

                    if (!empty($products_submenus)) {
                        echo '<ul class="submenu-products text-white text-[16px] leading-[24px] tracking-[1px]">';
                        foreach ($products_submenus as $submenu) {
                            echo '<li class="mb-[16px]"><a href="' . esc_url($submenu->url) . '">' . esc_html($submenu->title) . '</a></li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </div>
                <div>
                  <div class="inquiry-form max-w-[404px]">
                    <?php echo do_shortcode('[contact-form-7 id="dd1ca4f" title="Inquiry Form"]'); ?>
                  </div>
                </div>
              </div>
              <p class="py-[30px] border-t-1 border-[#323232] text-center text-white text-[16px] leading-[26px] tracking-[0.4px] font-semibold">&copy; 2025 Velocity Properties. All rights reserved.</p>
            </div>
          </section>
        </footer>
      </div>
    <?php wp_footer(); ?>
  </body>
</html>