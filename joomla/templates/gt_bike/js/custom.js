/* Change Color Preset */
jQuery(function ($) {  
  if ($('.home').length > 0) {
    a = $(".sp-megamenu-parent > li.active > a").css("color");
        document.documentElement.style.setProperty('--background-color',a)
        document.documentElement.style.setProperty('--text-color',a)
  }
  else {
     a = $(".sp-page-title").css("backgroundColor");
     document.documentElement.style.setProperty('--background-color',a)
     document.documentElement.style.setProperty('--text-color',a)
  }
});

/* Skill */
jQuery(function ($) { 
  $(".skill-item").addClass("active")
  $(".skill-item .skill .skill-bar span").each(function() {
     $(this).animate({
        "width": $(this).parent().attr("data-bar") + "%"
     }, 1000);
     $(this).append('<b>' + $(this).parent().attr("data-bar") + '%</b>');
  });
  setTimeout(function() {
     $(".skill-item .skill .skill-bar span b").animate({"opacity":"1"},1000);
  }, 2000);
});

/* Video */
jQuery(function($){
    $(".vpop").on('click', function(e) {
  e.preventDefault();
  $("#video-popup-overlay,#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();
  
  var srchref='',autoplay='',id=$(this).data('id');
  if($(this).data('type') == 'vimeo') var srchref="//player.vimeo.com/video/";
  else if($(this).data('type') == 'youtube') var srchref="https://www.youtube.com/embed/";
  
  if($(this).data('autoplay') == true) autoplay = '?autoplay=1';
  
  $("#video-popup-iframe").attr('src', srchref+id+autoplay);
  
  $("#video-popup-iframe").on('load', function() {
    $("#video-popup-container").show();
  });
});

$("#video-popup-close, #video-popup-overlay").on('click', function(e) {
  $("#video-popup-iframe-container,#video-popup-container,#video-popup-close,#video-popup-overlay").hide();
  $("#video-popup-iframe").attr('src', '');
});

});