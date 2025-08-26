<?php
  /**
   * Template Name: Workflow Automation Template
   */
  get_header();
  ?>
  <?php
    $page_id = 54;
    $product_hero_background_overlay = get_field('product_hero_background_overlay', $page_id);

  ?>
  <div class="section-hero h-full pt-[100px] sm:pt-[142px] md:pt-[133px] lg:pt-[176px] xl:pt-[176px] pb-[64px] bg-center bg-cover bg-no-repeat" style="background-image: url('<?php echo esc_url($product_hero_background_overlay); ?>');">
    <div class="text-center h-[372px] sm:h-[525px] md:h-[634px] lg:h-[860px] xl:h-[892px] 2xl:h-[942px]">
      <button data-animate="animate-once animate-fill-both animate-duration-[1000ms]" class="hero-title mb-[8px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[32px] font-semibold text-[10px] sm:text-[12px] tracking-[2px] text-[#00C4E3]">PRODUCT</button>
      <h2 data-animate="animate-once animate-fill-both animate-duration-[1000ms]" class="hero-tagline-1 text-[24px] sm:text-[36px] md:text-[48px] lg:text-[64px] font-extrabold tracking-[8px] bg-[linear-gradient(90deg,#8DC4DB_0%,#D9DBF4_50%,#8DC4DB_100%)] bg-clip-text text-transparent">WORKFLOW</h2>
      <h1 data-animate="animate-once animate-fill-both animate-duration-[1000ms]" class="hero-tagline-2 mt-[-15px] text-[32px] sm:text-[48px] md:text-[72px] lg:text-[120px] xl:text-[168px] tracking-[0.2px] font-extrabold leading-[80px] sm:leading-[114px] md:leading-[148px] lg:leading-[182px] bg-[linear-gradient(90deg,#8DC4DB_0%,#D9DBF4_50%,#8DC4DB_100%)] bg-clip-text text-transparent">AUTOMATION</h1>
      <div class="hero relative mt-[-145px] sm:mt-[-210px] md:mt-[-255px] lg:mt-[-345px]">
        <?php
          $page_id = 54;
          $screen_only_photo = get_field('product_screen_hero_photo', $page_id);
          $laptop_full_photo = get_field('product_laptop_hero_photo', $page_id);
          if ($screen_only_photo) {
            echo '<img src="'.esc_url($screen_only_photo).'" data-animate="animate-fade animate-once animate-fill-both" class="hero-screen-photo absolute left-0 w-full z-10" alt="Screen">';
          }
          if ($laptop_full_photo) {
            echo '<img src="'.esc_url($laptop_full_photo).'" class="hero-laptop-photo absolute top-0 z-9 opacity-0 w-[83%]" alt="Laptop">';
          }
        ?>
      </div>
    </div>
    <p data-animate="animate-fade-up animate-once animate-fill-both" class="font-inter max-w-[996px] text-center mx-auto text-[#4A5C60] text-[16px] md:text-[20px] leading-[157%] tracking-[0.15px]">
      Streamline, automate, and manage complex workflows within your organization. Transform the way you<br> work with Velocity Properties Workflow tool and experience a new level of productivity.
    </p>
  </div>
  <section class="min-h-unset bg-[#252829] lg:min-h-[1024px] mt-[694px] sm:mt-[894px] md:mt-[1034px] lg:mt-[1203px] xl:mt-[1292px] 2xl:mt-[1342px]">
    <div class="container">
      <div class="mt-[64px] md:mt-[80px] text-center flex flex-col items-center">
        <h2 data-animate="animate-fade-right animate-once animate-fill-both" class="max-w-[996px] text-[32px] md:text-[56px] text-[#FEFEFE]  tracking-[0.2px] font-extrabold mb-[16px]">Key  Feature</h2>
        <p data-animate="animate-fade-up animate-once animate-fill-both" class="max-w-[996px] mb-[64px] font-inter text-[16px] text-[#FEFEFE] leading-[157%] tracking-[0.15px]">Our platform simplifies property management with an intuitive dashboard, automated leases and payments, real-time maintenance tracking, and powerful reporting tools.</p>
        <?php
          $page_id = 54;
          $key_feature_photo = get_field('product_key_feature_photo', $page_id);

          if ($key_feature_photo) {
            echo '<img data-animate="animate-fade-up animate-once animate-fill-both" src="'.esc_url($key_feature_photo).'" class="z-1 pointer-events-none" alt="Screen">';
          }
        ?>
      </div>
      <div class="mt-[-20px] mb-[24px] flex md:grid grid-cols-[repeat(auto-fill,minmax(374px,1fr))] gap-[24px] flex-wrap">
        <?php
          $page_id = 54;
          $product_key_features = get_field('product_key_features', $page_id);

          if ($product_key_features) {
            foreach ($product_key_features as $index => $key_feature) {
              if($index <= 3){
                echo '<div data-animate="animate-fade-left animate-once animate-fill-both" class="p-[24px] lg:p-[32px] bg-[#141817] border border-[#333739] rounded-[16px]">';
                  echo '<h3 class="text-[#FEFEFE] text-[24px] font-extrabold tracking-[0.2px] mb-[16px]">' . esc_html($key_feature['name']) . '</h3>';
                  echo '<p class="font-inter text-[#FEFEFE] text-[16px] leading-[157%] tracking-[0.15px]">' . esc_html($key_feature['description']) . '</p>';
                echo '</div>';
              }
            }
          }
        ?>
      </div>
      <div class="mb-[64px] md:mb-[160px] flex md:grid grid-cols-[repeat(auto-fill,minmax(275px,1fr))] gap-[24px] flex-wrap">
        <?php
          $page_id = 54;
          $product_key_features = get_field('product_key_features', $page_id);

          if ($product_key_features) {
            foreach ($product_key_features as $index => $key_feature) {
              if($index > 3){
                echo '<div data-animate="animate-fade-left animate-once animate-fill-both" class="p-[24px] lg:p-[32px] bg-[#141817] border border-[#333739] rounded-[16px]">';
                  echo '<h3 class="text-[#FEFEFE] text-[24px] font-extrabold tracking-[0.2px] mb-[16px]">' . esc_html($key_feature['name']) . '</h3>';
                  echo '<p class="font-inter text-[#FEFEFE] text-[16px] leading-[157%] tracking-[0.15px]">' . esc_html($key_feature['description']) . '</p>';
                echo '</div>';
              }
            }
          }
        ?>
      </div>
    </div>
  </section>
  <section class="bg-[#EDF2F7]">
    <div class="container px-0! lg:px-[16px]!">
      <div class="py-[67px] md:py-[160px]">
        <h2 data-animate="animate-fade-down" class="text-[32px] lg:text-[56px] text-center text-[#191919]  tracking-[0.2px] font-extrabold mb-[16px]">Product Features</h2>
        <p data-animate="animate-fade-down" class="px-[16px] font-inter max-w-[996px] mx-auto text-center text-[16px] text-[#4A5C60] leading-[157%] tracking-[0.15px] pb-[40px]">Our property database streamlines real estate with advanced search, market data, AI recommendations, secure document management, and investment insights—all in a user-friendly interface.</p>
        <div class="product-feature-container">
          <div class="bg-[#191919] min-h-[336px] h-[420px] lg:h-auto lg:rounded-[16px] mt-[24px] lg:mt-[149px] w-full py-[32px] lg:py-[84px] px-[16px] lg:px-[107px] relative mb-[72px]">
            <div data-animate="animate-fade-up animate-once animate-fill-both" class="feature-name text-[32px] text-center lg:text-left lg:text-[56px] text-[#FEFEFE] font-extrabold tracking-[0.2px] max-w-[384px] mx-auto lg:mx-[unset]">Advance Search Filters</div>
            <?php
              $page_id = 54;
              $product_features = get_field('product_features', $page_id);
              if ($product_features) {
                echo '<img data-animate="animate-fade-left animate-once animate-fill-both" src="'.esc_url($product_features[0]['photo']).'" class="w-[486px] bottom-[32px] lg:w-[600px] lg:bottom-unset lg:top-[-30px] xl:h-auto xl:w-auto feature-photo absolute xl:top-[-114px] right-[0]" alt="Laptop">';
              }
            ?>
          </div>
          <div>
            <div class="relative tabs mt-10">
              <button class="tab-prev lg:hidden absolute left-0 z-10 top-[7px] px-2 py-1">
                <i class="fa-solid fa-angle-left"></i>
              </button>
              <div role="tablist" class="tablist-wrapper mb-[40px] px-[16px] lg:px-0 flex justify-start gap-0 overflow-x-hidden scroll-smooth lg:justify-center">
                <?php
                  $page_id = 54;
                  $product_features = get_field('product_features', $page_id);
                  if ($product_features) {
                    $delay = 0;
                    foreach ($product_features as $index => $feature) {
                      $is_active = $index === 0 ? 'true' : 'false';
                      $tab_index = $index === 0 ? '0' : '-1';
                      $panel_id = 'panel-' . $index;         
                      echo '<button 
                        role="tab" 
                        aria-selected="' . $is_active . '" 
                        aria-controls="' . $panel_id . '" 
                        data-photo="' . esc_url($feature['photo']) . '" 
                        data-name="' . esc_attr($feature['name']) . '" 
                        tabindex="' . $tab_index . '"
                        style="animation-delay: '.$delay.'ms"
                        data-animate="animate-fade animate-once animate-fill-both"
                        class="tab-btn min-w-fit lg:min-w-unset focus:outline-none cursor-pointer p-[16px] lg:p-[24px] pt-[10px] text-[16px] lg:text-[20px] text-[#4A5C60] aria-selected:text-[#191919] font-semibold tracking-[0.2px] border-b-[2px] border-b-[#E2E8E9] aria-selected:border-b-[2px] aria-selected:border-b-[#191919]">'
                        . esc_html($feature['name']) .
                      '</button>';
                      $delay += 100;
                    }
                  }
                ?>
              </div>
              <div class="px-[16px]">
                <?php
                  if ($product_features) {
                    foreach ($product_features as $index => $feature) {
                      $panel_id = 'panel-' . $index;
                      $hidden_class = $index === 0 ? '' : 'hidden';
                      echo '<p data-animate="animate-fade-up animate-once animate-fill-both" id="' . $panel_id . '" role="tabpanel" class="mx-auto max-w-[800px] text-center ' . $hidden_class . '">'
                          . wp_kses_post($feature['description'] ?? 'No description')
                        . '</p>';
                    }
                  }
                ?>
              </div>
              <button class="tab-next lg:hidden absolute right-0 z-10 top-[7px] px-2 py-1">
                <i class="fa-solid fa-angle-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-[#FEFEFE]">
    <div class="container px-0! md:px-[16]!">
      <div class="pb-[173px] sm:pb-[151px] lg:pb-[151px] lg:py-[160px] flex justify-end">
        <div class="flex justify-center items-center md:block py-[64px] pb-[320px] md:pt-[56px] px-[56px] md:pl-[0] md:pr-[56px] lg:pr-[78px] mr-[0] lg:mr-[102px] border-2 border-[#FEFEFE4D] rounded-0 md:rounded-[16px] h-full md:h-[327px] w-full md:w-[914px] bg-[#233134] relative">
          <?php
            $page_id = 69;

            $counter_background_overlay = get_field('counter_background_overlay', $page_id);

            if ($counter_background_overlay) {
              echo '<div data-animate="animate-shake animate-once animate-duration-[4000ms]" class="top-0 opacity-[.2] absolute pointer-events-none h-full w-full bg-center bg-no-repeat bg-cover" style="background-image: url(' . esc_url($counter_background_overlay) . ')"></div>';
            }
          ?>
          <?php
            $page_id = 69;

            $counter_logo = get_field('counter_logo', $page_id);

            if ($counter_logo) {
              echo '<div data-animate="animate-fade-up animate-once" class="pointer-events-none absolute w-[100%] md:w-[719.9px] h-[477px] md:h-[784.23px] top-[unset] bottom-[-24%] md:top-[-300px] left-[unset] md:left-[-370px] lg:left-[-240px] bg-size-[180%] md:bg-size-[auto] bg-[56%_32%] bg-no-repeat" style="background-image: url(' . esc_url($counter_logo) . ')"></div>';
            }
          ?>
          <div class="w-initial md:w-[432px] float-none md:float-right flex flex-col md:flex-row flex-no-wrap md:flex-wrap gap-x-[68px] gap-y-[24px] md:gap-y-[80px]">
            <div>
              <h3 class="count text-[48px] text-[#FEFEFE] font-extrabold leading-[1] tracking-[0.2px]" data-count="16000">0</h3>
              <label class="font-inter text-[14px] text-[#FEFEFE] font-semibold leading-[22px] tracking-[0.15px]">Properties</label>
            </div> 
            <div>
              <h3 class="count text-[48px] text-[#FEFEFE] font-extrabold leading-[1] tracking-[0.2px]"  data-count="6000">0</h3>
              <label class="font-inter text-[14px] text-[#FEFEFE] font-semibold leading-[22px] tracking-[0.15px]">Deals Handled</label>
            </div> 
            <div>
              <h3 class="count text-[48px] text-[#FEFEFE] font-extrabold leading-[1] tracking-[0.2px]"  data-count="18000">0</h3>
              <label class="font-inter text-[14px] text-[#FEFEFE] font-semibold leading-[22px] tracking-[0.15px]">Transactions</label>
            </div> 
            <div>
              <h3 class="count text-[48px] text-[#FEFEFE] font-extrabold leading-[1] tracking-[0.2px]"  data-count="2000">0</h3>
              <label class="font-inter text-[14px] text-[#FEFEFE] font-semibold leading-[22px] tracking-[0.15px]">Active Users</label>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-[linear-gradient(180deg,#47D4EB_0%,#00C4E3_100%)] relative">
    <?php
      $page_id = 69;

      $more_about_us_overlay = get_field('more_about_us_overlay', $page_id);

      if ($more_about_us_overlay) {
        echo '<div data-animate="animate-shake animate-once animate-duration-[4000ms]" class="top-0 opacity-[.2] absolute pointer-events-none h-full w-full bg-center bg-no-repeat bg-cover" style="background-image: url(' . esc_url($more_about_us_overlay) . ')"></div>';
      }
    ?>
    <div class="container">
      <div class="py-[64px] lg:py-[124px] max-w-[841px] mx-auto flex flex-col items-center">
        <h3 data-animate="animate-fade-up animate-once animate-fill-both" class="text-[32px] lg:text-[40px] text-[#FEFEFE] tracking-[0.2px] font-extrabold mb-[16px] text-center">Want to know more about us?</h3>
        <p data-animate="animate-fade-up animate-once animate-fill-both" class="font-inter text-[16px] text-[#FEFEFE] leading-[157%] tracking-[0.15px] text-center mb-[32px] lg:mb-[40px]">Our team is a dynamic group of experienced professionals dedicated to delivering innovative solutions and exceptional results. With diverse expertise across various industries, we collaborate seamlessly to drive success and exceed client expectations.</p>
        <a data-animate="animate-fade-up animate-once animate-fill-both" href="" class="text-[16px] text-[#FEFEFE] py-[12px] px-[24px] bg-[#233134] rounded-[100px] tracking-[0.25px] font-bold z-1">Book a Demo</a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
