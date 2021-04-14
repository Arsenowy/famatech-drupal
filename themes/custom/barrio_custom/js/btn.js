(function ($) {
  $(document).ready(function () {
    function classForCloseBtn() {
      var width = $( window ).width();
      if(width <= 768) {
      $('#block-glownanawigacja').find('*').click(function() {
        setTimeout(
          function()
          {
            $('.btn-close').addClass("navbar__main--mobileClose");
          }, 400);

      });
      }
    }
    classForCloseBtn();
  });
})(jQuery);
