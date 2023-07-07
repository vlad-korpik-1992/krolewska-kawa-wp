<?php
/**
  * Template Name: Prywatny gabinet
*/
?>
<?php

if ( is_user_logged_in() ) {
    $user_info = get_userdata(get_current_user_id());
}
else {
    $location = get_page_link(161);
	wp_safe_redirect( $location, 302 );
	exit;
}

get_header();
?>

    <section class="user">
        <div class="wrapper">
            <div class="user__box">
                
                <div class="user__box__items">
                    <form action="#" class="user__form" method="POST">
                        <?php wp_nonce_field( 'updateuser', 'updateuser_nonce' ) ?>
                        <div class="user__form__items">
                            <label class="user__form__label" for="surname">Nazwisko</label>
                            <input class="user__form__text" type="text" name="surname" id="surname" value="">
                        </div>
                        <div class="user__form__items">
                            <label class="user__form__label" for="firstname">Imię</label>
                            <input class="user__form__text" type="text" name="username" id="username" value="<?php echo $user_info->display_name ?>">
                        </div>
                        <div class="user__form__items">
                            <label class="user__form__label" for="phone">Numer telefonu</label>
                            <input class="user__form__text" type="text" name="phone" id="phone" value="">
                        </div>
                        <div class="user__form__items">
                            <label class="user__form__label" for="email">Email</label>
                            <input class="user__form__text" type="text" name="email" id="email" value="<?php echo $user_info->user_email ?>">
                        </div>
                        <div class="user__form__items--full">
                            <label class="user__form__label" for="address">Adres</label>
                            <input class="user__form__text" type="text" name="address" id="address" value="">
                        </div>
                        <div class="user__form__items">
                            <input type="hidden" name="userid" value="<?php echo get_current_user_id()?>">
                            <button class="user__form__send" type="submit">Zapisz zmiany</button>
                        </div>
                    </form>
                </div>
                <div class="user__box__items">
                    <a class="user__box__items__link" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/user-img-01.jpg);" href="<?php echo get_page_link(36)?>">Menu</a>
                </div>
                <div class="user__box__items">
                    <a class="user__box__items__link user__box__items__link--color" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/user-img-02.jpg);" href="<?php echo get_page_link(60)?>">Akcje</a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>