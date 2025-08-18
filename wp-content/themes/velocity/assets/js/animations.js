jQuery(document).ready(function($) {
  gsap.registerPlugin(ScrollTrigger);
  
  function getY() {
    let w = $(window).width();
  
    if (w < 640) {
      return 34;
    } else if (w < 768) {
      return 55;
    } else if (w < 1024) {
      return 37;
    } else if (w < 1280) {
      return 55;
    } else if(w < 1536){
      return 37;
    } else {
      return 30;
    }
  }

  var vertical = getY();

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: '.section-hero',
      start: 'top top',
      end: 'bottom top',
      scrub: true,
      pin: true,
      pinSpacing: false, 
      anticipatePin: 1,
    }
  });

  tl.fromTo('.hero-screen-photo', 
    { scale: 1 }, 
    { scale: .9, opacity: 0, ease: 'none', duration: .0001 }
  );

  tl.fromTo(
    '.hero-laptop-photo', 
    { scale: 2.2, opacity: 0, xPercent: -50, yPercent: 55, left: '50%'},
    { scale: 2.2, opacity: 1, xPercent: -50, yPercent: 55, left: '50%', duration: 0 }
  )
  .to(
    '.hero-laptop-photo',
    { scale: 1, opacity: 1, ease: 'none', xPercent: -50, yPercent: vertical, left: '50%', duration: 1 }
  );
});