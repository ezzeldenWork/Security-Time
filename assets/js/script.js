jQuery(document).ready(function ($) {
  if ($("html").attr("dir") == "rtl") {
    var dir_lang = true;
  } else {
    var dir_lang = false;
  }

  $(".header-section .open-menu i").click(function () {
    $(".header-section .nav-box").addClass("open-menu");
    $("body").addClass("over-flow");
    $(".overlay").fadeIn();
  });
  $(".header-section .nav-box .close-menu i, .overlay").click(function () {
    $(".header-section .nav-box").removeClass("open-menu");
    $("body").removeClass("over-flow");
    $(".overlay").fadeOut();
  });

  $(".fancybox").fancybox();
  $(".portfolio-section  .portfolio-slider").slick({
    slidesToShow: 4,
    arrows: false,
    autoplay: false,
    autoplaySpeed: 2000,
    rtl: dir_lang,
    centerMode: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 772,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".logo-section  .logo-slider").slick({
    slidesToShow: 5,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    rtl: dir_lang,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });
  $(".client-section  .client-slider").slick({
    slidesToShow: 1,
    arrows: false,
    autoplay: false,
    autoplaySpeed: 2000,
    rtl: dir_lang,
  });
});
