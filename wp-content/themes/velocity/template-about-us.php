<?php
  /**
   * Template Name: About Us Template
   */
  get_header();
  ?>
  <section>
    <div class="container px-0! lg:px-[16px]! pt-[87px]! lg:pt-[187px]!">
      <div class="flex flex-col items-center">
        <button data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="mb-[16px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[32px] font-semibold text-[10px] sm:text-[12px] tracking-[2px] text-[#00C4E3]">OUR TEAM</button>
        <h1 data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="px-[16px] text-center lg:px-0 text-[40px] lg:text-[56px] text-[#191919] font-extrabold tracking-[0.2px] mb-[16px]">People Behind Our Success</h1>
        <p data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="px-[16px] lg:px-0 mb-[40px] lg:mb-[55px] lg:max-w-[839px] text-center font-inter text-[16px] text-[#4A5C60] leading-[157%] tracking-[0.15px]">Our diverse teams are united by a common goal, working synergistically to overcome challenges and create transformative solutions. Get to know the faces behind our accomplishments and explore the collective dedication that defines us.</p>
        <div class="relative h-[313px] lg:h-[566px] w-full lg:rounded-[16px] overflow-hidden bg-[#92E8F5]">
          <?php
            $page_id = 27;

            $about_us_hero_overlay = get_field('about_us_hero_overlay', $page_id);

            if ($about_us_hero_overlay) {
              echo '<div class="absolute h-full w-full" data-animate="animate-fade animate-once animate-duration-[4000ms]" style="background-image: url(' . esc_url($about_us_hero_overlay) . ')"></div>';
            }
          ?>
          <?php
            $page_id = 27;

            $about_us_hero_photo = get_field('about_us_hero_photo', $page_id);

            if ($about_us_hero_photo) {
              echo '<div class="absolute h-full w-full" data-animate="animate-fade animate-once animate-duration-[4000ms]" style="background-image: url(' . esc_url($about_us_hero_photo) . ')"></div>';
            }
          ?>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container py-[64px]! lg:py-[120px]!">
      <div class="flex flex-col items-center">
        <button data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="mb-[16px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[32px] font-semibold text-[10px] sm:text-[12px] tracking-[2px] text-[#00C4E3]">OUR TEAM</button>
        <h1 data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="text-center text-[40px] lg:text-[56px] text-[#191919] font-extrabold tracking-[0.2px] mb-[16px]">Meet Our Team of Experts</h1>
        <p data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="mb-[32px] lg:mb-[80px] lg:max-w-[839px] text-center font-inter text-[16px] text-[#4A5C60] leading-[157%] tracking-[0.15px]">Our team is a dynamic group of experienced professionals dedicated to delivering innovative solutions and exceptional results. With diverse expertise across various industries, we collaborate seamlessly to drive success and exceed client expectations.</p>
        <div class="w-full grid  grid-cols-[repeat(auto-fill,minmax(159px,1fr))] lg:grid-cols-[repeat(auto-fill,minmax(274px,1fr))] gap-x-[12px] lg:gap-x-[24px] gap-y-[32px] lg:gap-y-[40px]">
        <?php
            $page_id = 27;
            $members = get_field('members', $page_id);
            if ($members) {
              foreach ($members as $index => $member) {
               echo '<div class="" data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both">
                      <div class="h-[251px] lg:h-[448px] w-full relative overflow-hidden rounded-[16px] bg-[#DDE3E3] mb-[8px] lg:mb-[16px]">
                       <div class="bg-no-repeat bg-center bg-cover abosolute w-full h-full" data-animate="animate-fade animate-once animate-duration-[4000ms]" style="background-image: url(' . esc_url($member['avatar']) . ')"></div>
                      </div>
                      <h6 class="text-[16px] lg:text-[24px] text-[#233134] mb-[4px] tracking-[0.2px]">'. esc_html($member['name']) .'</h6>
                      <p class="text-[10px] lg:text-[14px] text-[#4A5C60] tracking-[0.2px]">'. esc_html($member['position']) .'</p>
                    </div>';
              }
            }
          ?>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-[linear-gradient(180deg,#47D4EB_0%,#00C4E3_100%)] relative overflow-hidden">
    <?php
      $page_id = 69;

      $more_about_us_overlay = get_field('more_about_us_overlay', $page_id);

      if ($more_about_us_overlay) {
        echo '<div data-animate="animate-shake animate-once animate-duration-[4000ms]" class="top-0 opacity-[.2] absolute pointer-events-none h-full w-full bg-center bg-no-repeat bg-cover" style="background-image: url(' . esc_url($more_about_us_overlay) . ')"></div>';
      }
    ?>
    <?php
      $page_id = 69;

      $more_about_us_photo = get_field('more_about_us_photo', $page_id);

      if ($more_about_us_photo) {
        echo '<div data-animate="animate-fade-right animate-once" class="hidden lg:block absolute right-[78%] bottom-[-190px] w-[822px] h-[954px] bg-right bg-no-repeat bg-auto" style="background-image: url(' . esc_url($more_about_us_photo) . ')"></div>';
      }
    ?>
    <?php
      $page_id = 69;

      $more_about_us_photo = get_field('more_about_us_photo', $page_id);

      if ($more_about_us_photo) {
        echo '<div data-animate="animate-fade-right animate-once" class="transform -scale-x-100 hidden lg:block absolute left-[78%] bottom-[-190px] w-[822px] h-[954px] bg-right bg-no-repeat bg-auto" style="background-image: url(' . esc_url($more_about_us_photo) . ')"></div>';
      }
    ?>
    <div class="container">
      <div class="py-[64px] lg:py-[204px] max-w-[841px] mx-auto flex flex-col items-center">
        <h3 data-animate="animate-fade-up animate-once animate-fill-both" class="text-[32px] lg:text-[40px] text-[#FEFEFE] tracking-[0.2px] font-extrabold mb-[16px] text-center">Want to know more about us?</h3>
        <p data-animate="animate-fade-up animate-once animate-fill-both" class="font-inter text-[16px] text-[#FEFEFE] leading-[157%] tracking-[0.15px] text-center mb-[32px] lg:mb-[40px]">Our team is a dynamic group of experienced professionals dedicated to delivering innovative solutions and exceptional results. With diverse expertise across various industries, we collaborate seamlessly to drive success and exceed client expectations.</p>
        <a data-animate="animate-fade-up animate-once animate-fill-both" href="" class="text-[16px] text-[#FEFEFE] py-[12px] px-[24px] bg-[#233134] rounded-[100px] tracking-[0.25px] font-bold z-1">Book a Demo</a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
