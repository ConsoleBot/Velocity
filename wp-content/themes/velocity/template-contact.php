<?php
  /**
   * Template Name: Contact Template
   */
  get_header();
  ?>
  <section class="relative overflow-hidden">
    <?php
      $page_id = 29;

      $contact_hero_overlay = get_field('contact_hero_overlay', $page_id);

      if ($contact_hero_overlay) {
        echo '<div class="h-full bg-no-repeat bg-center bg-cover top-0 right-0 left-0 absolute" data-animate="animate-shake animate-once animate-duration-[4000ms]" style="background-image: url(' . esc_url($contact_hero_overlay) . ')"></div>';
      }
    ?>
    <?php
      $page_id = 29;

      $contact_hero_photo = get_field('contact_hero_photo', $page_id);

      if ($contact_hero_photo) {
        echo '<div class="w-[145%] lg:w-auto h-full bg-no-repeat bg-bottom bg-cover bottom-0 right-0 left-0 absolute" data-animate="animate-fade-up animate-once" style="background-image: url(' . esc_url($contact_hero_photo) . ')"></div>';
      }
    ?>
    <div class="relative container pt-[87px]! lg:pt-[158px]! pb-[190px]! lg:pb-[225px]!"> 
      <div class="flex flex-col lg:flex-row gap-[41px] lg:gap-0">
        <div class="flex-1">
          <button data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="mb-[16px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[32px] font-semibold text-[10px] sm:text-[12px] tracking-[2px] text-[#00C4E3]">CONTACT</button>
          <h1 data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="lg:max-w-[486px] text-[40px] lg:text-[56px] text-[#191919] font-extrabold tracking-[0.2px] mb-[16px]">Connect with Our Team</h1>
          <p data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="lg:max-w-[486px] font-inter text-[16px] text-[#4A5C60] leading-[157%] tracking-[0.15px]">Need support or have inquiries about our property tech solutions? We're here to assist you. Get in touch with our team using the contact form below, and we'll respond promptly to help with your needs.</p>
        </div>
        <div data-animate="animate-fade animate-once animate-fill-both animate-duration-[1000ms]" class="lg:max-w-[588px] contact-form flex-1 bg-[#FFFFFF] border-1 border-[#CCD6E0] rounded-[16px] py-[32px] px-[24px] lg:py-[56px] lg:px-[51px]">
          <?php echo do_shortcode('[contact-form-7 id="8c9786f" title="Contact"]'); ?>
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
<?php get_footer('contact'); ?>
