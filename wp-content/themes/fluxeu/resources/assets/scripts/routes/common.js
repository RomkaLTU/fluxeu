export default {
  init() {
      const $hamburger = $(".hamburger");
      const $nav = $(".header-right-inner nav");
      const $navlink = $nav.find('a');

      $hamburger.on("click", function() {
          $hamburger.toggleClass("is-active");
          $nav.toggleClass("is-active");
      });

      $nav.on('touchmove scroll', function(e) {
          e.preventDefault();
      });

      $navlink.on('click',function(e){
          e.preventDefault();

          $hamburger.toggleClass("is-active");
          $nav.toggleClass("is-active");
          const $this = $(this);

          $([document.documentElement, document.body]).animate({
              scrollTop: $($this.attr('href')).offset().top,
          }, 1000);
      });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
