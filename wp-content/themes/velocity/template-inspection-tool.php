<?php
  /**
   * Template Name: Inspection Tool Template
   */
  get_header();
  ?>
  <?php
    $page_id = 48;
    $product_hero_background_overlay = get_field('product_hero_background_overlay', $page_id);

  ?>
  <div class="relative h-full sm:h-[1243px] pt-[100px] sm:pt-[142px] md:pt-[133px] lg:pt-[176px] xl:pt-[176px] bg-center bg-cover bg-no-repeat" style="background-image: url('<?php echo esc_url($product_hero_background_overlay); ?>');">
    <div class="text-center">
      <button data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="mb-[8px] border-[#00C4E3] border bg-[#00C4E31A] rounded-[100px] py-[4px] sm:py-[8px] px-[12px] sm:px-[32px] font-semibold text-[10px] sm:text-[12px] tracking-[2px] text-[#00C4E3]">PRODUCT</button>
      <h1 data-animate="animate-fade-up animate-once animate-fill-both animate-duration-[1000ms]" class="mt-[-15px] text-[32px] sm:text-[64px] md:text-[96px] lg:text-[120px] xl:text-[132px] tracking-[0.2px] font-extrabold leading-[80px] sm:leading-[114px] md:leading-[148px] lg:leading-[182px] bg-[linear-gradient(90deg,#59C2FF_0%,#5496FF_50%,#546BFF_100%)] bg-clip-text text-transparent">INSPECTION TOOL</h1>      
    </div>
    <?php
      $page_id = 48;

      $product_hero_photo = get_field('product_hero_photo', $page_id);

      if ($product_hero_photo) {
        echo '<img data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" src="'.esc_url($product_hero_photo).'" class="relative mt-[-85px] sm:mt-[unset] sm:absolute top-[17%] sm:top-[unset] sm:bottom-0 left-1/2 -translate-x-1/2 transform" alt="Laptop">';
      }
    ?>
    <div class="hidden lg:flex p-[16px] absolute bottom-0 w-full  justify-between max-w-[1200px] left-1/2 -translate-x-1/2 top-[55%]">
      <p data-animate="animate-fade-left animate-once animate-delay-100 animate-fill-both" class="font-inter max-w-[256px] text-[20px] text-[#4A5C60] leading-[157%] tracking-[0.15px]">Designed specifically for commercial real estate portfolios, this innovative mobile app transforms the way you conduct property  assessments.</p>
      <p data-animate="animate-fade-right animate-once animate-delay-100 animate-fill-both" class="font-inter max-w-[256px] text-[20px] text-[#4A5C60] leading-[157%] tracking-[0.15px]">This app streamlines commercial property assessments with real-time data. It boosts accuracy and productivity with instant reports.</p>
    </div>
  </div>
  <section class="lg:hidden py-[32px]">
    <div class="container">
      <p class="font-inter mb-[32px] text-[20px] text-[#4A5C60] leading-[157%] tracking-[0.15px]">Designed specifically for commercial real estate portfolios, this innovative mobile app transforms the way you conduct property  assessments.</p>
      <p class="font-inter text-[20px] text-[#4A5C60] leading-[157%] tracking-[0.15px]">This app streamlines commercial property assessments with real-time data. It boosts accuracy and productivity with instant reports.</p>
    </div>
  </section>
  <section class="bg-[#EEF0EF] relative overflow-hidden">
    <?php
      $page_id = 48;

      $about_tool_background_photo = get_field('about_tool_background_photo', $page_id);

      if ($about_tool_background_photo) {
        echo '<img data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" src="'.esc_url($about_tool_background_photo).'" class="hidden md:block absolute bottom-0 left-[-14px]" alt="Laptop">';
      }
    ?>
    <?php
      $page_id = 48;

      $about_tool_photo = get_field('about_tool_photo', $page_id);

      if ($about_tool_photo) {
        echo '<img data-animate="animate-fade-left animate-once animate-delay-100 animate-fill-both" src="'.esc_url($about_tool_photo).'" class="hidden md:block absolute z-1 bottom-0 right-[-21px]" alt="Laptop">';
      }
    ?>
    <div class="container pt-[64px]! md:pt-[160px]! md:pb-[289px]!">
      <div class="max-w-[689.52px] relative z-1">
        <h4 data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="text-[32px] md:text-[56px] text-[#191919] font-extrabold tracking-[0.2px] mb-[24px]">About The Tool</h4>
        <p data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="text-[16px] md:text-[20px] font-inter text-[#4A5C60] leading-[157%] tracking-[0.15px] mb-[16px]">The cutting-edge tool designed to make your inspections more efficient, insightful and interactive than ever before.</p>
        <p data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="text-[16px] md:text-[20px] font-inter text-[#4A5C60] leading-[157%] tracking-[0.15px] mb-[24px] md:mb-[40px]">With this tool’s intuitive mobile app, conducting thorough property  assessments has never been easier. Say goodbye to cumbersome paperwork  and hello to streamlined inspections.</p>
        <h6 data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="text-[20px] md:text-[24px] text-[#00C4E3] tracking-[0.2%] mb-[40px] font-medium">This revolutionary mobile app will change the way you conduct inspections:​</h6>
        <ul class="text-[16px] text-[#474B4C] font-inter leading-[157%] tracking-[0.15px] pl-[16px] md:pl-[24px] max-w-[484px]">
          <li data-animate="animate-fade-right animate-once animate-delay-100 animate-fill-both" class="pl-[35px] mb-[16px]"><i class="fa-solid fa-circle-check text-[18px] ml-[-35px] mr-[16px] text-[#00C4E3]"></i>Perform inspections on either iOS or Android devices for ultimate flexibility.</li>
          <li data-animate="animate-fade-right animate-once animate-delay-100 animate-fill-both" class="pl-[35px] mb-[16px]"><i class="fa-solid fa-circle-check text-[18px] ml-[-35px] mr-[16px] text-[#00C4E3]"></i>Work in either online or offline mode.</li>
          <li data-animate="animate-fade-right animate-once animate-delay-100 animate-fill-both" class="pl-[35px] mb-[16px]"><i class="fa-solid fa-circle-check text-[18px] ml-[-35px] mr-[16px] text-[#00C4E3]"></i>Add photos or markup floor plans.</li>
          <li data-animate="animate-fade-right animate-once animate-delay-100 animate-fill-both" class="pl-[35px] mb-[16px]"><i class="fa-solid fa-circle-check text-[18px] ml-[-35px] mr-[16px] text-[#00C4E3]"></i>Generate work orders in your existing work order platform.</li>
          <li data-animate="animate-fade-right animate-once animate-delay-100 animate-fill-both" class="pl-[35px] mb-[16px]"><i class="fa-solid fa-circle-check text-[18px] ml-[-35px] mr-[16px] text-[#00C4E3]"></i>Create multiple templates for any inspection type with our flexible template tool.</li>
          <li data-animate="animate-fade-right animate-once animate-delay-100 animate-fill-both" class="pl-[35px] mb-[16px]"><i class="fa-solid fa-circle-check text-[18px] ml-[-35px] mr-[16px] text-[#00C4E3]"></i>Produce professional reports with a click of a button.</li>
          <li data-animate="animate-fade-right animate-once animate-delay-100 animate-fill-both" class="pl-[35px] mb-[16px]"><i class="fa-solid fa-circle-check text-[18px] ml-[-35px] mr-[16px] text-[#00C4E3]"></i>Put away the sticky notes and clipboards!</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="block md:hidden bg-[#EEF0EF] relative h-[576px] overflow-hidden">
    <?php
      $page_id = 48;

      $about_tool_background_photo = get_field('about_tool_background_photo', $page_id);

      if ($about_tool_background_photo) {
        echo '<img data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" src="'.esc_url($about_tool_background_photo).'"class="h-[532.9px] object-cover object-left w-[731.47px] absolute bottom-0 left-[-11px]" alt="Laptop">';
      }
    ?>
    <?php
      $page_id = 48;

      $about_tool_photo = get_field('about_tool_photo', $page_id);

      if ($about_tool_photo) {
        echo '<img data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" src="'.esc_url($about_tool_photo).'" class="h-[576px] absolute z-1 bottom-0 right-[-147px]" alt="Laptop">';
      }
    ?>
  </section>
  <section class="relative">
    <div class="bg-[#233134] h-full md:h-[576px] absolute top-0 w-full z-[-1]"></div>
    <div class="container px-0!">
      <h4 data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="mx-auto text-center text-[32px] md:text-[56px] text-[#FEFEFE] font-extrabold tracking-[0.2px] max-w-[984px] mb-[64px] md:mb-[40px] mt-[64px] md:mt-[89px]">See how to transform your Property Inspections</h4>
      <?php
      $page_id = 48;
      $video_url = get_field('inspection_video', $page_id); 
      $inspection_video_subtitle = get_field('inspection_video_subtitle', $page_id);
      $page_id2 = 69;
      $header_logo_id = get_field('logo_light', $page_id2);
      $logo = wp_get_attachment_image_src($header_logo_id, 'full'); 
      if ($video_url):
          // detect file extension
          $ext = pathinfo($video_url, PATHINFO_EXTENSION);

          if ($ext === 'm3u8'): ?>
              <!-- HLS adaptive streaming -->
              <div data-animate="animate-fade animate-once animate-delay-100 animate-fill-both" class="video-container rounded-0 md:rounded-[16px] relative">
                <video class="rounded-0 md:rounded-[16px]" width="100%"  height="100%" id="video-player" playsinline title="Velocity Properties Inspection Tool" description="watch our Inspection Tool video now and revolutionize the way you inspect properties.">
                    <source src="<?php echo esc_url($video_url); ?>" type="application/x-mpegURL">
                    <track kind="subtitles" srclang="en" label="English"  src="<?php echo esc_url($inspection_video_subtitle); ?>" default>
                </video>
                <div class="bottom-[20px] absolute items-center flex justify-between w-full max-w-[90%] left-1/2 -translate-x-1/2">
                  <div class="flex flex-col items-start">
                    <img class="max-w-[50%] md:max-w-[100%]" src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo get_bloginfo('name') ?>">
                    <span class="text-[#B8D6E0] text-[4px] md:text-[7px] uppercase ml-[2px] md:ml-[5px] tracking-[1px] md:tracking-[8px] text-center">inspection tool</span>
                  </div>
                  <div class="controls text-[#FFFFFF] text-[7px] md:text-[18px] leading-[22px] md:leading-[50px] flex gap-[7px] md:gap-[13px]">
                    <a class="cursor-pointer block sound-btn rounded-[25px] border-1 border-white w-[40px] md:w-[80px] h-[25px] md:h-[50px] text-center"><i class="fa-solid fa-volume-high"></i></a>
                    <a class="cursor-pointer block play-btn rounded-[25px] border-1 border-white  w-[40px] md:w-[80px] h-[25px] md:h-[50px] text-center"><i class="fa-solid fa-play"></i></a>
                    <a class="cursor-pointer block learn-more-btn rounded-[25px] border-1 border-white h-[25px] md:h-[50px] w-[85px] md:w-[185px] text-center" href="#">
                    Learn more <i class="fa-solid fa-play ml-[10px]"></i>
                    </a>
                  </div>
                </div>
              </div>
              

              <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
              <script>
                  document.addEventListener("DOMContentLoaded", function () {
                      var video = document.getElementById('video-player');
                      if (Hls.isSupported()) {
                          var hls = new Hls();
                          hls.loadSource('<?php echo esc_url($video_url); ?>');
                          hls.attachMedia(video);
                      } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                          video.src = '<?php echo esc_url($video_url); ?>';
                      }
                  });
              </script>

          <?php elseif ($ext === 'mp4'): ?>
              <!-- Normal MP4 playback -->
              <video controls playsinline width="100%">
                  <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
              </video>
          <?php endif; ?>

      <?php endif; ?>
    </div>
  </section>
  <section>
    <div class="container py-[48px]! md:py-[80px]!">
      <h4 data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="text-[32px] md:text-[56px] text-[#191919] tracking-[0.2px] font-extrabold text-center mb-[32px] md:mb-[80px]">Inspection Tool Process</h4>
      <div class="overflow-x-auto">
        <?php
          $page_id = 48;
          $inspection_process = get_field('inspection_process', $page_id); 
        ?>
        <iframe data-animate="animate-fade animate-once animate-delay-100 animate-fill-both" class="h-[255px] md:h-[503.88px] w-full"  src="<?php echo esc_url($inspection_process); ?>" title="Iframe Example"></iframe>
      </div>
    </div>
  </section>
  <section class="bg-[#EDF2F7]">
    <div class="container py-[64px]! lg:pt-[80px]! lg:pb-[160px]!">
      <h4 data-animate="animate-fade-left animate-once animate-delay-100 animate-fill-both" class="text-[32px] md:text-[56px] text-[#191919] tracking-[0.2px] font-extrabold mb-[108px] lg:mb-[34px] max-w-unset text-center lg:text-left lg:max-w-[607.57px]">Velocity is available on these Systems</h4>
      <div class="bg-[#DCE5EF] mb-[32px] h-[289px] md:h-[500px] lg:h-full py-[105px] px-[77.95px] relative rounded-[16px] overflow-x-clip">
        <?php
          $page_id = 48;
          $available_system_photo = get_field('available_system_photo', $page_id);
          if ($available_system_photo) {
            echo '<img data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="rounded-b-[16px] max-w-[125%] sm:max-w-full absolute bottom-0 left-1/2 translate-x-[-50%] lg:left-[unset] lg:right-0 lg:translate-x-[79px]" src="'.esc_url($available_system_photo).'" alt="Laptop">';
          }
        ?>
        <div class="hidden gap-[48px] flex-col lg:flex">
          <?php
            $page_id = 48;
            $available_system = get_field('available_system', $page_id);
            if ($available_system) {
              foreach ($available_system as $index => $system) {
               echo '<div class="flex gap-[32px]" data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both">
                      <div class="h-[64px] w-[64px] rounded-full bg-[#CAD8E7] flex items-center justify-center">
                       <img src="'.esc_url($system['icon']).'" class="" alt="Laptop">
                      </div>
                      <div class="max-w-[288px]">
                        <h6 class="text-[24px] tracking-[0.2px] text-[#191919] font-extrabold mb-[16px]">'. esc_html($system['name']) .'</h6>
                        <p class="text-[16px] text-[#000000] tracking-[0.2px]">'. esc_html($system['description']) .'</p>
                      </div>
                    </div>';
              }
            }
          ?>
        </div>
      </div>
      <div class="lg:hidden gap-[24px] flex-col flex">
        <?php
          $page_id = 48;
          $available_system = get_field('available_system', $page_id);
          if ($available_system) {
            foreach ($available_system as $index => $system) {
              echo '<div class="flex gap-[24px] items-center">
                    <div class="h-[64px] w-[64px] rounded-full bg-[#CAD8E7] flex items-center justify-center">
                      <img src="'.esc_url($system['icon']).'" class="" alt="Laptop">
                    </div>
                    <div class="max-w-[240px]">
                      <h6 class="text-[16px] tracking-[0.2px] text-[#191919] font-extrabold mb-[8px]">'. esc_html($system['name']) .'</h6>
                      <p class="text-[14px] text-[#000000] tracking-[0.2px]">'. esc_html($system['description']) .'</p>
                    </div>
                  </div>';
            }
          }
        ?>
      </div>
    </div>
  </section>
  <section class="bg-[#FEFEFE] relative">
    <?php
    $page_id = 48;
    $features_background_overlay   = get_field('features_background_overlay', $page_id);
    $features_background_photo   = get_field('features_background_photo', $page_id);

    if ($features_background_overlay) {
      echo '<div class="left-0 right-0 bg-no-repeat bg-center pointer-events-none absolute bottom-0 h-[1322px]" style="background-image: url('.esc_url($features_background_overlay).')" alt="Laptop"></div>';
    }
    if ($features_background_photo) {
      echo '<div class="left-0 right-0 bg-no-repeat bg-right lg:bg-center pointer-events-none absolute bottom-0 h-[1308px]" style="background-image: url('.esc_url($features_background_photo).')" alt="Laptop"></div>';
    }
    ?>
    <div class="relative container pr-0! lg:pr-[16px]! pt-[64px]! md:pt-[160px]! pb-[205px]! md:pb-[118px]!">
      <h4 data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="text-center text-[32px] md:text-[56px] text-[#191919] tracking-[0.2px] font-extrabold mb-[32px] md:mb-[80px]">
        Choose Your Plan
      </h4>
      <div class="flex flex-col md:flex-row md:items-center gap-[12px] md:gap-0 pb-[80px]">
        <?php
        $page_id = 48;
        $plans   = get_field('plan', $page_id);

        if ($plans) {
          foreach ($plans as $index => $plan) {
            $isEnterprise = strtolower($plan['name']) === 'enterprise';

            // === Defaults ===
            $cardBg     = 'bg-[#F8FAFC]';
            $badgeBg    = 'bg-[#00C4E31A]';
            $border     = 'border-[#CCD6E0]';
            $rounded    = $index === 0 ? 'rounded-[16px] md:rounded-tr-[0] md:rounded-br-[0]' : ''; // first card rounded-left
            $titleColor = 'text-[#191919]';
            $badgeColor = 'text-[#00C4E3]';
            $desc       = '<p class="mb-[32px] text-[16px] text-[#4A5C60] leading-[157%] tracking-[0.15px]">
                            <span class="font-bold mr-[2px]">$10</span>on the next month
                          </p>';
            $button     = "<button class='cursor-pointer w-full bg-[#191919] py-[12px] rounded-[100px] mb-[40px] text-[#FEFEFE] font-bold text-[16px] tracking-[0.25px]'>
                            Subscribe now
                          </button>";
            $label      = '<span class="text-[#4A5C60] text-[16px] font-normal">/30 days</span>';
            $liColor = 'text-[#474B4C]';
            // === Enterprise Override ===
            if ($isEnterprise) {
              $cardBg     = 'bg-[#191919]';
              $badgeBg    = 'bg-[#FEFEFE1A]';
              $rounded    = 'rounded-[16px]';
              $titleColor = 'text-white';
              $badgeColor = 'text-white';
              $desc       = "<p class='mb-[32px] text-[16px] text-[#FEFEFE] leading-[157%] tracking-[0.15px]'>
                              Paid annually—let's discuss better pricing options
                            </p>";
              $button     = "<button class='cursor-pointer w-full bg-[#FEFEFE] py-[12px] rounded-[100px] mb-[40px] text-[#191919] font-bold text-[16px] tracking-[0.25px]'>
                              Get a quote
                            </button>";
              $label      = ''; // no label for enterprise
              $liColor = 'text-[#FEFEFE]';
            }

            // === Features List ===
            $features = '';
            if (!empty($plan['description'])) {
              foreach ($plan['description'] as $item) {
                $features .= '<li class="pl-[35px] mb-[16px] '.$liColor.'">
                                <i class="fa-solid fa-circle-check text-[18px] ml-[-35px] mr-[16px] text-[#00C4E3]"></i>
                                '.esc_html($item['description']).'
                              </li>';
              }
            }

            // === Card Output ===
            echo '<div data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="flex-1 p-[32px] '.$cardBg.' border '.$border.' '.$rounded.'">
                    <span class="font-semibold inline-block py-[8px] px-[24px] text-[12px] tracking-[2px] '.$badgeBg.' '.$badgeColor.' rounded-[100px] mb-[8px]">
                      '.esc_html($plan['name']).'
                    </span>

                    <h1 class="'.$titleColor.' text-[64px] tracking-[0.2px] font-extrabold">
                      '.esc_html($plan['label']).$label.'
                    </h1>

                    '.$desc.'
                    '.$button.'

                    <ul class="text-[16px] text-[#474B4C] leading-[157%] tracking-[0.15px] max-w-[484px]">
                      '.$features.'
                    </ul>
                  </div>';
          }
        }
        ?>
      </div>
      <div data-animate="animate-fade-up animate-once animate-delay-100 animate-fill-both" class="overflow-x-auto w-full">
        <div class="flex px-[24px]">
          <div class="py-[22px] px-[24px] min-w-[430px] w-[46%] text-[24px] text-[#191919] font-extrabold">Features</div>
          <div class="py-[22px] px-[24px] min-w-[255px] w-[27%] text-[24px] text-[#191919] font-extrabold">Subscription</div>
          <div class="py-[22px] px-[24px] min-w-[255px] w-[27%] text-[24px] text-[#191919] font-extrabold">Enterprise</div>
        </div>
        <div class="w-fit lg:w-full p-[24px] bg-[#FEFEFE] border border-[#CCD6E0] rounded-[16px]">
        <?php
          $features = get_field('features', $page_id);
          if ($features) {
            foreach ($features as $index => $feature) {
              $feature_name = strtolower(trim(preg_replace('/\p{C}+/u', '', $feature['feature'])));
              $bg = '';
              $border = '';
              if($index % 2 == 0){
                $bg = 'bg-[#F8FAFC]';
              }
              if(count($features) != ($index + 1)){
                $border = 'border-b-1 border-b-[#CCD6E0]';
              }
              echo '<div class="flex">';
              echo '<div class="font-inter min-w-[430px] text-[#191919] font-medium py-[14px] pl-[24px] w-[46%] '.$border.' '.$bg.'">'. esc_html($feature['feature']) . '</div>';    

              // Subscription column
              echo '<div class="min-w-[255px] px-[16px] py-[14px] w-[27%] '.$border.' '.$bg.'">';
              if ($feature_name === 'support') {
                if (in_array('subscription', $feature['plans'])) {
                  echo 'Email support';
                }
              } else {
                if (in_array('subscription', $feature['plans'])) {
                  echo '<i class="fa-solid fa-circle-check text-[#00C4E3] text-[18px]"></i>';
                }
              }
              echo '</div>';

              // Enterprise column
              echo '<div class="min-w-[255px] px-[16px] py-[14px] pr-[24px] w-[27%] '.$border.' '.$bg.'">';
              if ($feature_name === 'support') {
                if (in_array('enterprise', $feature['plans'])) {
                  echo 'Phone support';
                }
              } else {
                if (in_array('enterprise', $feature['plans'])) {
                  echo '<i class="fa-solid fa-circle-check text-[#00C4E3] text-[18px]"></i>';
                }
              }
              echo '</div>';
              echo '</div>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[#FEFEFE]">
    <div class="container px-0! md:px-[16px]!">
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
