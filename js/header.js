$(document).ready(function() {
   $(window).on('scroll', function() {
    if($(window).scrollTop() < 1000) {
      $('.hero').css('background-size', 130 + parseInt($(window).scrollTop() / 5) + '%');
      $('.hero h1').css('top', 50 + ($(window).scrollTop() * .1) + '%');
      $('.hero h1').css('opacity', 1 - ($(window).scrollTop() * .003));
    }
     
     if($(window).scrollTop() >= $('.content-wrapper').offset().top - 300) {
       $('.nav-bg').removeClass('bg-hidden');
       $('.nav-bg').addClass('bg-visible');
     } else {
       $('.nav-bg').removeClass('bg-visible');
       $('.nav-bg').addClass('bg-hidden');
     }
  });
});