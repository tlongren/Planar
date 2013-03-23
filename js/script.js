$(function() {
  $('html').addClass('js');

  $('<a href="#" class="navicon"><i class="icon-menu"></i></a>').prependTo('.main-header');

  var trigger = $('a.navicon');
  var sneakyNav = $('.js .main-nav');

  $(trigger).click(function(){
    $(sneakyNav).toggleClass('show');
    $('.wrap, .main-header').toggleClass('move');
    return false;
  });
});