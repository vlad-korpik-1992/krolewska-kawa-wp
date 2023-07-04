$(document).ready(function() {

  $('.menu__btn').on('click', function (e) {
    e.preventDefault();
    $('.menu__btn').toggleClass('menu__btn--active');
        $('.menu__list').toggleClass('menu__list--active');
  });

  $('.catalog__link').click(function (e) {
    e.preventDefault();
    let elem = e.target;
    let id = '1' + elem.getAttribute('id');
    $('.catalog__box').removeClass('catalog__box--active');
    $('.catalog__link').removeClass('catalog__link--active');
    jQuery("#"+id).addClass('catalog__box--active');
    let idElem = elem.getAttribute('id');
    jQuery("#"+idElem).addClass('catalog__link--active');
  });
});