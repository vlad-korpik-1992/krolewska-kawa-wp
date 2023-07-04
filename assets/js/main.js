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

  $('#send').click(function(e) {
    e.preventDefault();
    let x = document.getElementById('firstname').value;
    if (x === "") {
        document.getElementById('status').textContent = "Wprowadź swoje imię";
        return false;
    }
    x = document.getElementById('phone').value;
    if (x === "") {
      document.getElementById('status').textContent = "Wprowadź swój numer telefonu";
      return false;
    } else {
            let re = /^\+48[0-9]{9}$/g;
            if(!re.test(x)){
                document.getElementById('status').textContent = "Wprowadź swój numer telefonu w formacie +48ХХХХХХХХХXX";
            return false;
        }
    }
    document.getElementById('status').textContent = "Wysyłanie...";

    const formData = {
        'name': $('input[name=firstname]').val(),
        'phone': $('input[name=phone]').val(),
    };

    $.ajax({
        url: "../wp-content/themes/krolewska-kawa/form.php",
        type: "POST",
        data: formData,
        success: function() {
            $('#form').trigger('reset');
            $('#status').text("Wiadomość została wysłana!");
            setTimeout(function () {
                $('#status').text("");
            }, 6000);
        },
        error: function (jqXHR) {
            $('#status').text(jqXHR);
        }
    });
  });
});