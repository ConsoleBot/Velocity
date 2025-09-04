    
        <footer class="mt-auto">
          <section class="relative">
            <?php
              $page_id = 69;
              $footer_background = get_field('footer_background', $page_id);
      
              if ($footer_background) {
                echo '<div class="z-[0] bg-cover absolute top-0 left-0 w-full h-full pointer-events-none" style="background-image: url(' . esc_url($footer_background) . ');"></div>';
              } 
            ?>
            <div class="container relative z-1">
              <div class="py-[64px] pb-[32px] md:py-[80px] flex md:items-center justify-between gap-[48px] md:gap-[16px] flex-col md:flex-row">
                <div class="max-w-[384px]">
                  <?php
                    $page_id = 69;
                    $header_logo_id = get_field('logo_light', $page_id);
                    $logo = wp_get_attachment_image_src($header_logo_id, 'full'); 
            
                    if ($logo[0]) {
                        echo '<a href="' . esc_url(home_url('/')) . '" data-animate="animate-fade-up" class="block mb-[24px]">';
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        echo '</a>';
                    } else {
                        echo '<h1 class="site-title"><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
                    }
                  ?>
                  <div data-animate="animate-fade-down animate-delay-[0ms]" class="text-[16px] text-white leading-[24px] tracking-[0.4px]">
                    Velocity Properties, a product of Bermwood Consulting LLC
                  </div>
                  <div data-animate="animate-fade-right animate-delay-[200ms]" class="my-[24px] border-t-1 border-[#FEFEFE] w-[48px]"></div>
                  <div data-animate="animate-fade-down animate-delay-[400ms]" class="text-[16px] text-white leading-[24px] tracking-[0.4px] mb-[8px]">
                    3625 N. Janssen Avenue, Chicago, IL 60613
                  </div>
                  <div data-animate="animate-fade-down animate-delay-[600ms]" class="text-[16px] text-white leading-[24px] tracking-[0.4px]">
                    (312) 543-6986 | info@velocity.properties
                  </div>
                </div>
                <div class="w-full md:max-w-[690px] bg-[#00C4E3] flex-1 rounded-[16px] min-h-[368px] relative overflow-hidden">
                  <?php
                    $page_id = 69;

                    $footer_contact_overlay = get_field('footer_contact_overlay', $page_id);

                    if ($footer_contact_overlay) {
                      echo '<div class="w-[277.24px] h-[356.78px] absolute bottom-[-66px] bg-center left-[-30px] bg-no-repeat" data-animate="animate-fade-up animate-once" style="background-image: url(' . esc_url($footer_contact_overlay) . ')"></div>';
                    }
                  ?>
                  <?php
                    $page_id = 69;

                    $footer_contact_overlay = get_field('footer_contact_overlay', $page_id);

                    if ($footer_contact_overlay) {
                      echo '<div class="w-[277.24px] h-[356.78px] absolute bottom-[-66px] bg-center right-[-115px] bg-no-repeat" data-animate="animate-fade-up animate-once" style="background-image: url(' . esc_url($footer_contact_overlay) . ')"></div>';
                    }
                  ?>
                  <?php
                    $page_id = 69;
                    $footer_contact_photo = get_field('footer_contact_photo', $page_id);
            
                    if ($footer_contact_photo) {
                      echo '<div class="w-full h-full absolute bg-bottom bg-no-repeat bg-contain" data-animate="animate-fade-up animate-once" style="background-image: url(' . esc_url($footer_contact_photo) . ');"></div>';
                    } 
                  ?>
                </div>
              </div>
              <p data-animate="animate-fade-down animate-once" class="py-[17px] md:py-[30px] border-t-1 border-[#323232] text-center text-white text-[16px] leading-[26px] tracking-[0.4px] font-semibold">&copy; 2025 Velocity Properties. All rights reserved.</p>
            </div>
          </section>
        </footer>
      </div>
    <?php wp_footer(); ?>
  </body>
</html>