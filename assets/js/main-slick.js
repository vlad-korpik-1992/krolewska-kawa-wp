$(document).ready(function() {

  $('.menu__btn').on('click', function (e) {
    e.preventDefault();
    $('.menu__btn').toggleClass('menu__btn--active');
        $('.menu__list').toggleClass('menu__list--active');
  });

    $('.related__box').slick({
		mobileFirst: true,
		slidesToShow: 6,
		slidesToScroll: 1,
		rows: 1,
		arrows: true,
		dots: false,
		autoplay: true,
		infinite: true,
    responsive: [
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 5
        }
      },
      {
        breakpoint: 765,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 570,
        settings: {
          dots: false,
          slidesToShow: 3
        }
      },
      {
        breakpoint: 420,
        settings: {
          dots: false,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 370,
        settings: {
          dots: false,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 310,
        settings: {
          dots: false,
          slidesToShow: 1
        }
      }
    ]
	});

    $('.hero__box__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      rows: 1,
      arrows: true,
      dots: false,
      autoplay: false,
      infinite: false
    });
});