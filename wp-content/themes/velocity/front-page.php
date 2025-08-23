<?php get_header(); ?>
  <?php
  $homepage_id = get_option('page_on_front');

  $homepage = get_post($homepage_id);

  if ($homepage) {
      echo apply_filters('the_content', $homepage->post_content);
  }
  ?>
  <section class="relative h-full md:h-[965px]">
    <?php
      $page_id = 11;
      $header_background = get_field('hero_background', $page_id);

      $header_background_overlay = get_field('hero_overlay', $page_id);

      if ($header_background) {
        echo '<div data-animate="animate-fade-right animate-once" class="z-[-1] pointer-events-none relative md:absolute left-0 top-0 right-0 mt-[56px] md:mt-0 h-[184px] md:h-[965px] bg-size-[185%] md:bg-size-[145%] bg-no-repeat bg-[17%_45%] md:bg-[-73%_58%]" style="background-image: url(' . esc_url($header_background) . ')"></div>';
      }
      if ($header_background_overlay) {
        echo '  <div class="z-[-1] pointer-events-none absolute left-0 top-0 right-0 mt-[56px] md:mt-0 h-[calc(100%-56px)] md:h-[965px] bg-cover bg-no-repeat bg-bottom md:bg-center" style="background-image: url('. esc_url($header_background_overlay) .')"></div>';
      }
    ?>
    <div class="container">
      <div class="w-full md:w-[486px] h-full block md:flex justify-center flex-col items-start pt-[32px] md:pt-0 pb-[64px] md:pb-0">
        <button data-animate="animate-fade-down animation-delay-[100]" class="mb-[20px] sm:mb-[16px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[24px] font-semibold text-[10px] sm:text-[12px] leading-[1] tracking-[2px] text-[#00C4E3]">PROPERTY TECHNOLOGY</button>
        <h1 data-animate="animate-fade-right animation-delay-[200]" class="mb-[16px] font-extrabold text-[#191919] text-[40px] sm:text-[56px] leading-[48px] sm:leading-[1] tracking-[0.2px]">Innovative <span class="text-[#00C4E3]">Proptech</span> for Commercial Real Estate</h1>
        <p data-animate="animate-fade-left animation-delay-[300]" class="font-inter mb-[24px] sm:mb-[40px] text-[#4A5C60] text-[16px] leading-[157%] tracking-[0.15px]">Velocity Properties is designed to manage commercial real estate portfolios of all sizes. Velocity helps owners and occupiers see, analyze, and manage their portfolio in a single,  user-friendly application.</p>
        <button data-animate="animate-fade-up animation-delay-[400]" class="w-full sm:w-auto bg-[#00C4E3] rounded-[100px] py-[12px] sm:py-[8px] px-[24px] font-bold text-[16px] leading-[1] tracking-[.25px] text-white">Partner With Us</button>
      </div>
    </div>
  </section>
  <section>
    <div class="container px-0! md:px-[16]!">
      <div class="md:flex items-center py-[64px] md:py-[80px] gap-[16px]">
        <div class="w-full md:w-[561px] h-[386.3px] sm:h-full md:h-[661px] md:flex-1">
          <?php
            $page_id = 11;
            $real_estate = get_field('real_estate_image', $page_id);

            if ($real_estate) {
              echo '<img data-animate="animate-fade-right" class="w-full h-full object-none" src='. esc_url($real_estate) .' alt="">';
            }
          ?>
        </div>
        <div class="px-[16px] md:px-0 flex flex-col items-start max-w-[546px] md:ml-auto flex-1 mt-[31px] md:mt-[20%]">
          <button data-animate="animate-fade-down animation-delay-[100]" class="mb-[16px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[32px] font-semibold text-[10px] sm:text-[12px] leading-[1] tracking-[2px] text-[#00C4E3]">THE CHALLENGE</button>
          <h2 data-animate="animate-fade-right animation-delay-[200]" class="mb-[16px] text-[#233134] text-[32px] md:text-[40px] font-extrabold leading-[1] tracking-[0.2px]">Real Estate</h2>
          <p data-animate="animate-fade-left animation-delay-[300]" class="font-inter mb-[16px] text-[#4A5C60] text-[16px] leading-[157%] tracking-[0.15px]">Real estate is typically the largest or second largest expenditure on a company’s income statement. For many companies, the portfolio offers an untapped opportunity to reduce costs, drive efficiencies, and improve the employee experience.</p>
          <p data-animate="animate-fade-left animation-delay-[400]" class="font-inter text-[#4A5C60] text-[16px] leading-[157%] tracking-[0.15px]">Modern portfolios are often managed with antiquated tools, making this data difficult to access or quite simply not available. </p>
        </div>
      </div>
    </div>
  </section>
  <section class="relative">
    <?php 
      $page_id = 11;

      $product_background = get_field('home_product_background', $page_id);

      $product_background_overlay = get_field('home_product_background_overlay', $page_id);

      if ($product_background) {
        echo '<div class="z-[-1] pointer-events-none h-full w-full absolute bg-no-repeat bg-bottom-right md:bg-right bg-size-[196%_15%] md:bg-auto" style="background-image: url(' . esc_url($product_background) . ')"></div>';
      }
      if ($product_background_overlay) {
        echo '  <div class="z-[-1] pointer-events-none h-full w-full absolute bg-no-repeat bg-center md:center bg-cover md:bg-cover" style="background-image: url('. esc_url($product_background_overlay) .')"></div>';
      }

    ?>
    <div class="container">
      <div class="pt-[64px] pb-[192px] md:py-[80px] md:pb-[174px] flex items-center flex-col">
        <button data-animate="animate-fade-down animation-delay-[0]" class="flex-1 mb-[16px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[32px] font-semibold text-[10px] sm:text-[12px] leading-[1] tracking-[2px] text-[#00C4E3]">SERVICES</button>
        <h2 data-animate="animate-fade-down animation-delay-[200]" class="mb-[16px] text-[#233134] text-[32px] md:text-[40px] font-extrabold leading-[1] tracking-[0.2px] text-center">Products & Services</h2>
        <p data-animate="animate-fade-down animation-delay-[400]" class="font-inter max-w-[792px] text-center mb-[64px] text-[#4A5C60] text-[16px] leading-[157%] tracking-[0.15px]">Velocity Properties is a cutting-edge application suite that will address Real Estate Management by providing these products and services.</p>
        <div class="w-full flex flex-col sm:grid grid-cols-[repeat(auto-fill,minmax(373px,1fr))] gap-[24px]">
          <?php
            $page_id = 69;
            $services = get_field('services', $page_id);

            if ($services) {
              $delay = 0;
              foreach ($services as $service) {
                if (!empty($service['name'])) {
                  echo '<div style="animation-delay: '.$delay.'ms" data-animate="animate-flip-down animate-once" class="border border-[#CCD6E0] bg-[#FEFEFE] p-[16px] md:p-[32px] rounded-[16px] flex flex-col items-center">';
                  echo '<div class="mb-[24px] h-[104px] w-[104px] rounded-full" style="background-color:' . esc_attr($service['color']) . '">';
                  echo '<div class="h-full w-full bg-center bg-no-repeat" style="background-image: url(' . esc_url($service['image']) . ')"></div>';
                  echo '</div>';
                  echo '<h4 class="text-center mb-[8px] text-[24px] text-[#233134] font-extrabold leading-[1] tracking-[0.2px]">' . esc_html($service['name']) . '</h4>';
                  echo '<p class="font-inter text-center mb-[24px] text-[14px] text-[#4A5C60] leading-[22px] tracking-[0.15px]">' . esc_html($service['description']) . '</p>';
                  echo '<a href="'. esc_html($service['link']) .'" class="relative text-[#00C4E3] text-[14px] font-semibold leading-[1] tracking-[0.2px] link-button">More details</a>';
                  echo '</div>';
                }
                $delay += 100;
              }
            }
          ?>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-[#FEFEFE]">
    <div class="container px-0! md:px-[16]!">
      <div class="pb-[173px] sm:pb-[151px] lg:py-[80px] flex justify-end">
        <div class="flex justify-center items-center md:block py-[64px] pb-[320px] md:pt-[56px] px-[56px] md:pl-[0] md:pr-[56px] lg:pr-[78px] mr-[0] lg:mr-[102px] border-2 border-[#FEFEFE4D] rounded-0 md:rounded-[16px] h-full md:h-[327px] w-full md:w-[914px] bg-[#00C4E3] relative">
          <?php
            $page_id = 69;

            $counter_background_overlay = get_field('counter_background_overlay', $page_id);

            if ($counter_background_overlay) {
              echo '<div data-animate="animate-shake animate-once animate-duration-[4000ms]" class="top-0 absolute pointer-events-none h-full w-full bg-center bg-no-repeat bg-cover" style="background-image: url(' . esc_url($counter_background_overlay) . ')"></div>';
            }
          ?>
          <?php
            $page_id = 69;

            $counter_logo = get_field('counter_logo', $page_id);

            if ($counter_logo) {
              echo '<div data-animate="animate-fade-up animate-once" class="absolute w-[100%] md:w-[719.9px] h-[477px] md:h-[784.23px] top-[unset] bottom-[-24%] md:top-[-300px] left-[unset] md:left-[-370px] lg:left-[-240px] bg-size-[180%] md:bg-size-[auto] bg-[56%_32%] bg-no-repeat" style="background-image: url(' . esc_url($counter_logo) . ')"></div>';
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
  <section>
    <div class="flex flex-col items-center relative pt-0 md:pt-[48px] pb-[112px] md:pb-[120px]">
      <?php
        $page_id = 11;

        $home_team_background = get_field('home_team_background', $page_id);

        if ($home_team_background) {
          echo '<div data-animate="animate-fade-up animate-once animate-duration-1000 animate-delay-[1000ms]" class="w-full h-full bg-center bg-cover z-[-1] absolute" style="background-image: url(' . esc_url($home_team_background) . ')"></div>';
        }
      ?>  
      <button data-animate="animate-fade-down animation-delay-[0]" class="flex-1 mb-[24px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[32px] font-semibold text-[10px] sm:text-[12px] leading-[1] tracking-[2px] text-[#00C4E3]">OUR TEAM</button>
      <h2 data-animate="animate-fade-down animation-delay-[200]" class="mb-[16px] text-[#233134] text-[32px] md:text-[40px] font-extrabold leading-[1] tracking-[0.2px] text-center">Meet Our Team of Experts</h2>
      <p data-animate="animate-fade-down animation-delay-[400]" class="font-inter max-w-[660px] text-center mb-[32px] md:mb-[80px] text-[#4A5C60] text-[16px] leading-[157%] tracking-[0.15px]">Get to know the faces behind our accomplishments and explore the collective dedication that defines us.</p>
      <div class="px-[16px] md:px-[120px] flex flex-col md:grid grid-cols-[repeat(auto-fill,minmax(564px,1fr))] gap-[32px] md:gap-[24px] mb-[32px] md:mb-[80px] w-full">
        <?php
          $page_id = 11;
          $members = get_field('members', $page_id);
          if($members){
            $delay=0;
            foreach ($members as $member) {
              if (!empty($member['name'])) {
                echo '<div class="flex flex-col text-center md:text-left md:flex-row flex-wrap items-center justify-center gap-[8px] md:gap-[24px]">';
                  // Fixed image
                  echo '<div style="animation-delay: '.$delay.'ms" data-animate="animate-fade-left animate-once" class="flex-shrink-0 w-[200px] h-[240px] rounded-[16px] bg-[linear-gradient(0deg,#CCD6E0,#CCD6E0),linear-gradient(0deg,rgba(254,254,254,0.2),rgba(254,254,254,0.2))]">';
                    echo '<div class="rounded-[16px] h-full w-full bg-no-repeat bg-center bg-size-[105%]" style="background-image: url('.esc_url($member['avatar']).')"></div>';
                  echo '</div>';

                  // Flexible text that can drop below image
                  echo '<div class="flex-1 min-w-[200px] max-w-[300px]">';
                    echo '<h6 style="animation-delay: '.($delay + 100).'ms" data-animate="animate-fade-down" class="text-[24px] text-[#233134] font-extrabold leading-[1] tracking-[0.2px] mb-[4px]">'.esc_html($member['name']).'</h6>';
                    echo '<p style="animation-delay: '.($delay + 200).'ms" data-animate="animate-fade-down" class="font-inter text-[14px] text-[#4A5C60] leading-[1] tracking-[0.2px] mb-[16px] md:mb-[24px]">'.esc_html($member['position']).'</p>';
                    echo '<p style="animation-delay: '.($delay + 300).'ms" data-animate="animate-fade-down" class="font-inter text-[16px] text-[#4A5C60] leading-[157%] tracking-[0.15px]">'.esc_html($member['description']).'</p>';
                  echo '</div>';
                echo '</div>';
              }
              $delay += 500;
            }
          }
        ?>  
      </div>
      <a data-animate="animate-fade-up animate-once" href="http://localhost:8000/about-us" class="relative flex link-button w-auto bg-[#00C4E3] rounded-[100px] py-[12px] px-[32px] font-bold text-[14px] md:text-[16px] leading-[1] tracking-[.25px] text-white">View All Team</a>
    </div>
  </section>
<?php get_footer(); ?>
