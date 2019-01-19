'use strict';

(function($) {
  var $scanlines = $('.scanline');
  $scanlines
    .children().hide()
    .first().show();
  
    $('#togglescanlines').on('click', function(e) {
      e.preventDefault();
      $scanlines.toggleClass('scanlines');
    });
})(jQuery);