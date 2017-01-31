$("#aboutus").click(function() {
  $('html, body').animate({
    scrollTop: $("#our-company").offset().top
  }, 2000);
});

$("#services").click(function() {
  $('html, body').animate({
    scrollTop: $("#our-company").offset().top
  }, 2000);
});

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

$("#contact_us").click(function() {
  $('html, body').animate({
    scrollTop: $("#our-company").offset().top
  }, 2000);
});

$(window).scroll(function () {
    console.log($(window).scrollTop())
  if ($(window).scrollTop() >= $("#our-company").offset().top) {
    $('#nav_bar').addClass('bottom-fixed');
    $('#myTopnav').addClass('topnav-fixed');
    $('#heading-company').addClass('heading-company-fixed');
  }
  if ($(window).scrollTop() < $("#our-company").offset().top) {
    $('#nav_bar').removeClass('bottom-fixed');
    $('#myTopnav').removeClass('topnav-fixed');
    $('#heading-company').removeClass('heading-company-fixed');
  }
});
