$(document).on('ready', function () {
    // initialization of carousel
    $.HSCore.components.HSCarousel.init('.js-carousel');

    // initialization of tabs
    $.HSCore.components.HSTabs.init('[role="tablist"]');

    // initialization of counter
    var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

    // initialization of go to
    $.HSCore.components.HSGoTo.init('.js-go-to');
  });

  $(window).on('load', function () {
    // initialization of header
    $.HSCore.components.HSHeader.init($('#js-header'));
    $.HSCore.helpers.HSHamburgers.init('.hamburger');

    // initialization of HSMegaMenu component
    $('.js-mega-menu').HSMegaMenu({
      event: 'hover',
      pageContainer: $('.container'),
      breakpoint: 991
    });

    // initialization of vertical progress bar
    setTimeout(function () { // important in this case
      var verticalProgressBars = $.HSCore.components.HSProgressBar.init('.js-vr-progress-bar', {
        direction: 'vertical',
        indicatorSelector: '.js-vr-progress-bar-indicator'
      });
    }, 1);
  });

  $(window).on('resize', function () {
    setTimeout(function () {
      $.HSCore.components.HSTabs.init('[role="tablist"]');
    }, 200);
  });