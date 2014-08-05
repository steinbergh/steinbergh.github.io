$(document).ready(function(){
	$('.full-width').mouseenter(function(){
      $('#ampersand').animate({left: "-1000px"}, 300, "swing");
   });

	$('.full-width').mouseleave(function(){
      $('#ampersand').animate({left: "0px"}, 300, "swing");
   });

	$('.half-width').mouseenter(function(){
      $('#curly-brace').animate({top: "-500px"}, 300);
   });
	$('.half-width').mouseleave(function(){
      $('#curly-brace').animate({top: "0px"}, 300)
   });

	$('#Y').mouseenter(function(){
      $('#ellipses').animate({right: "-500px"}, 300);
   });
	$('#Y').mouseleave(function(){
      $('#ellipses').animate({right: "0px"}, 300)

   });
	$('#K').mouseenter(function(){
      $('#at-symbol').animate({bottom: "-500px"}, 300);
   });
	$('#K').mouseleave(function(){
      $('#at-symbol').animate({bottom: "0px"}, 300)
   });
});