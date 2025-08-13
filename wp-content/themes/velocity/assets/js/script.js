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
      const $submenu = $(this).siblings('ul');

      $('.menu-item-has-children ul.submenu-open')
          .not($submenu)
          .stop(true, true)
          .slideUp(200)
          .removeClass('submenu-open');

      $submenu.stop(true, true).slideToggle(200).toggleClass('submenu-open');
  });

  if (window.matchMedia("(hover: hover)").matches) {
    $('.menu-item-has-children')
    .on('mouseleave', function () {
        hideTimeout = setTimeout(() => {
            $(this).find('ul.submenu-open')
                .stop(true, true)
                .animate(
                    { height: 'toggle', opacity: 'toggle' },
                    200,
                    function () {
                        $(this).removeClass('submenu-open');
                    }
                );
        }, 500);
    })
    .on('mouseenter', function () {
        clearTimeout(hideTimeout);
    });
  }

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
    if (!counted && isInViewport($('.count').first())) {
      counted = true;
      animateCounts();
    }
  },0)

  $(window).on('scroll resize', function () {
    if (!counted && isInViewport($('.count').first())) {
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
});