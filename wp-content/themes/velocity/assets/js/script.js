jQuery(document).ready(function($) {
  $('#mobileMenuBtn').on('click', function() {
    $('#mobileMenu').fadeToggle(300);

    $(this).find('span').eq(0).toggleClass('rotate-45 translate-y-[6px] m-[5px]');
    $(this).find('span').eq(1).toggleClass('-rotate-45 -translate-y-[6px] m-[5px]');
    
    setTimeout(function() {
      if ($('#mobileMenu').css('display') === 'block') {
        $('body').addClass('no-scroll');
      } else {
        $('body').removeClass('no-scroll');
      }
    }, 360);
  });

  let hideTimeout;
  $('.menu-item-has-children > a').on('click', function (e) {
    e.preventDefault();
    clearTimeout(hideTimeout);

    const $submenu = $(this).siblings('ul.sub-menu');
    const $all = $('.menu-item-has-children > ul.sub-menu');

    $all.not($submenu).each(function () {
      const $el = $(this);
      if ($el.is(':visible')) {
        $el.stop(true, true)
          .css('overflow', 'hidden')
          .slideUp(200, function () {
            $el.removeClass('submenu-open').css('overflow', '');
          });
      }
    });

    if ($submenu.is(':visible')) {
      $submenu.stop(true, true)
        .css('overflow', 'hidden')
        .slideUp(200, function () {
          $submenu.removeClass('submenu-open').css('overflow', '');
        });
    } else {
      $submenu.addClass('submenu-open')
      .css('overflow', 'hidden')
      .hide()
      .slideDown(200, function () {
        $submenu.css('overflow', '');
      });
    }
  });

  if (window.matchMedia('(hover: hover)').matches) {
  $('.menu-item-has-children')
    .on('mouseleave', function () {
      const $submenu = $(this).children('ul.sub-menu.submenu-open:visible');
      if ($submenu.length) {
        hideTimeout = setTimeout(() => {
          $submenu.stop(true, true)
            .css('overflow', 'hidden')
            .slideUp(200, function () {
              $submenu.removeClass('submenu-open').css('overflow', '');
            });
        }, 500);
      }
    })
    .on('mouseenter', function () {
      clearTimeout(hideTimeout);
    });
  }

  $(document).on('click', function (e) {
    // If the click target is NOT inside a menu-item-has-children
    if (!$(e.target).closest('.menu-item-has-children').length) {
      const $openSubmenus = $('.menu-item-has-children > ul.sub-menu.submenu-open:visible');
      $openSubmenus.each(function () {
        const $el = $(this);
        $el.stop(true, true)
          .css('overflow', 'hidden')
          .slideUp(200, function () {
            $el.removeClass('submenu-open').css('overflow', '');
          });
      });
    }
  });

  let scrollTop = $(window).scrollTop();

  if (scrollTop > 56) {
      $("header").addClass("scrolled");
  } else {
      $("header").removeClass("scrolled");
  }
  
  $(window).on("scroll", function () {
    let scrollTop = $(this).scrollTop();

    if (scrollTop > 56) {
        $("header").addClass("scrolled");
    } else {
        $("header").removeClass("scrolled");
    }
  });


  let counted = false;
  function isInViewport(el) {
    let elementTop = $(el).offset().top;
    let elementBottom = elementTop + $(el).outerHeight();

    let viewportTop = $(window).scrollTop();
    let viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
  }

  function animateCounts() {
    $('.count').each(function () {
      let $this = $(this);
      let countTo = parseInt($this.attr('data-count'), 10);
      let duration = 1000; // ms
      let frameRate = 60;
      let totalFrames = Math.round((duration / 1000) * frameRate);
      let frame = 0;

      let counterAnimation = setInterval(function () {
        frame++;
        let progress = frame / totalFrames;
        let current = Math.round(countTo * progress);
        $this.text(current.toLocaleString() + "+");

        if (frame === totalFrames) {
          clearInterval(counterAnimation);
        }
      }, 1000 / frameRate);
    });
  }

  setTimeout(()=> {
    const $firstCount = $('.count').first();
    if ($firstCount.length && !counted && isInViewport($firstCount)) {
      counted = true;
      animateCounts();
    }
  },0)

  $(window).on('scroll resize', function () {
    const $firstCount = $('.count').first();
    if ($firstCount.length && !counted && isInViewport($firstCount)) {
      counted = true;
      animateCounts();
    }
  });

  const elements = $("[data-animate]");

  elements.addClass("opacity-0");
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        $(entry.target)
          .removeClass("opacity-0")
          .addClass("opacity-100 " + $(entry.target).data("animate"));
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  elements.each(function () {
    observer.observe(this);
  });
  
  $('.tabs').each(function () {
    const $tabsWrapper = $(this);
    const $tablist = $tabsWrapper.find('[role="tablist"]');
    const $tabs = $tabsWrapper.find('[role="tab"]');
    const $photo = $tabsWrapper.closest('.product-feature-container').find('.feature-photo');
    const $featureName = $tabsWrapper.closest('.product-feature-container').find('.feature-name');
    const $prevBtn = $tabsWrapper.find('.tab-prev');
    const $nextBtn = $tabsWrapper.find('.tab-next');
  
    // Center the given tab within the visible viewport of the tablist
    function scrollTabIntoCenter($container, $tab) {
      const container = $container[0];
      const tab = $tab[0];
  
      const contRect = container.getBoundingClientRect();
      const tabRect  = tab.getBoundingClientRect();
  
      const tabCenterVisible = (tabRect.left - contRect.left) + (tabRect.width / 2);
      const target = container.scrollLeft + tabCenterVisible - (container.clientWidth / 2);
  
      const maxScroll = container.scrollWidth - container.clientWidth;
      const clamped = Math.max(0, Math.min(maxScroll, target));
  
      $container.animate({ scrollLeft: clamped });
    }
  
    function setActiveTab($newTab, fromArrow = false) {
      $tabs.each(function () {
        const $tab = $(this);
        const isActive = $tab.is($newTab);
        $tab.attr('aria-selected', isActive);
        $tab.attr('tabindex', isActive ? 0 : -1);
        if (isActive) $tab.attr('data-active', true);
        else $tab.removeAttr('data-active');
  
        $('#' + $tab.attr('aria-controls')).toggleClass('hidden', !isActive);
      });
  
      const newPhoto = $newTab.data('photo');
      const newName = $newTab.data('name');
      if (newPhoto) $photo.attr('src', newPhoto);
      if (newName) $featureName.html(newName);
  
      // Arrow visibility
      const index = $tabs.index($newTab);
      const isFirst = index === 0;
      const isLast  = index === $tabs.length - 1;
      $prevBtn.toggleClass('hidden', isFirst);
      $nextBtn.toggleClass('hidden', isLast);
  
      // Keep your margins for arrow gutters (outside the scroll area)
      if ($(window).width() < 1024) {
        $tablist.css({
          'margin-left': isFirst ? '' : '40px',
          'margin-right': isLast ? '' : '40px'
        });
      }
  
   
      scrollTabIntoCenter($tablist, $newTab);
  
      $newTab.focus();
    }
  
    // Initialize
    const $current = $tabs.filter('[aria-selected="true"]').first().length
      ? $tabs.filter('[aria-selected="true"]').first()
      : $tabs.first();
    setActiveTab($current);
  
    // Tab click
    $tabs.on('click', function () {
      setActiveTab($(this));
    });
  
    // Keyboard nav
    $tablist.on('keydown', function (e) {
      const $active = $tabs.filter('[aria-selected="true"]');
      let index = $tabs.index($active);
  
      if (e.key === 'ArrowRight') {
        e.preventDefault();
        setActiveTab($tabs.eq((index + 1) % $tabs.length));
      } else if (e.key === 'ArrowLeft') {
        e.preventDefault();
        setActiveTab($tabs.eq((index - 1 + $tabs.length) % $tabs.length));
      } else if (e.key === 'Home') {
        e.preventDefault();
        setActiveTab($tabs.first());
      } else if (e.key === 'End') {
        e.preventDefault();
        setActiveTab($tabs.last());
      }
    });
  
    // Arrow buttons
    $nextBtn.on('click', function () {
      const $active = $tabs.filter('[aria-selected="true"]');
      let index = $tabs.index($active);
      setActiveTab($tabs.eq(index + 1), true);
    });
  
    $prevBtn.on('click', function () {
      const $active = $tabs.filter('[aria-selected="true"]');
      let index = $tabs.index($active);
      setActiveTab($tabs.eq(index - 1), true);
    });
  });  
});