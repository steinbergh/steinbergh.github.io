$(document).ready(function(){ 

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

//   $('#thumb img').click(function(){
//       console.log("this is working");
//       $('#large').attr('src',$(this).attr('src').replace('thumb','large'));
//   });
// });