  <?php
  /**
   * Template Name: Property Database Template
   */
  get_header();
  ?>
  <?php
    $page_id = 69;
    $product_hero_background_overlay = get_field('product_hero_background_overlay', $page_id);

  ?>
  <div class="section-hero h-full pt-[100px] sm:pt-[142px] md:pt-[133px] lg:pt-[176px] xl:pt-[176px] pb-[64px] bg-center bg-cover bg-no-repeat" style="background-image: url('<?php echo esc_url($product_hero_background_overlay); ?>');">
    <div class="text-center h-[372px] sm:h-[525px] md:h-[634px] lg:h-[860px] xl:h-[892px] 2xl:h-[942px]">
      <button class="hero-title mb-[8px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[32px] font-semibold text-[10px] sm:text-[12px] tracking-[2px] text-[#00C4E3]">PRODUCT</button>
      <h2 class="hero-tagline-1 text-[24px] sm:text-[36px] md:text-[48px] lg:text-[64px] font-extrabold tracking-[8px] bg-[linear-gradient(90deg,#BFD99F_0%,#99EBD7_25%,#9BE0E0_50%,#BFEADB_75%,#D6DAB8_100%)] bg-clip-text text-transparent">PROPERTY</h2>
      <h1 class="hero-tagline-2 mt-[-15px] text-[64px] sm:text-[96px] md:text-[144px] lg:text-[200px] font-extrabold leading-[80px] sm:leading-[114px] md:leading-[148px] lg:leading-[182px] bg-[linear-gradient(90deg,#BFD99F_0%,#99EBD7_25%,#9BE0E0_50%,#BFEADB_75%,#D6DAB8_100%)] bg-clip-text text-transparent">DATABASE</h1>
      <div class="hero relative mt-[-145px] sm:mt-[-210px] md:mt-[-255px] lg:mt-[-345px]">
        <?php
          $page_id = 69;
          $screen_only_photo = get_field('product_screen_hero_photo', $page_id);
          $laptop_full_photo = get_field('product_laptop_hero_photo', $page_id);
          if ($screen_only_photo) {
            echo '<img src="'.esc_url($screen_only_photo).'" class="hero-screen-photo absolute left-0 w-full z-10" alt="Screen">';
          }
          if ($laptop_full_photo) {
            echo '<img src="'.esc_url($laptop_full_photo).'" class="hero-laptop-photo absolute top-0 z-9 opacity-0 w-[83%]" alt="Laptop">';
          }
        ?>
      </div>
    </div>
    <p class="font-inter max-w-[996px] text-center mx-auto text-[#4A5C60] text-[16px] md:text-[20px] leading-[157%] tracking-[0.15px]">
    Whether you’re an owner, occupier, real estate professional, or investor,<br> 
    our <span class="font-inter font-bold">Property Database</span> application will help you track and analyze all of your assets.
    </p>
  </div>
  <section class="min-h-unset lg:min-h-[1024px] block lg:flex mt-[694px] sm:mt-[894px] md:mt-[1034px] lg:mt-[1203px] xl:mt-[1292px] 2xl:mt-[1342px]">
    <div class="bg-[#191919] lg:rounded-br-[24px] h-[1024px] lg:h-auto w-full lg:w-[54.6%] pt-[64px] lg:pt-[114px] pl-[16px] lg:pl-[120px] pr-[16px] lg:pr-[80px]">
      <h2 class="text-[32px] md:text-[56px] text-[#FEFEFE] leading-[1] tracking-[0.2px] font-extrabold mb-[16px]">Key  Feature</h2>
      <p class="font-inter max-w-[586px] text-[16px] text-[#FEFEFE] leading-[157%] tracking-[0.15px] mb-[50px]">Our platform simplifies property management with an intuitive dashboard, automated leases and payments, real-time maintenance tracking, and powerful reporting tools.</p>
      <?php
          $page_id = 69;
          $key_feature_photo = get_field('product_key_feature_photo', $page_id);

          if ($key_feature_photo) {
            echo '<img src="'.esc_url($key_feature_photo).'" class="pointer-events-none object-[25%_0] w-[calc(100% - 16px)] object-cover sm:object-fill sm:object-unset md:static z-1 sm:w-[439px] h-[306px] left-[16px] lg:left-[50px] lg:h-[710px] lg:w-[77.8%] absolute lg:absolute" alt="Screen">';
          }
        ?>
    </div>
    <div class="bg-[#EDF2F7] h-[1260px] lg:h-auto flex-1 pt-0 lg:pt-[80px] pl-[16px] lg:pl-[50px] pr-[16px] lg:pr-[120px] relative">
      <div class="px-0 lg:px-[12px] max-h-unset lg:max-h-[753px] w-[90%] lg:w-full lg:overflow-y-auto mb-[24px] absolute lg:static h-full overflow-y-visible top-[-360px]">
        <div class="p-[24px] lg:p-[32px] bg-[#F8FAFC] border-1 border-[#CCD6E0] rounded-[16px] mb-[12px] lg:mb-[24px]">
          <div class="bg-[#EDF2F7] rounded-full w-[64px] h-[64px] flex items-center justify-center mb-[16px]">
            <?php
              $icon = get_template_directory_uri() . '/assets/images/icon-track.png';
              echo '<div style="background-image: url('.esc_url($icon).');" class="bg-cover bg-center w-[32px] h-[32px]" id="mobileMenu"></div>';
            ?>
          </div>
          <h class="text-[#000000] text-[24px] font-extrabold leading-[1] tracking-[0.2px] mb-[8px]">Comprehensive Asset Tracking</h>
          <p class="font-inter text-[#191919] text-[16px] leading-[157%] tracking-[0.15px]">Access your database of properties, owned or leased, all in one place.</p>
        </div>
        <div class="p-[24px] lg:p-[32px] bg-[#F8FAFC] border-1 border-[#CCD6E0] rounded-[16px] mb-[12px] lg:mb-[24px]">
          <div class="bg-[#EDF2F7] rounded-full w-[64px] h-[64px] flex items-center justify-center mb-[16px]">
            <?php
              $icon = get_template_directory_uri() . '/assets/images/icon-track.png';
              echo '<div style="background-image: url('.esc_url($icon).');" class="bg-cover bg-center w-[32px] h-[32px]" id="mobileMenu"></div>';
            ?>
          </div>
          <h class="text-[#000000] text-[24px] font-extrabold leading-[1] tracking-[0.2px] mb-[8px]">Real-Time Market and Property Data</h>
          <p class="font-inter text-[#191919] text-[16px] leading-[157%] tracking-[0.15px]">Access the most current property information, market trends and statistics, and historical data.</p>
        </div>
        <div class="p-[24px] lg:p-[32px] bg-[#F8FAFC] border-1 border-[#CCD6E0] rounded-[16px] mb-[12px] lg:mb-[24px]">
          <div class="bg-[#EDF2F7] rounded-full w-[64px] h-[64px] flex items-center justify-center mb-[16px]">
            <?php
              $icon = get_template_directory_uri() . '/assets/images/icon-track.png';
              echo '<div style="background-image: url('.esc_url($icon).');" class="bg-cover bg-center w-[32px] h-[32px]" id="mobileMenu"></div>';
            ?>
          </div>
          <h class="text-[#000000] text-[24px] font-extrabold leading-[1] tracking-[0.2px] mb-[8px]">Customizable data</h>
          <p class="font-inter text-[#191919] text-[16px] leading-[157%] tracking-[0.15px]">Capturing property information that matches your needs, including photos, documents, market information, and more.</p>
        </div>
        <div class="p-[24px] lg:p-[32px] bg-[#F8FAFC] border-1 border-[#CCD6E0] rounded-[16px] mb-[12px] lg:mb-[24px]">
          <div class="bg-[#EDF2F7] rounded-full w-[64px] h-[64px] flex items-center justify-center mb-[16px]">
            <?php
              $icon = get_template_directory_uri() . '/assets/images/icon-track.png';
              echo '<div style="background-image: url('.esc_url($icon).');" class="bg-cover bg-center w-[32px] h-[32px]" id="mobileMenu"></div>';
            ?>
          </div>
          <h class="text-[#000000] text-[24px] font-extrabold leading-[1] tracking-[0.2px] mb-[8px]">User-Friendly Interface</h>
          <p class="font-inter text-[#191919] text-[16px] leading-[157%] tracking-[0.15px]">Enjoy a sleek and intuitive design that makes locating properties easy, even for first-time users.</p>
        </div>
        <div class="p-[24px] lg:p-[32px] bg-[#F8FAFC] border-1 border-[#CCD6E0] rounded-[16px] mb-[12px] lg:mb-[24px]">
          <div class="bg-[#EDF2F7] rounded-full w-[64px] h-[64px] flex items-center justify-center mb-[16px]">
            <?php
              $icon = get_template_directory_uri() . '/assets/images/icon-track.png';
              echo '<div style="background-image: url('.esc_url($icon).');" class="bg-cover bg-center w-[32px] h-[32px]" id="mobileMenu"></div>';
            ?>
          </div>
          <h class="text-[#000000] text-[24px] font-extrabold leading-[1] tracking-[0.2px] mb-[8px]">Interactive Maps</h>
          <p class="font-inter text-[#191919] text-[16px] leading-[157%] tracking-[0.15px]">Explore properties with detailed maps.</p>
        </div>
        <div class="p-[24px] lg:p-[32px] bg-[#F8FAFC] border-1 border-[#CCD6E0] rounded-[16px] mb-[12px] lg:mb-[24px]">
          <div class="bg-[#EDF2F7] rounded-full w-[64px] h-[64px] flex items-center justify-center mb-[16px]">
            <?php
              $icon = get_template_directory_uri() . '/assets/images/icon-track.png';
              echo '<div style="background-image: url('.esc_url($icon).');" class="bg-cover bg-center w-[32px] h-[32px]" id="mobileMenu"></div>';
            ?>
          </div>
          <h class="text-[#000000] text-[24px] font-extrabold leading-[1] tracking-[0.2px] mb-[8px]">Advanced Search Filters</h>
          <p class="font-inter text-[#191919] text-[16px] leading-[157%] tracking-[0.15px]">Narrow down your search with customizable filters such as region, market, state, property type, lease vs owned, etc.</p>
        </div>
      </div>
      <p class="link-button down text-[#4A5C60] text-[16px] leading-[1] tracking-[0.2px] text-center">
        Scroll to view more
      </p>
    </div>
  </section>
  <section class="bg-[#EDF2F7]">
    <div class="container">
      <div class="py-[160px]">
        <h2 class="text-[56px] text-center text-[#191919] leading-[1] tracking-[0.2px] font-extrabold mb-[16px]">Product Features</h2>
        <p class="font-inter max-w-[996px] mx-auto text-center text-[16px] text-[#4A5C60] leading-[157%] tracking-[0.15px] mb-[40px]">Our property database streamlines real estate with advanced search, market data, AI recommendations, secure document management, and investment insights—all in a user-friendly interface.</p>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
