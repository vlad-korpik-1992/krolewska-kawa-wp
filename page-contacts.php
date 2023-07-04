<?php
/**
  * Template Name: Kontakty
*/
?>
<?php get_header();?>
    <section class="contacts">
        <div class="wrapper">
            <div class="contacts__box">
                <div class="contacts__box__items">
                    <?php echo wpautop(the_content());?>
                    <div class="contacts__box__inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_adres.png" alt="Adres">
                        <div class="contacts__box__inner__info">
                            <h3>Adres</h3>
                            <p><?php echo the_field('contacts-address');?></p>
                        </div>
                    </div>
                    <div class="contacts__box__inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_email.png" alt="E-mail">
                        <div class="contacts__box__inner__info">
                            <h3>E-mail</h3>
                            <a href="mailto:<?php echo the_field('contacts-mail');?>"><?php echo the_field('contacts-mail');?></a>
                        </div>
                    </div>
                    <div class="contacts__box__inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_tel.png" alt="Telefon">
                        <div class="contacts__box__inner__info">
                            <h3>Telefon</h3>
                            <? $phone = str_replace([' ', '(', ')', '-'], '', get_field('contacts-phone'));?>
                            <a href="tel:<?php echo $phone;?>"><?php echo the_field('contacts-phone');?></a>
                        </div>
                    </div>
                </div>
                <div class="contacts__box__items">
                    <?php echo the_field('contacts-map');?>
                </div>
            </div>
        </div>
    </section>
    <section class="question">
        <div class="wrapper">
            <div class="question__box">
                <div class="question__box__items">
                    <h2>Czy nadal masz pytania?</h2>
                    <p>Wypełnij formularz, a my skontaktujemy się z Tobą w ciągu 30 minut.</p>
                </div>
                <div class="question__box__items">
                    <form action="#" class="form" id="form">
                        <input class="form__input" type="text" placeholder="Imię" name="firstname" id="firstname">
                        <input class="form__input" type="tel" inputmode="tel" placeholder="Numer telefonu" name="phone" id="phone">
                        <button class="form__btn" type="submit" id="send">Wyślij</button>
                        <div class="status" id="status"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>