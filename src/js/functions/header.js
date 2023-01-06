window.addEventListener("load", function(e) {
  /*-----------------------Mobile menu slide--------------- */
  $('[data-control="menu-burger"]').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    var menu = $('.header-mobile-menu');
    menu.slideToggle();
    $('.header-mobile').toggleClass('active');

    $('.header-mobile-menu a').on('click', function () {
        $('.header-mobile').removeClass('active');
        $('[data-control="menu-burger"]').removeClass('active');
        menu.hide();
    });
  });

  /*----------------------------------------------------*/
  /*  Header Fixed
  /*----------------------------------------------------*/

  function onFixed(BF) {
    BF.addClass('is-fixed');
    $('.fixed-phone').addClass('col-md-12');   
  }

  function offFixed(BF) {
    BF.removeClass('is-fixed');
    //$('.fixed-phone').removeClass('col-md-12');
  }

  function blockFixed(BF) {
    const $t = $(".block-fixed");
    const fixedHeight = $(".wpar-fixed").children(".block-fixed").outerHeight();
    const fixedTop = $t.offset().top;
    const topScroll = fixedTop + fixedHeight;

    $(".wpar-fixed").height(fixedHeight);

    $(window).on('scroll resize', function () {
      if ($(this).scrollTop() > topScroll) {
        onFixed($t);
      } else if ($(this).scrollTop() < 20) {
        offFixed($t);
      }
    });
  }

  if ($('*').is('.block-fixed')) {
    $('.block-fixed').wrapAll('<div class="wpar-fixed"></div>');
    blockFixed();
    $(window).on('resize', blockFixed);
  }

  /*----------------------------------------------------*/
  /*  Header Clone
  /*----------------------------------------------------*/
  (function () {
    const hMain = $('.header:not(.is-clone)'),
        hClone = $('.header.is-clone'),
        hMainHeight = hMain.innerHeight(),
        topHeight = hMain.offset().top + hMainHeight,
        hCloneHeight = hClone.innerHeight(),
        hAll = Number(hMainHeight + hCloneHeight);
    //clone = $('.block-fixed').before($('.block-fixed').clone().addClass("clone"));

    $('.header.is-clone').css({
        "top": "-" + hAll + "px"
    });
    $(window).scroll(function () {
      if ($(this).scrollTop() > topHeight) {
        $('.header.is-clone').addClass('is-fixed');
      } else {
        $('.header.is-clone').removeClass('is-fixed');
        $('.header.is-clone').css({
            "top": "-" + hAll + "px"
        });
      }
    });
  }());
})