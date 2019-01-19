(function($) {
  $(document).find("img[src$='.svg']").each(function() {
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    console.log(imgURL);

    $.get(imgURL, function(data) {
      console.log($(data));
      var $svg = $(data).find('svg');
      if(typeof imgID !== 'undefined') $svg = $svg.attr('id', imgID);
      if(typeof imgClass !== 'undefined') $svg = $svg.attr('class', imgClass+' replaced-svg');
      $svg = $svg.removeAttr('xmlns:a');
      $img.replaceWith($svg);
    }, 'xml');
  });
  })(jQuery);
