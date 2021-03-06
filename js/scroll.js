$("#home").click(function() {
  $('html, body').animate({
    scrollTop: $("#top-home").offset().top
  }, 2000);
});

$("#aboutus").click(function() {
  $('html, body').animate({
    scrollTop: $("#our-company").offset().top
  }, 2000);
});

$("#services").click(function() {
  $('html, body').animate({
    scrollTop: $("#our-services").offset().top
  }, 2000);
});

$("#news_event").click(function() {
  $('html, body').animate({
    scrollTop: $("#news-events").offset().top
  }, 2000);
});

$("#clients").click(function() {
  $('html, body').animate({
    scrollTop: $("#client-list").offset().top
  }, 2000);
});

$("#contact_us").click(function() {
  $('html, body').animate({
    scrollTop: $("#contacts").offset().top
  }, 2000);
});

$(window).scroll(function () {
  //Our Company
  if ($(window).scrollTop() >= $("#our-company").offset().top &&
      $(window).scrollTop() < $("#our-services").offset().top)
  {

    $('#nav_bar').addClass('bottom-fixed');
    $('#heading-company').addClass('heading-company-fixed');

    $("#aboutus").css("background-color", "#021e7a");
    $("#home").css("background-color", "#233d91");
    $("#services").css("background-color", "#233d91");
    $("#news_event").css("background-color", "#233d91");
    $("#clients").css("background-color", "#233d91");
    $("#contact_us").css("background-color", "#233d91");
  }

  //Our Services
  if ($(window).scrollTop() >= $("#our-services").offset().top) {
    $('#nav_bar').addClass('bottom-fixed');
    $('#heading-services').addClass('heading-services-fixed');

    $("#aboutus").css("background-color", "#233d91");
    $("#home").css("background-color", "#233d91");
    $("#services").css("background-color", "#021e7a");
    $("#news_event").css("background-color", "#233d91");
    $("#clients").css("background-color", "#233d91");
    $("#contact_us").css("background-color", "#233d91");
  }

  //Scroll on Top of Services
  if ($(window).scrollTop() < $("#our-services").offset().top &&
      $(window).scrollTop() > $("#our-company").offset().top) {
    $('#heading-services').removeClass('heading-services-fixed');
  }

  //News and Events
  if ($(window).scrollTop() >= $("#news-events").offset().top &&
      $(window).scrollTop() < $("#client-list").offset().top) {
    $('#nav_bar').addClass('bottom-fixed');
    $('#heading-news-events').addClass('heading-news-events-fixed');

    $("#aboutus").css("background-color", "#233d91");
    $("#home").css("background-color", "#233d91");
    $("#services").css("background-color", "#233d91");
    $("#news_event").css("background-color", "#021e7a");
    $("#clients").css("background-color", "#233d91");
    $("#contact_us").css("background-color", "#233d91");
  }

  //Scroll on Top of News and Events
  if ($(window).scrollTop() < $("#news-events").offset().top &&
      $(window).scrollTop() > $("#our-services").offset().top) {
    $('#heading-news-events').removeClass('heading-news-events-fixed');
  }

  //Clients
  if ($(window).scrollTop() >= $("#client-list").offset().top &&
      $(window).scrollTop() < $("#contacts").offset().top) {
    $('#nav_bar').addClass('bottom-fixed');
    $('#heading-client-list').addClass('heading-client-list-fixed');

    $("#aboutus").css("background-color", "#233d91");
    $("#home").css("background-color", "#233d91");
    $("#services").css("background-color", "#233d91");
    $("#news_event").css("background-color", "#233d91");
    $("#clients").css("background-color", "#021e7a");
    $("#contact_us").css("background-color", "#233d91");
  }

  //Scroll on Top of Clients
  if ($(window).scrollTop() < $("#client-list").offset().top &&
      $(window).scrollTop() > $("#news-events").offset().top) {
    $('#heading-client-list').removeClass('heading-client-list-fixed');
  }

  //Contacts
  if ($(window).scrollTop() >=  $("#contacts").offset().top) {
    console.log($(window).scrollTop())
    $('#nav_bar').addClass('bottom-fixed');
    $('#heading-contacts').addClass('heading-contacts-fixed');

    $("#aboutus").css("background-color", "#233d91");
    $("#home").css("background-color", "#233d91");
    $("#services").css("background-color", "#233d91");
    $("#news_event").css("background-color", "#233d91");
    $("#clients").css("background-color", "#233d91");
    $("#contact_us").css("background-color", "#021e7a");
  }

  //Scroll on Top of Contacts
  if ($(window).scrollTop() < $("#contacts").offset().top &&
      $(window).scrollTop() > $("#client-list").offset().top) {
    $('#heading-contacts').removeClass('heading-contacts-fixed');
  }

  //Home
  if ($(window).scrollTop() < $("#our-company").offset().top &&
      $(window).scrollTop() > $("#top-home").offset().top) {
    $('#nav_bar').removeClass('bottom-fixed');
    $('#heading-company').removeClass('heading-company-fixed');

    $("#aboutus").css("background-color", "#233d91");
    $("#home").css("background-color", "#021e7a");
    $("#services").css("background-color", "#233d91");
    $("#news_event").css("background-color", "#233d91");
    $("#clients").css("background-color", "#233d91");
    $("#contact_us").css("background-color", "#233d91");
  }
});
