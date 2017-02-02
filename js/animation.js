$(window).scroll(function () {
    console.log($(window).scrollTop())

  //Our Company
  if ($(window).scrollTop() >= $("#our-company").offset().top &&
      $(window).scrollTop() < $("#our-services").offset().top)
  {
    $("#headerDiv").animate({fontSize: '30px'}, "fast");
    $("#servicesDiv").animate({fontSize: '10px'}, "fast");
  }

  if ($(window).scrollTop() >= $("#our-services").offset().top &&
      $(window).scrollTop() < $("#news-events").offset().top)
  {
    $("#headerDiv").animate({fontSize: '10px'}, "fast");
    $("#servicesDiv").animate({fontSize: '30px'}, "fast");
  }

  if ($(window).scrollTop() >= $("#news-events").offset().top &&
      $(window).scrollTop() < $("#contacts").offset().top)
  {
    $("#neDiv3").animate({fontSize: '30px', transitionDelay: "2s"}, "fast");
    $("#servicesDiv").animate({fontSize: '10px', transitionDelay: "2s"}, "fast");
  }
});
