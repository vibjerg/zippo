import '../../vendor/swiper/idangerous.swiper.css';
require('./head-slider.scss');
import Blazy from 'blazy';

let bLazy;

(function initSlider($) {
  window.addEventListener("scroll", () => {
    let top  = window.pageYOffset || document.documentElement.scrollTop;
    let left = window.pageXOffset || document.documentElement.scrollLeft;
    $('.swiper-parlax').each((i, image) => {
      let $image = $(image);
      $image.css({
        'top': -top/4
      });
    });
  });
  addSwiper('.swiper-container');

  window.onload = function () {

    matchBackgroundToContent();
  }

  function addSwiper(className) {
    console.log(className);
    var tabsSwiper = new Swiper(className, {
      speed: 500,
      //autoplay: 8000,
      onSlideChangeStart: function () {
        $(".swiper-tabs .active").removeClass('active')
        $(".swiper-tabs a").eq(tabsSwiper.activeIndex).addClass('active')
      },
      onSlideChangeEnd: () => loadBlazy()
    });
    $(className).mouseover(function (e) {
      tabsSwiper.stopAutoplay()
    });
    $(className).mouseout(function (e) {
      tabsSwiper.startAutoplay()
    });
    $('.swiper-tabs a').first().addClass('active');

    $(".swiper-tabs li").on('touchstart mousedown', function (e) {
      e.preventDefault()
      $(".swiper-tabs .active").removeClass('active')
      $(this).find('a').addClass('active');
      tabsSwiper.swipeTo($(this).index());
    });
    $(".swiper-tabs a").click(function (e) {
      e.preventDefault()
    })
  }

  window.onresize = function () {
    //matchBackgroundToContent();
  }

  //matchBackgroundToContent();
  function matchBackgroundToContent() {
    var max_height = $('.content').outerHeight(true);
    var content_height = $('.swiper-container').outerHeight(true);
    $('.swiper-container img').each(function (i, image) {
      let $image = $(image);
      var top = -($image.height() - content_height) / 2;
      $image.css({
        //'top': top,
        'position': 'relative'
      });
    });
  }
})(jQuery);

(function initializeBlazy() {
  bLazy = new Blazy({
    container: '.swiper-wrapper'
  });
})();

function loadBlazy() {
  bLazy.revalidate();
}