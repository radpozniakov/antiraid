$(function(){
  $('.hamburger-menu').click(function(){
  	$('.navigation-top ul').addClass('in');
  });
  $('.navigation-top button').click(function(){
  	
  	 $('.navigation-top ul').removeClass('in');

  });
});