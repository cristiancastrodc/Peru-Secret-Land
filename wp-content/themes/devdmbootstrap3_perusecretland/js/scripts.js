(function($) {

  $(document).ready(function() {
    var logo = "<img src='/wp-content/themes/devdmbootstrap3_perusecretland/img/logo.png' alt='' />"
    $('.logo-link').children('a').html(logo)
  });

  // jQuery for adding class on scroll
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $('nav').addClass('navbar-shrink')
    }
    else{
      $('nav').removeClass('navbar-shrink')
    }
  })

  $(document).on('click', '.scroll-link > a', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top + 250
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });

})( jQuery );
