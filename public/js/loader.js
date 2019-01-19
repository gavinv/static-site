(function($) {

  var $main = $('.container');
  var $loader = $('#loader');
  var $progress = $('.progress');

  function init() {
    $main.addClass('loading');
    $loader.addClass('loading');
  }

  init();

  $progress.css('animation', 'loader ' + (Math.random() * 6.66 + .5) + 's linear 1s forwards');
  $progress.on('animationend', function(e) {
    if (e.originalEvent.animationName == 'loader') {
      $main.removeClass('loading');
      $main.addClass('loaded');
  
      $loader.removeClass('loading');
      $loader.addClass('loaded');
    }
  });

})(jQuery);