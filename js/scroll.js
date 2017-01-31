$("#home").click(function() {
  $('html, body').animate({
    scrollTop: $("#top-home").offset().top
  }, 2000);
});

$("#business_profile").click(function() {
  $('html, body').animate({
    scrollTop: $("#our-company").offset().top
  }, 2000);
});

$("#services").click(function() {
  $('html, body').animate({
    scrollTop: $("#our-services").offset().top
  }, 2000);
});

$("#aboutus").click(function() {
  $('html, body').animate({
    scrollTop: $("#our-company").offset().top
  }, 2000);
});

$("#contact_us").click(function() {
  $('html, body').animate({
    scrollTop: $("#our-company").offset().top
  }, 2000);
});

$(window).scroll(function () {
    console.log($(window).scrollTop())
  if ($(window).scrollTop() >= $("#our-company").offset().top &&
      $(window).scrollTop() < $("#our-services").offset().top) {
    $('#nav_bar').addClass('bottom-fixed');
    $('#heading-company').addClass('heading-company-fixed');
    $('#heading-services').addClass('heading-services-fixed');
  }

  if ($(window).scrollTop() >= $("#our-services").offset().top) {
    $('#heading-services').addClass('heading-services-fixed');
  }

  if ($(window).scrollTop() < $("#our-services").offset().top &&
      $(window).scrollTop() > $("#our-company").offset().top) {
    $('#heading-services').removeClass('heading-services-fixed');
  }

  if ($(window).scrollTop() < $("#our-company").offset().top) {
    $('#nav_bar').removeClass('bottom-fixed');
    $('#heading-company').removeClass('heading-company-fixed');
  }
});
