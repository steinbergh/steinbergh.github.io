$(document).ready(function(){ 
  
  //Causes the images in the gallery to lazy load
  $(function() {
    $("img.lazy").lazyload();
  });

  //the code below adds velocity based animations to the website
  $('.home-print, .home-web, .home-about').click(function(){
      var url = $(this).attr('href');
      $('.full-width, .half-width, .quarter-width, footer').css("transition", " ");
      $('.full-width, .half-width, .quarter-width, footer').velocity('transition.bounceOut', function(){
      document.location.href = url;
    });
      return false;
  });

  $('#resume-nav').hide().velocity('transition.slideDownBigIn');
  $('.resume').hide().velocity('transition.slideRightIn', {stagger: 100});

  $('.resume-print, .resume-web, .resume-home').click(function(){
      var url = $(this).attr('href');
      $('#resume-nav, .resume, .quarter-width, footer').velocity('transition.bounceDownOut', function(){
      document.location.href = url;
    });
      return false;
  });
});
